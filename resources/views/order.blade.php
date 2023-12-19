<!-- resources/views/order.blade.php -->
@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="card">
        <form action="{{ route('process.order') }}" method="post" class="order-form">
            @csrf <!-- Laravel CSRF token -->

            <div class="form-group">
                <label for="customer_name">Your Name:</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="country_code">Country Code:</label>
                <select id="country_code" name="country_code" class="form-control" required>
                    <option value="+254">+254 (Kenya)</option>
                    <option value="+255">+255 (Uganda)</option>
                    <option value="+256">+256 (Tazania)</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="tel" id="phone_number" name="phone_number" class="form-control" required>
                <small>Exclude the country code</small>
            </div>

            <div class="form-group">
                <label for="service_needed">Service Needed:</label>
                <select id="service_needed" name="service_needed" class="form-control" required>
                    <option value="spare_part">Spare Part</option>
                    <option value="customization">Customization</option>
                </select>
            </div>

            <div class="form-group">
                <label for="part_name">Part Name:</label>
                <input type="text" id="part_name" name="part_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>

            <button type="button" class="btn" style="background-color: orange" onclick="showConfirmation()">Place Order</button>
        </form>
    </div>
   </div>

  <div id="confirmationCard" class="card" style="display: none;">
       <h1>Order Confirmation</h1>
       <div id="confirmationContent"></div>
       <button type="button" class="btn btn-primary" onclick="confirmOrder()">Confirm</button>
   </div>

   <!-- Include the app.js script -->
   <script src="{{ asset('js/app.js') }}"></script>

   <!-- Add your custom script to show the confirmation card -->
   <script>
       function showConfirmation() {
           // Get form data
           var formData = {
               'Your Name': document.getElementById('customer_name').value,
               'Part Name': document.getElementById('part_name').value,
               'Quantity': document.getElementById('quantity').value,
               // Add more fields as needed
           };

           // Display data in the confirmation card
           document.getElementById('confirmationContent').innerHTML = '';
           for (var key in formData) {
               document.getElementById('confirmationContent').innerHTML += '<p><strong>' + key + ':</strong> ' + formData[key] + '</p>';
           }

           // Show the confirmation card
           document.getElementById('confirmationCard').style.display = 'block';
       }

       function confirmOrder() {
           // Update the confirmation card message
           document.getElementById('confirmationContent').innerHTML = '<p>Order placed successfully!</p>';

           // Optionally, you can add logic to perform additional actions

           // Hide the confirmation card after a delay (e.g., 2 seconds)
           setTimeout(function() {
               document.getElementById('confirmationCard').style.display = 'none';
           }, 2000);
       }
   </script>
@endsection
