@extends('frontend.master.master')
@section('title')
contact
@endsection

@section('content')

<div class="container">
    <div class="container py-4">
        <h2>Your Cart</h2>
      
        @if ($cart && $cart->cartItems->count() > 0)
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cart->cartItems as $item)
                <tr>
                  <td>{{ $item->product->name }}</td>
                  <td> {{ $item->quantity }} </td>
                  <td>${{ $item->product->price * $item->quantity }}</td>

                  <td>
                    <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
      
          <div class="row">
            <div class="col-md-6">
              </div>
            <div class="col-md-6 text-right">
              <form action="{{ route('orders.create') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary float-right">Checkout</button>
              </form>
            </div>
          </div>
      
        @else
          <p class="text-center">Your cart is empty.</p>
        @endif
      </div>

@endsection