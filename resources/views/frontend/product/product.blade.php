@extends('frontend.master.master')

@section('title')
    product
@endsection

@section('content')
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Product Grid</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>products</span>
                </h2>
            </div>

            <div class="row">  
                @foreach ($products as $product)     
                    <div class="col-sm-6 col-md-4 col-lg-3 p-5">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <div class="form-group">
                                            <label type="hidden" for="quantity"></label>
                                            <input type="hidden" name="quantity" id="quantity" class="form-control" value="1" min="1">
                                        </div>
                                        <button type="submit" class="option1 rounded-pill">Add to Cart</button>
                                    </form>
                                   

                                        <a href="{{ route('product.show', $product->id) }}" class="option2"> Details </a>
                                   
                              
                                </div>
                            </div>
                            <div class="img-box">
                                {{-- <img src="{{ asset('storage/' . $product->image) }}"  alt=""> --}}
                                <img src="{{ asset('storage/' . $product->image) }}" class="card-img" alt="{{ $product->name }}">

                            </div>
                            <div class="detail-box">
                                <h5>{{ $product->name ?? '' }}</h5>
                                <h6>{{ $product->price ?? '' }}</h6>
                            </div>
                        </div>

                    </div>
                    @endforeach
               </div>
        <div class="btn-box">
            <a href="">
                View All products
            </a>
        </div>
        </div>
    </section>
    <!-- end product section -->
@endsection
