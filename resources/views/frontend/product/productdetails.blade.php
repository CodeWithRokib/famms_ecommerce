@extends('frontend.master.master')

@section('title')
    product details
@endsection

@section('content')

<div class="container">
    <h2>Product Details</h2>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
             
            <img src="{{ asset('storage/' . $product->image) }}" class="card-img" alt="{{ $product->name }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    @if(isset($product))
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><small class="text-muted">Price: ${{ $product->price }}</small></p>
                        <p class="card-text"><small class="text-muted">Quantity: {{ $product->quantity }}</small></p>
                        <p class="card-text"><small class="text-muted">Code: {{ $product->code }}</small></p>
                        <p class="card-text"><small class="text-muted">Discount: {{ $product->discount }}%</small></p>
                        <p class="card-text"><small class="text-muted">Status: {{ ucfirst($product->status) }}</small></p>
                    @else
                        <p class="card-text">Product not found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection