@extends('frontend.master.master')

@section('title')
    product
@endsection

@section('content')

<div class="container">
    <h2>Your Orders</h2>

    @if ($orders->count() > 0)
      <div class="container py-4">
        @foreach ($orders as $order)
          <div class="card mb-3">
            <div class="card-header">
              <h3 class="card-title">Order #{{ $order->id }}</h3>
            </div>
            <div class="card-body">
              <p>Total Price: ${{ $order->total_price }}</p>
              <p>Status: {{ $order->status }}</p>
              <ul class="list-group">
                @foreach ($order->orderItems as $item)
                  <li class="list-group-item">{{ $item->product->name }} - {{ $item->quantity }} x ${{ $item->price }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p class="text-center">You have no orders.</p>
    @endif
</div>

@endsection