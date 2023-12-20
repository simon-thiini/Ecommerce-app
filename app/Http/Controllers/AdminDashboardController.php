<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmationMail;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function viewOrders()
    {
        // Fetch orders with orderBy
        $orders = Order::orderBy('created_at')->get();

        return view('admin.orders', ['orders' => $orders]);
    }

    // Add a method to send an email
    public function sendEmail(Order $order)
    {
        // Adjust the email logic as needed
        Mail::to($order->email)->send(new OrderConfirmationMail($order));

        // You can add a success message or redirect back to the orders page
        return redirect()->route('admin.orders')->with('success', 'Email sent successfully!');
    }
}
