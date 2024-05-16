@extends('backend.layouts.app')
@section('title','categories')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Categories</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a">Dashboard</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#addCategoriesModal"><i
                            class="fa fa-plus"></i> Add Categories</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <!-- Categoriess -->
                <h3 class="text-center">List of all SubCategories</h3>

                <div class="card-body table-responsive">
                    <table  class="table table-striped table-sm text-center align-middle" id="datatable" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($subcategories as $subcategory)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $subcategory->category_name }}</td>
                                    <td>{{ $subcategory->subcategory_name }}</td>
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
                    <!-- /Categoriess-->
                </div>
            </div>
        </div>
    </div>

    </div>
    <div id="addCategoriesModal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Sub Categories</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('subcategory.store')}}" method="POST">
                        @csrf
                        <div class="service-fields mb-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Category<span class="text-danger">*</span></label>
                                        <select  id="category_name" class="form-select" name="category_name">
                                            <option value="" selected>Select Category</option>
                                            @if(!empty($categories))
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->category_name }}">{{$category->category_name}} </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Sub Category Name</label>
                                    <input class="form-control" type="text" name="subcategory_name" id="subcategory_name">
                                </div>
                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" id="add_Categories_btn" type="submit"
                                    name="form_submit" value="submit">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- add end -->

    <div id="editCategoryModal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Categories</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" id="edit_Categories_form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id" value="id">
                        <div class="service-fields mb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label>Category Name</label>
                                    <input class="form-control" type="text" name="name" id="category_name">
                                </div>
                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" id="edit_Categories_btn" type="submit"
                                    name="form_submit" value="submit">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
{{-- @section('script')

   
@endsection --}}