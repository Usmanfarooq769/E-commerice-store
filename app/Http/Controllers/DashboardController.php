<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
{
   $orders = Order::with(['items.product.category'])
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

// New Visitors = users with role 'guest-users'
$newVisitors = User::whereHas('roles', function($q) {
    $q->where('name', 'guest-users');
})->count();

$newCustomers = User::whereHas('roles', function($q) {
        $q->where('name', 'guest-users');
    })
    ->whereHas('orders')
    ->with(['orders' => function($q) {
        $q->latest()->limit(1);
    }])
    ->latest()
    ->take(5)
    ->get();

// Revenue growth
$previousRevenue = Order::whereYear('created_at', now()->subMonth()->year)
    ->whereMonth('created_at', now()->subMonth()->month)
    ->sum('total');

$growth = $previousRevenue > 0
    ? round((($totalRevenue - $previousRevenue) / $previousRevenue) * 100, 1)
    : 0;



// Top Customers: top 5 users by total order amount
$topCustomers = User::whereHas('orders')
    ->with('orders')
    ->get()
    ->map(function($user) {
        $user->total_spent = $user->orders->sum('total');
        $user->orders_count = $user->orders->count();
        $user->last_order = $user->orders->sortByDesc('created_at')->first();
        return $user;
    })
    ->sortByDesc('total_spent')
    ->take(5);

// Sale products for Premier Product Selections carousel
$saleProducts = \App\Models\Product::whereNotNull('sale_price')
    ->where('sale_price', '>', 0)
    ->where('status', 'active')
    ->latest()
    ->take(6)
    ->get();
       


        $months = [];
$totalOrdersSeries = [];
$revenueSeries = [];
$profitSeries = [];

for ($i = 11; $i >= 0; $i--) {
    $date = Carbon::now()->subMonths($i);
    $months[] = $date->format('M');

    $monthlyOrders = Order::whereYear('created_at', $date->year)   // renamed
        ->whereMonth('created_at', $date->month)
        ->count();

    $revenue = Order::whereYear('created_at', $date->year)
        ->whereMonth('created_at', $date->month)
        ->sum('total');

    $profit = $revenue * 0.2;

    $totalOrdersSeries[] = $monthlyOrders;   // use renamed variable
    $revenueSeries[] = (int) $revenue;
    $profitSeries[] = (int) $profit;
}

    return view('dashboard', compact(
    'orders',
    'totalOrders',
    'totalRevenue',
    'totalSales',
    'growth',
    'newVisitors',
    'topProducts',
    'newCustomers',
    'topCustomers',
    'saleProducts',
    'months',
    'totalOrdersSeries',
    'revenueSeries',
    'profitSeries',
));
}
}
