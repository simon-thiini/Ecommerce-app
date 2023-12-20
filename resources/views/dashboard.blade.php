<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3" style="max-width: 1240px;">
            <div class="row g-0">
                <h5 class="card-title" style="background-color: orange">Dashboard</h5>
                <div class="card-body">
                    <!-- Your dashboard content goes here -->

                    <!-- Link to view orders -->
                    <a href="{{ route('admin.orders') }}" class="btn btn-primary">View Orders</a>
                </div>
            </div>
        </div>
    </div>
@endsection
