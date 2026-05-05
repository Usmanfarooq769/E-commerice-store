<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
{
    $orders = Order::with(['items.product'])
        ->latest()
        ->latest()
       ->paginate(10);

       $topProducts = OrderItem::with('product.category')
        ->select('product_id',
            DB::raw('SUM(quantity) as total_sales')
        )
        ->groupBy('product_id')
        ->orderByDesc('total_sales')
        ->take(5)
        ->get();
    // Stats
    $totalOrders = Order::count();
    $totalRevenue = Order::sum('total');

    $totalSales = Order::where('status', 'delivered')->sum('total');

    // simple example % (you can improve later)
    $previousRevenue = Order::whereMonth('created_at', now()->subMonth()->month)->sum('total');

    $growth = $previousRevenue > 0
        ? round((($totalRevenue - $previousRevenue) / $previousRevenue) * 100, 1)
        : 0;


        $months = [];
$totalOrdersSeries = [];
$revenueSeries = [];
$profitSeries = [];

for ($i = 11; $i >= 0; $i--) {

    $date = Carbon::now()->subMonths($i);

    $months[] = $date->format('M');

    $orders = Order::whereYear('created_at', $date->year)
        ->whereMonth('created_at', $date->month)
        ->count();

    $revenue = Order::whereYear('created_at', $date->year)
        ->whereMonth('created_at', $date->month)
        ->sum('total');

    // simple profit logic (customize if you have cost column)
    $profit = $revenue * 0.2;

    $totalOrdersSeries[] = $orders;
    $revenueSeries[] = (int) $revenue;
    $profitSeries[] = (int) $profit;
}

    return view('dashboard', compact(
        'orders',
        'totalOrders',
        'totalRevenue',
        'totalSales',
        'growth' ,
        'topProducts',
         'months',
        'totalOrdersSeries',
        'revenueSeries',
        'profitSeries' ,
    ));
}
}
