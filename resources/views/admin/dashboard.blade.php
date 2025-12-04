<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 Kafinix Ventures Ltd with unlimited possibilities.">
    <meta name="keywords"
        content="Kafinix Ventures Ltd, Kafinix Ventures Ltd, Kafinix Ventures Ltd, flat Kafinix Ventures Ltd, responsive Kafinix Ventures Ltd, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/log.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/log.png')}}" type="image/x-icon">
    <title>Kafinix Ventures Ltd. - Administrator</title>

    <!-- Google font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&amp;display=swap">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">


    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/font-awesome.css')}}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/flag-icon.css')}}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/icofont.css')}}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/prism.css')}}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/chartist.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/bootstrap.css')}}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

       

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper">
                        <a href="{{route('dashboard')}}">
                            <img class="d-none d-lg-block blur-up lazyloaded"
                                src="{{asset('assets/images/log.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                            aria-hidden="true"></i></a>
                    <ul class="sidebar-menu">
                        <li>
                            <a class="sidebar-header" href="{{route('dashboard')}}">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="#javascript:void(0)">
                                <i data-feather="box"></i>
                                <span>Products</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-circle"></i>
                                        <span>Physical</span>
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>

                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('products')}}">
                                                <i class="fa fa-circle"></i>Products
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('category')}}">
                                                <i class="fa fa-circle"></i>Category
                                            </a>
                                        </li>

                             
                                    </ul>
                                </li>
                            </ul>
                        </li> 

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="archive"></i>
                                <span>Orders</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{route('orders')}}">
                                        <i class="fa fa-circle"></i>
                                        <span>Order List</span>
                                    </a>
                                </li>

                                {{-- <li>
                                    <a href="order-tracking.html">
                                        <i class="fa fa-circle"></i>
                                        <span>Order Tracking</span>
                                    </a>
                                </li> --}}
                            </ul>
                        </li>
                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="user-plus"></i>
                                <span>Customers</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{route('customers')}}">
                                        <i class="fa fa-circle"></i>User List
                                    </a>
                                </li>
        
                            </ul>
                        </li>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <!-- Right sidebar Start-->
            <div class="right-sidebar" id="right_side_bar">
            
            </div>
            <!-- Right sidebar Ends-->

            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Dashboard
                                        <small>Kafinix Ventures Ltd</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('shop')}}">
                                                        Home
                                            <i data-feather="home">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden">
                                <div class="warning-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center">
                                                <i data-feather="navigation" class="font-warning"></i>
                                            </div>
                                        </div>
                                        <div class="media-body media-doller">
                                            <span class="m-0">Products</span>
                                            <h3 class="mb-0">£ <span class="counter">6659</span><small> This
                                                    Month</small>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden">
                                <div class="secondary-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center">
                                                <i data-feather="box" class="font-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="media-body media-doller">
                                            <span class="m-0">All products in stock</span>
                                            <h3 class="mb-0">£ <span class="counter">9856</span><small> 
                                                All products</small>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden">
                                <div class="primary-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center"><i data-feather="message-square"
                                                    class="font-primary"></i></div>
                                        </div>
                                        <div class="media-body media-doller"><span class="m-0">Orders</span>
                                            <h3 class="mb-0">£ <span class="counter">893</span><small> This
                                                    Month</small></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden">
                                <div class="danger-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center"><i data-feather="users"
                                                    class="font-danger"></i></div>
                                        </div>
                                        <div class="media-body media-doller"><span class="m-0">All Orders</span>
                                            <h3 class="mb-0">£ <span class="counter">5631</span><small> Combined</small></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden">
                                <div class="danger-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center"><i data-feather="users"
                                                    class="font-danger"></i></div>
                                        </div>
                                        <div class="media-body media-doller"><span class="m-0">All Customers</span>
                                            <h3 class="mb-0">£ <span class="counter">5631</span><small> Combined</small></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                <!-- Container-fluid Ends-->
            </div>

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright text-start">
                            <p class="mb-0">Copyright 2025 © Kafinix Ventures Ltd All rights reserved.</p>
                        </div>
                        <div class="col-md-6 pull-right text-end">
                            {{-- <p class=" mb-0">Hand crafted & made with<i class="ri-heart-line"></i></p> --}}
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>

    <div class="bottom-space"></div>

    <!-- latest jquery-->
    <script src="{{asset('admin/assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- feather icon js-->
    <script src="{{asset('admin/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/icons/feather-icon/feather-icon.js')}}"></script>

    <!-- Sidebar jquery-->
    <script src="{{asset('admin/assets/js/sidebar-menu.js')}}"></script>

    <!--chartist js-->
    <script src="{{asset('admin/assets/js/chart/chartist/chartist.js')}}"></script>

    <!--chartjs js-->
    <script src="{{asset('admin/assets/js/chart/chartjs/chart.min.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{asset('admin/assets/js/lazysizes.min.js')}}"></script>

    <!--copycode js-->
    <script src="{{asset('admin/assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom-card/custom-card.js')}}"></script>

    <!--counter js-->
    <script src="{{asset('admin/assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/counter/counter-custom.js')}}"></script>

    <!--peity chart js-->
    <script src="{{asset('admin/assets/js/chart/peity-chart/peity.jquery.js')}}"></script>

    <!-- Apex Chart Js -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!--sparkline chart js-->
    <script src="{{asset('admin/assets/js/chart/sparkline/sparkline.js')}}"></script>

    <!--Customizer admin-->
    {{-- <script src="{{asset('admin/assets/js/admin-customizer.js')}}"></script> --}}

    <!--dashboard custom js-->
    <script src="{{asset('admin/assets/js/dashboard/default.js')}}"></script>

    <!--right sidebar js-->
    <script src="{{asset('admin/assets/js/chat-menu.js')}}"></script>

    <!--height equal js-->
    <script src="{{asset('admin/assets/js/height-equal.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{asset('admin/assets/js/lazysizes.min.js')}}"></script>

    <!--script admin-->
    <script src="{{asset('admin/assets/js/admin-script.js')}}"></script>
</body>

</html>