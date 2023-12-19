<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
   <div class="container">
        <div class="card mb-3" style="max-width: 1240px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('images/111.jpg') }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="background-color: orange">Contact Us</h5>
        <p class="card-text">Email: evalast@gmail.com</p>
        <a href="mailto:your.email@example.com" target="_blank" rel="noopener noreferrer">
            <i class="fas fa-envelope"></i> Email Us
        </a>
        <p class="card-text">PhoneNumber:+254 115054152</p>
        <a href="tel:+254 115054152">
            <i class="fas fa-phone"></i> Call Us
        </a>
        <p class="card-text">P.O.Box: 63-40500  Rumuruti</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
   </div>
@endsection
