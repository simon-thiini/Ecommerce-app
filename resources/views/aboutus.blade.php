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
                        <h5 class="card-title" style="background-color: orange">ABOUT Us</h5>
                        <p class="card-text"> we're not just selling motorcycles; we're crafting experiences. We understand the passion for riding and curate a selection of premium bikes, ensuring every journey is a thrilling adventure. Welcome to a destination where enthusiasts find their perfect ride and embark on unforgettable journeys</p>
                        <p class="card-text">Beyond the sale, our commitment extends to unparalleled service and support. Our knowledgeable team is here to guide you, offering expert advice on maintenance, customization, and accessories. Whether you're a seasoned rider or a newcomer, join our community and let us be the driving force behind your two-wheeled aspirations. At our shop, it's not just about selling motorcycles; it's about fostering a culture of riding, camaraderie, and the pure joy of the open road. Welcome to a place where your biking dreams come to life.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
                </div>
    </div>
@endsection
