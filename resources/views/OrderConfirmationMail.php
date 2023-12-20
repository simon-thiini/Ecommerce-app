@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3" style="max-width: 1240px;">
            <div class="row g-0">
                <h5 class="card-title" style="background-color: orange">Orders</h5>
                <div class="card-body">
                    <p>Dear {{ $order->customer_name }},</p>
                    <p>Your order with order number {{ $order->order_number }} has been confirmed.</p>
                    <p>Thank you for choosing our services!</p>

                </div>
            </div>
        </div>
    </div>
@endsection
