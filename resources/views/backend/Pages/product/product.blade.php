@extends('backend.layouts.app')
@section('title', 'Products')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Products</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a>Dashboard</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#addProductModal"><i
                            class="fa fa-plus"></i> Add Product</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <!-- products -->
                <div class="card">
                    <div class="card-body table-responsive">
                        <table  class="table table-striped table-sm text-center align-middle" id="datatable" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Scategory Name</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Description</th>
                                    <th>Code</th>
                                    <th>Discount</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $product->category_name }}</td>
                                        <td>{{ $product->subcategory_name }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->discount }}</td>
                                        <th> <img src="{{ asset('storage/' . $product->image) }}" style="height: 100px; width:100px;" class="card-img" alt=""></th>
                                        <td>{{ $product->status }}</td>
                                        <td>
                                         <a href="#" id="" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editCategoryModal"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
                                        
                                         <a href="#" id="" class="text-danger mx-1 deleteIcon"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div id="addProductModal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('product.store')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="service-fields mb-3">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Category<span class="text-danger">*</span></label>
                                        <select class="select2 form-select form-control" name="category_name">
                                            <option value="" selected>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->category_name }}">
                                                    {{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Sub Category <span class="text-danger">*</span></label>
                                        <select class="select2 form-select form-control" name="subcategory_name">
                                            <option value="" selected>Select Category</option>
                                            @foreach ($subcategories as $category)
                                                <option value="{{ $category->subcategory_name }}">
                                                    {{ $category->subcategory_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Product Name<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Quantity<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="quantity" value="{{ old('quantity') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Selling Price<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="price"
                                            value="{{ old('price') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Discount (%)<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="discount" value="{{ old('discount') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Code<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="code" value="{{old('code')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Descriptions <span class="text-danger">*</span></label>
                                        <textarea class="form-control service-desc" name="description" value="{{old('description')}}"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Status <span class="text-danger">*</span></label>
                                        <select class="select2 form-select form-control" name="status">
                                            <option value="" selected>Select Status</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">InActive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit" 
                                >Submit</button>
                        </div>
                    </form>
                    <!-- /Add Product -->
                </div> 
                
            </div>
        </div>
    </div>

    <!-- add end -->

    <div id="editProductModal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Product</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" id="edit_product_form" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="id" id="id" value="id">
                        <div class="service-fields mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Product <span class="text-danger">*</span></label>
                                        <select class="select2 form-select form-control" id="purchase_id" name="product">
                                            @if (!empty($purchases))
                                                @foreach ($purchases as $item)
                                                    <option value="{{ $item->id }}">{{ $item->product }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Quantity<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-fields mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Selling Price<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="price" name="price">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Discount (%)<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="discount" name="discount">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="service-fields mb-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Descriptions <span class="text-danger">*</span></label>
                                        <textarea class="form-control service-desc" id="description" name="description"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" id="edit_product_btn" type="submit"
                                name="form_submit" value="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
   

@endsection
