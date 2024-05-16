<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="menu-title">
                    <span>Main</span>
                </li>

                {{-- <li class="submenu">
                    <a href="#" class="noti-dot"><i class="la la-home"></i> <span> Dashboard </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('admin/dashboard')}}">Dashboard</a></li>
                    </ul>
                </li> --}}

                <li> 
                    <a  class="sidebar-dashboard"><i class="la la-home"></i> <span>Dashboard</span></a>
                </li>

                {{-- @if (Auth::user()->role == 'admin') --}}
                    <li> 
                        <a href="{{route('pages.category')}}" class="sidebar-categories"><i class="la la-layer-group"></i> <span>Categories</span></a>
                    </li>
                    <li> 
                        <a href="{{route('pages.subcategory')}}" class="sidebar-categories"><i class="la la-layer-group"></i> <span>Sub Categories</span></a>
                    </li>

                <li> 
                    <a href="{{route('pages.product')}}" class="sidebar-supplier"><i class="la la-people-carry"></i> <span>Add Product</span></a>
                </li>

                <li class="submenu">
                    <a href="#" class="sidebar-purchase"><i class="la la-star-o"></i> <span> Purchase </span> <span
                            class="menu-arrow"></span></a>
                    {{-- <ul style="display: none;">
                        <li><a class="sidebar-purchase_index" href="{{ route('purchase.index')}}">Purchase Details</a></li>
                        <li><a class="sidebar-purchase_outstock" href="{{ route('purchase.outstock')}}">Out-Stock</a></li>
                    </ul> --}}
                </li>

                <li class="submenu">
                    <a href="#" class="sidebar-product"><i class="la la-box"></i> <span> Product </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        {{-- <li><a class="sidebar-product_index" href="{{ route('product.index')}}">All Product</a></li>
                        <li><a class="sidebar-product_outstock" href="{{ route('product.outstock')}}">Out-Stock</a></li>
                        <li><a class="sidebar-expired" href="{{ route('expired')}}">Expired</a></li> --}}
                    </ul>
                </li>


                <li class="submenu">
                    <a href="#" class="sidebar-sales"><i class="la la-chart-bar"></i> <span> Sales </span> <span
                            class="menu-arrow"></span></a>
                    {{-- <ul style="display: none;">
                        <li><a class="sidebar-sales_index" href="{{ route('sales.index')}}">Add Sales</a></li>
                        <li><a class="sidebar-sales_details" href="{{ route('sales.details')}}">Sales Details</a></li>
                    </ul> --}}
                </li>

                <li class="submenu">
                    <a href="#" class="sidebar-accounts"><i class="la la-user-alt"></i> <span> Accounts  </span> <span
                            class="menu-arrow"></span></a>
                    {{-- <ul style="display: none;">
                        <li><a class="sidebar-accounts_index" href="{{ route('accounts.index')}}">Accounts Statement</a></li>
                        <li><a class="sidebar-billinghistory" href="{{ route('billinghistory.index')}}">Billing History</a></li>
                        <li><a class="sidebar-othertransaction" href="{{ route('othertransaction.index')}}">Other Transaction</a></li>
                        <li><a class="sidebar-transactionhistory" href="{{ route('transactionhistory.index')}}">Transaction History</a></li>
                    </ul> --}}
                </li>
                {{-- <li> 
                    <a href="{{route('customer.index')}}" class="sidebar-customer"><i class="la la-user-tag"></i> <span>Customer</span></a>
                </li>
                <li> 
                    <a href="{{route('inventory.index')}}" class="sidebar-inventory"><i class="la la-city"></i> <span>Inventory</span></a>
                </li> --}}

                
                {{-- <li> 
                    <a href="{{route('damage.index')}}" class="sidebar-damage"><i class="la la-box"></i> <span>Damage Product</span></a>
                </li> --}}

                <li class="submenu">
                    <a href="#" class="sidebar-reports"><i class="la la-file-alt"></i> <span> Report  </span> <span
                            class="menu-arrow"></span></a>
                    {{-- <ul style="display: none;">
                        <li><a class="sidebar-sales_reports" href="{{ route('sales.reports')}}">Sale Report</a></li>
                        <li><a class="sidebar-purchase_reports" href="{{ route('purchase.reports')}}">Purchase Report</a></li>
                        <li><a class="sidebar-damage_reports" href="{{ route('damage.reports')}}">Damage Report</a></li>
                    </ul> --}}
                </li>
                {{-- <li> 
                    <a href="{{route('users.index')}}" class="sidebar-users"><i class="la la-users"></i> <span>All Users</span></a>
                </li> --}}

                {{-- @endif --}}
                {{-- <li> 
                    <a href="{{route('users.profile')}}" class="sidebar-users_profile"><i class="la la-user-circle"></i> <span>Profile</span></a>
                </li> --}}

            </ul>
        </div>
    </div>
</div>
