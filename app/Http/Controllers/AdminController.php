<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function viewOrders()
    {
        $orders = Order::all(); // You can customize this query as needed
        return view('admin.orders', compact('orders'));
    }
}
