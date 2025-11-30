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

                                <li>
                                    <a href="order-tracking.html">
                                        <i class="fa fa-circle"></i>
                                        <span>Order Tracking</span>
                                    </a>
                                </li>
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
            {{-- end side bar --}}


            <div class="page-body">
                @include('includes.messages')
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create Category</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">New Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
    <div class="modal-body">
                      <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                       <div class="mb-3">
                            <label  class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>
                    <div class="mb-3">
                            <label  class="form-label">Name</label>
                            <input  type="text" name="name" class="form-control" >
                        </div>
                    <div class="mb-3">
                            <label  class="form-label">Status</label>
                            <select name="status" id="" class="form-control">
                                <option name="status" value="1">1</option>
                                <option name="status" value="0"> 0</option>
                            </select>
                    </div>

                    <div class="mb-3">
                            <label  class="form-label">Description</label>
                           <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" >Create</button>
                    </form>
    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
            {{-- end mdal --}}
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Total Products</th>
            <th>Status</th>
            <th>Created</th>
            <th>Category Cover</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->products->count() }}</td>
                <td>
                    @if($category->status)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-danger">Inactive</span>
                    @endif
                </td>
                <td>{{ $category->created_at->format('d M Y') }}</td>
                <td>  
                    @if($category->image)
                    <img src="{{ asset('storage/' . $category->image) }}" 
                            width="55" height="55" style="object-fit: cover;">
                @else
                    <span class="text-muted">No Image</span>
                @endif</td>
                 <td>
                <a href="{{ route('editcategory', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('deletecategory', $category->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button onclick="return confirm('Delete this category?')" 
                            class="btn btn-sm btn-danger">
                        Delete
                    </button>
                </form>

            </td>
            </tr>
            @empty
            <tr>
                <td colspan="13" class="text-center text-muted p-3">
                    No category found.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
<div>
    {{ $categories->links() }}
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