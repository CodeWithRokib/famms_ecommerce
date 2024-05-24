@extends('frontend.master.master')

@section('title')
    product details
@endsection

@section('content')

<div class="container heading_container heading_center">
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
                          <!-- Add to Cart Form -->
                          <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1">
                            </div>
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    @else
                        <p class="card-text">Product not found.</p>
                    @endif
                </div>
            </div>
        </div>
  <!-- Reviews Section -->
  <div class="reviews">
    <h3>Reviews</h3>
    @if ($product->reviews->count() > 0)
        @foreach ($product->reviews as $review)
            <div class="review">
                <strong>{{ $review->user->name }}</strong>
                <span>{{ $review->rating }} stars</span>
                <p>{{ $review->comment }}</p>
            </div>
        @endforeach
    @else
        <p>No reviews yet.</p>
    @endif
</div>

<!-- Add Review Form -->
@auth
<div class="add-review">
    <h3>Add a Review</h3>
    <form action="{{ route('reviews.store', $product->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="rating">Rating</label>
            <select name="rating" id="rating" class="form-control" required>
                <option value="1">1 star</option>
                <option value="2">2 stars</option>
                <option value="3">3 stars</option>
                <option value="4">4 stars</option>
                <option value="5">5 stars</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea name="comment" id="comment" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>
</div>
@else
<p><a href="{{ route('login') }}">Log in</a> to add a review.</p>
@endauth
</div>
 </div>

@endsection