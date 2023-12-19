<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('images/weeeeh.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="background-color: orange">Paint and Graphics Customization:</h5>
                    <p class="card-text">Transform your ride with our expert paint and graphics customization. Express your personality on the road, turning heads with vibrant colors and personalized design. Ride in style</p>
                </div>
                {{-- <a href="{{ route('products') }}" class="btn" style="background-color: orange">View Parts</a> --}}
                <a href="{{ route('order') }}" class="btn" style="background-color: orange">Make an Order</a>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('images/custom.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="background-color: orange">Performance Upgrades</h5>
                    <p class="card-text">Unleash the full potential of your bike with our performance upgrades. From enhanced engines to precision handling, our customization options ensure a thrilling and powerful riding experience.</p>
                </div>
                {{-- <a href="{{ route('products') }}" class="btn" style="background-color: orange">View Parts</a> --}}
                <a href="{{ route('order') }}" class="btn" style="background-color: orange">Make an Order</a>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('images/parts2.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="background-color: orange">Accessories and Gadgets</h5>
                    <p class="card-text">"Elevate your ride with our range of accessories and gadgets. From sleek handlebars to high-tech navigation systems, customize your bike for optimal comfort, functionality, and cutting-edge style</p>
                </div>
                {{-- <a href="{{ route('products') }}" class="btn" style="background-color: orange">View Parts</a> --}}
                <a href="{{ route('order') }}" class="btn" style="background-color: orange">Make an Order</a>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>
            </div>
    </div>
   </div>
@endsection
