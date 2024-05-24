@extends('frontend.master.master')

@section('title')
    product
@endsection

@section('content')

<div class="container">
    <h2>Your Wishlist</h2>

    @if ($wishlist && $wishlist->wishlistItems->count() > 0)
        <ul>
            @foreach ($wishlist->wishlistItems as $item)
                <li>
                    {{ $item->product->name }}
                    <form action="{{ route('wishlist.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>Your wishlist is empty.</p>
    @endif
</div>

@endsection