@extends('backend.layouts.app')
@section('title','Dashboard')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    {{-- <h3 class="page-title">Welcome {{ Auth::user()->name }}!</h3> --}}
                    <p class="text-black mt-4">Today is {{ now()->format('l, F j, Y') }}</p>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                    <span class="dash-widget-icon text-primary border-primary">
                        <i class="fe fe-money"></i>
                    </span>
                            {{-- <div class="dash-count">
                                <h3>{{$today_sales}}</h3>
                            </div> --}}
                        </div>
                        <div class="dash-widget-info">
                            <h6 class="text-muted">Today Sales Cash</h6>
                            <div class="progress progress-sm">
                                {{-- <div class="progress-bar bg-primary w-{{$today_sales}}"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                    <span class="dash-widget-icon text-success">
                        <i class="fe fe-credit-card"></i>
                    </span>
                            {{-- <div class="dash-count">
                                <h3>{{$total_categories}}</h3>
                            </div> --}}
                        </div>
                        <div class="dash-widget-info">

                            {{-- <h6 class="text-muted">Product Categories</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success w-{{$total_categories}}"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                    <span class="dash-widget-icon text-danger border-danger">
                        <i class="fe fe-folder"></i>
                    </span>
                            {{-- <div class="dash-count">
                                <h3>{{$total_expired_products}}</h3>
                            </div> --}}
                        </div>
                        <div class="dash-widget-info">

                            <h6 class="text-muted">Expired Products</h6>
                            {{-- <div class="progress progress-sm">
                                <div class="progress-bar bg-danger w-{{$total_expired_products}}"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                    <span class="dash-widget-icon text-warning border-warning">
                        <i class="fe fe-users"></i>
                    </span>
                            {{-- <div class="dash-count">
                                <h3>{{\DB::table('users')->count()}}</h3>
                            </div> --}}
                        </div>
                        <div class="dash-widget-info">

                            <h6 class="text-muted">System Users</h6>
                            <div class="progress progress-sm">
                                {{-- <div class="progress-bar bg-warning w-{{\DB::table('users')->count()}}"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="card card-table p-3">
                    <div class="card-header text-center" style="margin-bottom:5px">
                        <h4 class="">Today Sales</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="sales-table" class="datatable table table-hover table-center mb-0">
                                <thead>
                                <tr>
                                <th>Customer ID</th>
                                <th>Discount</th>
                                <th>Total Price</th>
                                <th>Paid By</th>
                                <th>Amount Paid</th>
                                <th>Due/Return</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                {{-- @foreach ($latest_sales as $sale)
                                        <tr>
                                            <td>{{$sale->customer_id}}</td>
                                            <td>{{($sale->discount)}}</td>
                                            <td>{{($sale->total_price)}}</td>
                                            <td>{{($sale->paid_by)}}</td>
                                            <td>{{($sale->amount_paid)}}</td>
                                            <td>{{($sale->due_return)}}</td>
                                        </tr>
                                @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                    
        <!-- Pie Chart -->
        <div class="card card-chart">
            <div class="card-header">
                <h4 class="card-title text-center">Resources</h4>
            </div>
            <div class="card-body">
                {{-- <div style="">
                    {!! $pieChart->render() !!}
                </div> --}}
            </div>
        </div>
        <!-- /Pie Chart -->
        
    </div>	
        </div>
    </div>
@endsection
@section('script')

<script>
    $(document).ready(function () {
        $(".sidebar-dashboard").addClass('active');
    });    
</script> 
<script src="{{asset('backend/chart.js/Chart.bundle.min.js')}}"></script>
@endsection