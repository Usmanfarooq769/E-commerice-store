<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Delivery;

class OrderController extends Controller
{
    public function index()
    {
         if (!auth()->user()->can('view orders')) {
            abort(403, 'Unauthorized');
        }
        $stats = [
            'all'       => Order::count(),
            'pending'   => Order::where('status', 'pending')->count(),
            'cancelled' => Order::where('status', 'cancelled')->count(),
            'delivered' => Order::where('status', 'delivered')->count(),
        ];

        return view('admin.orders.index', compact('stats'));
    }

    public function getData()
    {

    if (!auth()->user()->can('view orders')) {
            abort(403, 'Unauthorized');
        }
        $orders = Order::with(['items.product', 'user'])->latest();

        return DataTables::of($orders)
            ->addIndexColumn()
            ->addColumn('product_col', fn($o) => $this->productCell($o))
            ->addColumn('customer_col', fn($o) =>
                '<div class="d-flex align-items-center">
                    <div class="avatar avatar-sm me-2 avatar-rounded bg-primary-transparent">
                        <span class="fw-bold text-primary">'.strtoupper(substr($o->first_name, 0, 1)).'</span>
                    </div>
                    '.e($o->first_name.' '.$o->last_name).'
                    '.($o->shop_name ? '<br><small class="text-muted">'.e($o->shop_name).'</small>' : '').'
                </div>'
            )
            ->addColumn('status_badge', fn($o) => $this->statusBadge($o->status))
            ->addColumn('payment_col', fn($o) =>
                $o->payment_method === 'cod'
                    ? '<span class="badge bg-warning text-dark">Cash on Delivery</span>'
                    : '<span class="badge bg-info">Card</span>'
            )
            ->addColumn('cost_col', fn($o) => 'PKR '.number_format($o->total, 2))
            ->addColumn('date_col', fn($o) => $o->created_at->format('d M Y'))
           ->addColumn('actions', function ($o) {

                $user = auth()->user();
                $buttons = '';
                if ($user->can('view orders')) {
                    $buttons .= '
                        <a href="'.route('admin.orders.show', $o->id).'"
                            class="btn btn-icon btn-sm btn-primary-light me-1" title="View">
                            <i class="ri-eye-line"></i>
                        </a>
                    ';
                }
                
                if ($user->can('download orders')) {
                    $buttons .= '
                        <a href="'.route('admin.order.invoice', $o->id).'"
                            class="btn btn-icon btn-sm btn-info-light me-1" title="Invoice">
                            <i class="ri-download-line"></i>
                        </a>
                    ';
                }
                if ($user->can('delete orders')) {
                    $buttons .= '
                        <button class="btn btn-icon btn-sm btn-danger-light delete-order-btn"
                            data-id="'.$o->id.'" title="Delete">
                            <i class="ri-delete-bin-line"></i>
                        </button>
                    ';
                }

                return $buttons;
            })
            ->rawColumns(['product_col','customer_col','status_badge','payment_col','actions'])
            ->make(true);
    }

    public function show($id)
    {
        if (!auth()->user()->can('view orders')) {
            abort(403, 'Unauthorized');
        }
        $order = Order::with(['items.product', 'user' , 'delivery'])->findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

   public function assignDelivery(Request $request, $id)
    {
        if (!auth()->user()->can('assign orders')) {
            abort(403, 'Unauthorized');
        }

        $request->validate([
            'delivery_person_name'  => 'required|string|max:100',
            'delivery_person_phone' => 'required|string|max:20',
            'notes'                 => 'nullable|string',
        ]);

        $order = Order::findOrFail($id);

        $order->update([
            'status' => 'processing',
        ]);

        Delivery::create([
            'order_id'              => $order->id, 
            'delivery_person_name'  => $request->delivery_person_name,
            'delivery_person_phone' => $request->delivery_person_phone,
            'status'                => 'assigned', 
            'notes'                 => $request->notes,
            'assigned_at'           => now(),
            'delivered_at'          => null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Delivery person assigned successfully!',
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        if (!auth()->user()->can('status orders')) {
            abort(403, 'Unauthorized');
        }

        $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled'
        ]);

        $order = Order::with('delivery')->findOrFail($id);
        if (in_array($request->status, ['processing' ,'shipped', 'delivered']) && !$order->delivery) {
            return response()->json([
                'success' => false,
                'message' => 'Please assign delivery boy first!'
            ], 422);
        }
        $order->update([
            'status' => $request->status
        ]);
        if ($order->delivery) {

            if ($request->status == 'shipped') {
                $order->delivery->update([
                    'status' => 'out for delivery'
                ]);
            }

            if ($request->status == 'delivered') {
                $order->delivery->update([
                    'status' => 'delivered',
                    'delivered_at' => now()
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully!'
        ]);
    }

    public function destroy($id)
    {

    if (!auth()->user()->can('delete order')) {
            abort(403, 'Unauthorized');
        }
        Order::findOrFail($id)->delete();
        return response()->json(['success' => true, 'message' => 'Order deleted!']);
    }

    // Helpers 
    private function productCell(Order $order): string
    {
        $first = $order->items->first();
        if (!$first) return '—';

        $img = $first->product?->image_url ?? asset('assets/images/ecommerce/png/1.png');
        $more = $order->items->count() > 1
            ? '<br><small class="text-muted">+'.($order->items->count() - 1).' more</small>'
            : '';

        return '<div class="d-flex align-items-center">
            <span class="avatar avatar-sm avatar-square bg-gray-300 me-2">
                <img src="'.$img.'" class="w-100 h-100">
            </span>
            <div>
                <p class="fw-semibold mb-0">'.e($first->product_name).'</p>'
                .$more.
            '</div>
        </div>';
    }

    private function statusBadge(string $status): string
    {
        return match($status) {
            'pending'    => '<span class="badge bg-secondary">Pending</span>',
            'processing' => '<span class="badge bg-warning text-dark">Processing</span>',
            'shipped'    => '<span class="badge bg-primary">Shipped</span>',
            'delivered'  => '<span class="badge bg-success">Delivered</span>',
            'cancelled'  => '<span class="badge bg-danger">Cancelled</span>',
            default      => '<span class="badge bg-light text-dark">'.ucfirst($status).'</span>',
        };
    }
}