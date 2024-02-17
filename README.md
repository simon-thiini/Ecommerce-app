<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
    <div  class="welcome-container">
           <div class="card mb-3" style="max-width: 1240px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('images/111.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" style="background-color: orange">EVALAST MOTOBIKE</h5>
                        <p class="card-text">Experience the thrill of the EVRLAST motorcycle, available in 5 vibrant colors! Unleash power, style, and agility in every ride. Elevate your journey with EVRLAST – where performance meets personality!</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
             </div>
             <div class="card mb-3" style="max-width: 1240px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('images/parts.jpeg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" style="background-color: orange">SPARE PARTS</h5>
                        <p class="card-text">Discover a comprehensive range of EVRLAST motorcycle spare parts. Quality craftsmanship ensures peak performance. Your journey matters to us – rely on our genuine spare parts for a seamless ride.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
             </div>
              <div class="card mb-3" style="max-width: 1240px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('images/gear.jpeg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" style="background-color: orange">DRIVING GEAR</h5>
                        <p class="card-text">Elevate your riding experience with EVRLAST motorcycle gear. Designed for comfort and protection, our stylish collection ensures you ride with confidence. Explore our gear for the ultimate biking adventure!</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
             </div>
    </div>
@endsection
