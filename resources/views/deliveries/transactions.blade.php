<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Custom fonts for this template-->
    <link href="{{ asset('import/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('import/assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('import/assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('admin')}}">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-tint"></i>
                </div>
                <div class="sidebar-brand-text mx-3">D'JARRS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 mb-5">
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin')}}">
                    <i class="fas fa-fw fa-water"></i>
                    <span>Pending Request</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('delivering')}}">
                    <i class="fas fa-fw fa-truck"></i>
                    <span>Delivering</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('transact')}}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Transaction</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('messages')}}">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Messages</span></a>
            </li>
            <hr class="sidebar-divider my-0">

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto me-5">

                        <div class="topbar-divider d-none d-sm-block"></div>


                        <div class="dropdown">
                            <a id="navbarDropdown" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{ asset('import/assets/img/undraw_profile.svg') }}" alt="" width="32" height="32" class="rounded-circle me-2">
                                @auth 
                                    <strong>{{ auth()->user()->name }}</strong>
                                @else
                                    <script>window.location = "{{ route('login') }}";</script>
                                @endauth
                            
                            </a>
                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a></li>
                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Delivery</h2>
                            </div>
                        </div>
                    </div>
                
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Orders Delivered</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" role="grid"
                                    aria-describedby="dataTable_info">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            

                                            <th>Quantity</th>
                                            <th>Delivery Date</th>
                                            
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deliveries as $delivery)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $delivery->name }}</td>
                                            <td>{{ $delivery->email }}</td>
                                            <td>{{ $delivery->phone_number }}</td>
                                            <td style="display: none;">{{ $delivery->address }}</td>
                                            <td style="display: none;">{{ $delivery->address_detail }}</td>
                                            <td>{{ $delivery->quantity }}</td>
                                            <td>{{ $delivery->del_date }}</td>
                                            <td style="display: none;">{{ $delivery->message }}</td>
                                            <td>{{ $delivery->total }}</td>
                                            <td>{{ $delivery->status }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                
                            {!! $deliveries->links() !!}
                        </div>
                    </div>
                </div>
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span> &copy; Copyright <strong><span>D'JARRS</span></strong> 2023. All Rights Reserved</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('import/assets/vendor/jquery/jquery.min.js') }}"></script>


    <!-- Core plugin JavaScript-->
    <script src="{{ asset('import/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('import/assets/js/sb-admin-2.min.js') }}"></script>


    
    <script>
        $(document).ready(function() {
            // Auto close the success alert after 5 seconds (5000 milliseconds)
            setTimeout(function() {
                $("#success-alert").alert('close');
            }, 3000);
        });
    </script>

</body>

</html>
</html>

