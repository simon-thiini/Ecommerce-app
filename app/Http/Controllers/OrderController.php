<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
     public function create(Request $request){
        return view('order');
    }
    public function processOrder(Request $request)
    {
        $validatedData = $request->validate([
            'part_name' => 'required|string',
            'quantity' => 'required|integer',
            'customer_name' => 'required|string',
            'contact_number' => 'required|string', // Consider using phone validation library
        ]);

        // Store form data in the session
        Session::put('orderFormData', $validatedData);

        return redirect()->route('order.confirmation');
    }
    public function confirmOrder()
    {
        // Retrieve form data from the session
        $orderFormData = Session::get('orderFormData');

        // Save the order to the database
        $order = Order::create($orderFormData);

        // Clear the session data
        Session::forget('orderFormData');

        return "Order placed successfully!";
    }

}
