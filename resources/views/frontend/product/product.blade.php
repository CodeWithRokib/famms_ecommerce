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
                {{-- <div class="col-sm-6 col-md-4 col-lg-3">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Men's Shirt
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p1.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Men's Shirt
                       </h5>
                       <h6>
                          $75
                       </h6>
                    </div>
                 </div>
              </div> --}}
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="" class="option1">Add To Cart</a>

                                        <a href="{{ route('product.show', $product->id) }}" class="option2"> Details </a>
                                   
                              
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="{{ asset('storage/' . $product->image) }}"  alt="">

                            </div>
                            <div class="detail-box">
                                <h5>{{ $product->name ?? '' }}</h5>
                                <h6>{{ $product->price ?? '' }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
