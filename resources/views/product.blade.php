<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
   <div class="container">
         <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('images/engine.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Engine Parts</h5>
                    <p class="card-text">Optimize performance with precision-engineered components. Explore our engine parts for reliable power and enhanced motorcycle efficiency</p>
                </div>
                <a href="{{ route('order') }}" class="btn" style="background-color: orange">Make an Order</a>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('images/parts1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Brake System</h5>
                    <p class="card-text">Ensure safety on every ride. Discover top-quality brake parts for responsive stopping power and dependable braking performance</p>
                </div>
                <a href="{{ route('order') }}" class="btn" style="background-color: orange">Make an Order</a>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('images/electricals.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Electrical Components</h5>
                    <p class="card-text">Power up your ride with premium electrical parts. Browse our selection for reliable batteries, lights, and electronic components.</p>
                </div>
                <a href="{{ route('order') }}" class="btn" style="background-color: orange">Make an Order</a>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>
            </div>
    </div>
     <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('images/sussus.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Suspension Systems</h5>
                    <p class="card-text">Smooth out the bumps. Elevate your ride with high-performance suspension parts for improved handling and a comfortable journey</p>
                </div>
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
                    <h5 class="card-title">Body and Accessories:</h5>
                    <p class="card-text">Customize your style. Enhance aesthetics and functionality with our diverse range of body parts and accessories. Ride in personalized comfort and flair.</p>
                </div>
                <a href="{{ route('order') }}" class="btn" style="background-color: orange">Make an Order</a>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('images/llll.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Body Gear</h5>
                    <p class="card-text">Elevate your journey with premium gear: Stylish Jackets, Protective Helmets, Precision Gloves, Confidence-boosting Boots, and Comfortable Riding Pants. Explore the ultimate fusion of performance, safety, and style!.</p>
                </div>
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
