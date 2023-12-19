<!-- resources/views/order/confirmation.blade.php -->
@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="card">
        <h1>Order Confirmation</h1>

        <div class="form-group">
            <label>Your Name:</label>
            <p>{{ session('orderFormData.customer_name') }}</p>
        </div>

        <div class="form-group">
            <label>Part Name:</label>
            <p>{{ session('orderFormData.part_name') }}</p>
        </div>

        <div class="form-group">
            <label>Quantity:</label>
            <p>{{ session('orderFormData.quantity') }}</p>
        </div>

        <!-- Add more fields as needed -->

        <form action="{{ route('confirm.order') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Confirm</button>
        </form>
    </div>
   </div>
   <script>
       document.addEventListener('DOMContentLoaded', function () {
           document.querySelector('form').addEventListener('submit', function (e) {
               e.preventDefault(); // Prevent the default form submission

               // Optionally, you can add additional confirmation logic here

               // Submit the form using JavaScript
               this.submit();
           });
       });
   </script>
@endsection
