<!-- resources/views/order-confirmation.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <h1>Order Confirmation</h1>
            <div id="confirmationContent">
                <!-- Display order details here -->
                <p><strong>Your Name:</strong> {{ $order->customer_name }}</p>
                <p><strong>Part Name:</strong> {{ $order->part_name }}</p>
                <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
                <!-- Add more fields as needed -->
            </div>

            <!-- Add buttons for dismiss, delete, and edit -->
            <div class="mt-3">
                <button type="button" class="btn btn-success" onclick="dismissOrder()">Dismiss</button>
                <button type="button" class="btn btn-danger" onclick="deleteOrder()">Delete</button>
                <button type="button" class="btn btn-primary" onclick="editOrder()">Edit</button>
            </div>
        </div>
    </div>

    <!-- Include the app.js script -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Add your custom script for dismiss, delete, and edit actions -->
    <script>
        function dismissOrder() {
            // You can add logic for dismiss action
            alert('Order dismissed. Proceeding as is...');
            window.location.href = "{{ route('order.confirmation', ['order' => $order]) }}";
        }

        function deleteOrder() {
            // You can add logic for delete action
            if (confirm('Are you sure you want to delete this order?')) {
                alert('Order deleted. Redirecting to home page...');
                window.location.href = "{{ route('welcome') }}";
            }
        }

        function editOrder() {
            // You can add logic for edit action
            alert('Redirecting to edit order page...');
            // You may redirect to the edit page or implement a modal for editing
            // window.location.href = "{{ route('order.edit', ['order' => $order]) }}";
        }
    </script>
@endsection
