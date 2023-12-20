<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderConfirmationController extends Controller
{
     public function sendEmail(Order $order)
    {
        // Adjust the email logic as needed
        Mail::to($order->email)->send(new OrderConfirmationMail($order));

        // You can add a success message or redirect back to the orders page
        return redirect()->route('admin.orders')->with('success', 'Email sent successfully!');
    }
}
