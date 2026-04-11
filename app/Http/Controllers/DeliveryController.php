<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DeliveryController extends Controller
{
    public function index()
    {
        $stats = [
            'total'            => Delivery::count(),
            'assigned'         => Delivery::where('status', 'assigned')->count(),
            'out_for_delivery' => Delivery::where('status', 'out_for_delivery')->count(),
            'delivered'        => Delivery::where('status', 'delivered')->count(),
            'failed'           => Delivery::where('status', 'failed')->count(),
        ];

        return view('admin.deliveries.index', compact('stats'));
    }

    public function getData()
    {
        $deliveries = Delivery::with('order')->latest();

        return DataTables::of($deliveries)
            ->addIndexColumn()
            ->addColumn('order_number', fn($d) =>
                '<a href="'.route('admin.orders.show', $d->order_id).'" class="fw-semibold text-primary">'.
                e($d->order->order_number).
                '</a>'
            )
            ->addColumn('customer_col', fn($d) =>
                '<div>'.
                    '<p class="mb-0 fw-semibold">'.e($d->order->first_name.' '.$d->order->last_name).'</p>'.
                    ($d->order->shop_name
                        ? '<small class="text-muted">'.e($d->order->shop_name).'</small>'
                        : '').
                '</div>'
            )
            ->addColumn('customer_phone', fn($d) => e($d->order->phone))
            ->addColumn('order_total', fn($d) => 'PKR '.number_format($d->order->total, 2))
            ->addColumn('status_badge', fn($d) => $this->statusBadge($d->status))
            ->addColumn('assigned_at_col', fn($d) =>
                $d->assigned_at ? $d->assigned_at->format('d M Y, h:i A') : '<span class="text-muted">—</span>'
            )
            ->addColumn('delivered_at_col', fn($d) =>
                $d->delivered_at ? $d->delivered_at->format('d M Y, h:i A') : '<span class="text-muted">—</span>'
            )
            ->addColumn('actions', fn($d) =>
                '<button class="btn btn-success-light btn-sm me-1 edit-delivery-btn"
                    data-id="'.$d->id.'"
                    data-name="'.e($d->delivery_person_name).'"
                    data-phone="'.e($d->delivery_person_phone).'"
                    data-status="'.$d->status.'"
                    data-notes="'.e($d->notes).'"
                    title="Edit">
                    <i class="ri-edit-line"></i>
                </button>
                <button class="btn btn-danger-light btn-sm delete-delivery-btn"
                    data-id="'.$d->id.'"
                    title="Delete">
                    <i class="ri-delete-bin-line"></i>
                </button>'
            )
            ->rawColumns(['order_number','customer_col','status_badge','assigned_at_col','delivered_at_col','actions'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_id'              => 'required|exists:orders,id',
            'delivery_person_name'  => 'required|string|max:100',
            'delivery_person_phone' => 'required|string|max:20',
            'status'                => 'required|in:assigned,out_for_delivery,delivered,failed',
            'notes'                 => 'nullable|string|max:255',
        ]);

        // Check if delivery already exists for this order
        $existing = Delivery::where('order_id', $request->order_id)->first();
        if ($existing) {
            return response()->json([
                'success' => false,
                'message' => 'Delivery already assigned for this order. Please edit instead.'
            ], 422);
        }

        $delivery = Delivery::create([
            'order_id'              => $request->order_id,
            'delivery_person_name'  => $request->delivery_person_name,
            'delivery_person_phone' => $request->delivery_person_phone,
            'status'                => $request->status,
            'notes'                 => $request->notes,
            'assigned_at'           => now(),
            'delivered_at'          => $request->status === 'delivered' ? now() : null,
        ]);

        // Sync order status
        Order::findOrFail($request->order_id)->update([
            'status'                => $request->status === 'delivered' ? 'delivered' : 'processing',
            'delivery_person_name'  => $request->delivery_person_name,
            'delivery_person_phone' => $request->delivery_person_phone,
        ]);

        return response()->json(['success' => true, 'message' => 'Delivery assigned successfully!']);
    }

    public function update(Request $request, $id)
    {
        $delivery = Delivery::findOrFail($id);

        $request->validate([
            'delivery_person_name'  => 'required|string|max:100',
            'delivery_person_phone' => 'required|string|max:20',
            'status'                => 'required|in:assigned,out_for_delivery,delivered,failed',
            'notes'                 => 'nullable|string|max:255',
        ]);

        $delivery->update([
            'delivery_person_name'  => $request->delivery_person_name,
            'delivery_person_phone' => $request->delivery_person_phone,
            'status'                => $request->status,
            'notes'                 => $request->notes,
            'delivered_at'          => $request->status === 'delivered' ? now() : $delivery->delivered_at,
        ]);

        // Sync order status
        $delivery->order->update([
            'status'                => $request->status === 'delivered' ? 'delivered'
                : ($request->status === 'failed' ? 'cancelled' : 'processing'),
            'delivery_person_name'  => $request->delivery_person_name,
            'delivery_person_phone' => $request->delivery_person_phone,
        ]);

        return response()->json(['success' => true, 'message' => 'Delivery updated successfully!']);
    }

    public function destroy($id)
    {
        Delivery::findOrFail($id)->delete();
        return response()->json(['success' => true, 'message' => 'Delivery record deleted!']);
    }

    // ── Helper ────────────────────────────────────────────────
    private function statusBadge(string $status): string
    {
        return match($status) {
            'assigned'         => '<span class="badge bg-primary">Assigned</span>',
            'out_for_delivery' => '<span class="badge bg-warning text-dark">Out for Delivery</span>',
            'delivered'        => '<span class="badge bg-success">Delivered</span>',
            'failed'           => '<span class="badge bg-danger">Failed</span>',
            default            => '<span class="badge bg-secondary">'.ucfirst($status).'</span>',
        };
    }
}