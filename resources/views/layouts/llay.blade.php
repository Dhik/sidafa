<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="kemendagri aplikasi penjadwalan.">
    <meta name="keywords" content="Kemendagri">
    <meta name="author" content="ANGGA IBNU SAPUTRA">
    <title>FORTECH DATA ANALYTIC</title>
    <link rel="apple-touch-icon" href="{{url('images/index.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/index.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/extensions/dragula.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/themes/semi-dark-layout.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/widgets.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/dashboard-analytics.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

    
  <link rel="stylesheet" href="{{url('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu navbar-static 2-columns   footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-static-top bg-primary navbar-brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="<?php echo url('/'); ?>">
                        <div class="brand-logo"><img class="logo" src="{{url('images/index.png')}}"></div>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu mr-auto"><a class="nav-link nav-menu-main menu-toggle" href="javascript:void(0);"><i class="bx bx-menu"></i></a></li>
                        </ul>
                    </div>
					
                    <ul class="nav navbar-nav float-right d-flex align-items-center">
                        
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                        
                       
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                                <div class="user-nav d-lg-flex d-none"><span class="user-name">{{ Auth::user()->name }}</span><span class="user-status">
                                                    <?php 
                                                    $users = \DB::table('user_roles')
                                                    ->join('users', 'users.id', '=', 'user_roles.id_user')
                                                    ->join('roles', 'user_roles.id_role', '=',  'roles.id')
                                                    ->select('roles.role_user as roles_name')
                                                    ->where('users.id','=',Auth::user()->id)
                                                    ->get();
                                                    ?>
                                                    @foreach($users as $cc){{$cc->roles_name}}@endforeach
                                </span></div><span><img class="round" src="{{url('/app-assets/images/portrait/small/user.png')}}" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="<?php echo url('/edit_users/'.Auth::user()->id); ?>"><i class="bx bx-user mr-50"></i> Edit Profile</a>
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form><i class="bx bx-power-off mr-50"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-sticky navbar-light navbar-without-dd-arrow" role="navigation" data-menu="menu-wrapper">
        
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="/home" data-toggle="dropdown"><i class="menu-livicon" data-icon="desktop"></i><span data-i18n="Dashboard">Dashboard</span></a>
                    <ul class="dropdown-menu">
                        
                    <li class="
                    @if(Request::getRequestUri() == '/')
                    active
                    @endif" data-menu=""><a class="dropdown-item align-items-center" href="<?php echo url('/home'); ?>" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i><span data-i18n="Dashboard">Dashboard</span></a>
                    </li>
                        
                    </ul>
                </li>
                                      
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="menu-livicon" data-icon="users"></i><span data-i18n="Users">Users</span></a>
                    <ul class="dropdown-menu">
                    <li class="
                    @if(Request::getRequestUri() == '/users')
                    active
                    @endif
                    @if(Request::getRequestUri() == '/register')
                    active
                    @endif
                    @if(Request::getRequestUri() == '/users')
                    active
                    @endif
                    @if(Request::getRequestUri() == '/trainer')
                    active
                    @endif
                    @if(Request::getRequestUri() == '/peserta')
                    active
                    @endif
                    @if(Request::getRequestUri() == '/roles/add')
                    active
                    @endif
                    @if (Request::getRequestUri() == '/edit_users/'.preg_replace('/[^0-9]/', '', \Request::getRequestUri()))
                    active
                    @endif
                    @if (Request::getRequestUri() == '/edit_trainer/'.preg_replace('/[^0-9]/', '', \Request::getRequestUri()))
                    active
                    @endif
                    @if (Request::getRequestUri() == '/edit_peserta/'.preg_replace('/[^0-9]/', '', \Request::getRequestUri()))
                    active
                    @endif
                    @if (Request::getRequestUri() == '/roles/edit/'.preg_replace('/[^0-9]/', '', \Request::getRequestUri()))
                    active
                    @endif
                    " data-menu=""><a class="dropdown-item align-items-center" href="<?php echo url('/users'); ?>" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i><span data-i18n="Apex">Users Management</span></a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="menu-livicon" data-icon="box"></i><span data-i18n="calendar">Master</span></a>
                    <ul class="dropdown-menu">
                    <li class="
                    @if(Request::getRequestUri() == '/menu')
                    active
                    @endif
                    " data-menu=""><a class="dropdown-item align-items-center" href="<?php echo url('/menu'); ?>" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i><span data-i18n="Apex">Master Menu</span></a>
                        </li>

                        <li class="
                    @if(Request::getRequestUri() == '/embed')
                    active
                    @endif
                    " data-menu=""><a class="dropdown-item align-items-center" href="<?php echo url('/embed'); ?>" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i><span data-i18n="Apex">Master Embeded</span></a>
                        </li>
                    </ul>
                </li>
                
                                
            </ul>
        </div>
        <!-- /horizontal menu content-->
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">

  @yield('content')
    
  </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2023 &copy; FORTECH.CO.ID</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="#" target="_blank">FORTECH IT TEAMS</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{url('/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{url('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{url('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{url('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{url('/app-assets/vendors/js/ui/jquery.sticky.j')}}s"></script>
    <script src="{{url('/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{url('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{url('/app-assets/js/scripts/configs/horizontal-menu.js')}}"></script>
    <script src="{{url('/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{url('/app-assets/js/core/app.js')}}"></script>
    <script src="{{url('/app-assets/js/scripts/components.js')}}"></script>
    <script src="{{url('/app-assets/js/scripts/footer.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{url('/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
    <!-- END: Page JS-->

    
    <script src="{{url('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{url('/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{url('/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{url('/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{url('/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <script>
                                $(function () {
                                    $("#next").DataTable({
                                    "responsive": true, "lengthChange": false, "autoWidth": false,
                                    }).buttons().container().appendTo('#next_wrapper .col-md-6:eq(0)');
                                });
                                $(function () {
                                    $("#next2").DataTable({
                                    "responsive": true, "lengthChange": false, "autoWidth": false,
                                    }).buttons().container().appendTo('#next_wrapper .col-md-6:eq(0)');
                                });
                                $(function () {
                                    $("#next3").DataTable({
                                    "responsive": true, "lengthChange": false, "autoWidth": false,
                                    }).buttons().container().appendTo('#next_wrapper .col-md-6:eq(0)');
                                });
                                $(function () {
                                    $("#next4").DataTable({
                                    "responsive": true, "lengthChange": false, "autoWidth": false,
                                    }).buttons().container().appendTo('#next_wrapper .col-md-6:eq(0)');
                                });
                                $(function () {
                                    $("#next5").DataTable({
                                    "responsive": true, "lengthChange": false, "autoWidth": false,
                                    }).buttons().container().appendTo('#next_wrapper .col-md-6:eq(0)');
                                });
                                </script>
</body>
<!-- END: Body-->

</html>