<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function viewOrders()
    {
        $orders = Order::all();
        return view('admin.orders', compact('orders'));
    }
}
