<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('order');
    }

    public function processOrder(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string',
            'email' => 'required|email',
            'service_needed' => 'required|string',
            'part_name' => 'required|string',
            'quantity' => 'required|integer',
            'description' => 'required|string',
        ]);

        // Set contact_number to an empty string if not provided
        $validatedData['contact_number'] = $validatedData['contact_number'] ?? '';

        // Save the order to the database
        $order = Order::create($validatedData);

        return redirect()->route('order.confirmation', ['order' => $order]);
    }

    public function confirmation(Order $order)
    {
        return view('order-confirmation', compact('order'));
    }
}
