@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3" style="max-width: 1240px;">
            <div class="row g-0">
                <h5 class="card-title bg-orange text-orange p-3">Orders</h5>
                <div class="card-body">
                    @if($orders->isEmpty())
                        <p>No orders have been made.</p>
                    @else
                        <div class="list-group">
                            @foreach($orders as $order)
                                <div class="list-group-item list-group-item-action mb-3">
                                    <h6 class="mb-2"><strong>Order Number:</strong> {{ $loop->index + 1 }}</h6>
                                    <p class="mb-1"><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
                                    <p class="mb-1"><strong>Email:</strong> {{ $order->email }}</p>
                                    <p class="mb-1"><strong>Service Needed:</strong> {{ $order->service_needed }}</p>
                                    <p class="mb-1"><strong>Part Name:</strong> {{ $order->part_name }}</p>
                                    <p class="mb-1"><strong>Quantity:</strong> {{ $order->quantity }}</p>
                                    <p class="mb-1"><strong>Description:</strong> {{ $order->description }}</p>
                                    <p class="mb-1"><strong>Order Placed At:</strong> {{ $order->created_at }}</p>

                                    <!-- Email link with dynamically set email address -->
                                    <a style="background-color: orange" href="mailto:{{ $order->email }}" target="_blank" rel="noopener noreferrer" class="btn ">Send Email</a>

                                    <!-- Status badges -->
                                    <p class="mb-1"><strong>Status:</strong>
                                        @if($order->status == 'placed')
                                            <span class="badge bg-info text-dark">Placed</span>
                                        @elseif($order->status == 'in_progress')
                                            <span class="badge bg-warning text-dark">In Progress</span>
                                        @elseif($order->status == 'finished')
                                            <span class="badge bg-success">Finished</span>
                                        @endif
                                    </p>

                                    <!-- Buttons for updating status -->
                                    <form action="{{ route('order.update-status', ['order' => $order, 'status' => 'placed']) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-info btn-sm">Set Placed</button>
                                    </form>
                                    <form action="{{ route('order.update-status', ['order' => $order, 'status' => 'in_progress']) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-warning btn-sm">Set In Progress</button>
                                    </form>
                                    <form action="{{ route('order.update-status', ['order' => $order, 'status' => 'finished']) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success btn-sm">Set Finished</button>
                                    </form>

                                    <!-- Add more details or buttons as needed -->
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
