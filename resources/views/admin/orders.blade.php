<!-- resources/views/admin/orders.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Orders</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Part Name</th>
                    <th scope="col">Quantity</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->part_name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <!-- Add more columns as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
