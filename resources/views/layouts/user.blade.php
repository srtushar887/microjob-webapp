<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>
    <meta charset="utf-8"/>
    <title>User | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/dashboard/')}}/images/faviconnew.png">


    <!-- Layout config Js -->
    <script src="{{asset('assets/dashboard/')}}/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/dashboard/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('assets/dashboard/')}}/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{asset('assets/dashboard/')}}/css/app.min.css" rel="stylesheet" type="text/css"/>
    <!-- custom Css-->
    <link href="{{asset('assets/dashboard/')}}/css/custom.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/dashboard/')}}/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- DataTables -->
    <link href="{{asset('assets/dashboard/')}}/table/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
          rel="stylesheet" type="text/css"/>

    <!-- Responsive datatable examples -->
    <link
        href="{{asset('assets/dashboard/')}}/table/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css"/>

    <link
        href="{{asset('assets/dashboard/')}}/css/loading.css"
        rel="stylesheet" type="text/css"/>


    @yield('css')
</head>

<body>
<!-- Begin page -->
<div id="layout-wrapper">
    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">

                    <div class="navbar-brand-box horizontal-logo">
                        <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/dashboard/')}}/images/logo-sm.png" alt="" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="{{asset('assets/dashboard/')}}/images/logo-dark.png" alt="" height="17">
                                </span>
                        </a>
                        <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/dashboard/')}}/images/logo-sm.png" alt="" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="{{asset('assets/dashboard/')}}/images/logo-light.png" alt="" height="17">
                                </span>
                        </a>
                    </div>


                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    </button>

                    <form class="app-search d-none d-md-block">
                        <div class="position-relative">
                            <input type="hidden" class="form-control" placeholder="Search..." autocomplete="off"
                                   id="search-options" value="">

                            <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                  id="search-close-options"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                            <div data-simplebar style="max-height: 320px;">
                                <!-- item-->
                                <div class="dropdown-header">
                                    <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                </div>

                                <div class="dropdown-item bg-transparent text-wrap">
                                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup
                                        <i
                                            class="mdi mdi-magnify ms-1"></i></a>
                                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i
                                            class="mdi mdi-magnify ms-1"></i></a>
                                </div>
                                <!-- item-->
                                <div class="dropdown-header mt-2">
                                    <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                    <span>Analytics Dashboard</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                    <span>Help Center</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                    <span>My account settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header mt-2">
                                    <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                </div>


                                <div class="notification-list">
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="{{asset('assets/dashboard/')}}/images/users/avatar-2.jpg"
                                                 class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">Angela Bernier</h6>
                                                <span class="fs-11 mb-0 text-muted">Manager</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="{{asset('assets/dashboard/')}}/images/users/avatar-3.jpg"
                                                 class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">David Grasso</h6>
                                                <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="{{asset('assets/dashboard/')}}/images/users/avatar-5.jpg"
                                                 class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">Mike Bunch</h6>
                                                <span class="fs-11 mb-0 text-muted">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="text-center pt-3 pb-1">
                                <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i
                                        class="ri-arrow-right-line ms-1"></i></a>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="d-flex align-items-center">

                    <div class="ms-1 header-item">
                        <i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>{{$gnl->site_currency}} {{number_format(Auth::user()->balance,2)}}</b></span>
                    </div>

                    <div class="ms-1 header-item">
                        <i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Earning Balance : <b>{{$gnl->site_currency}} {{number_format(Auth::user()->earning_bal,2)}}</b></span>
                    </div>


                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                         src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiMcc9W6s78W6i8ZTNMtPrBDg5hvws2htOXfOxTaEPkgLumwbtLQVVIHZtZmSU92XoLXA&usqp=CAU"
                                         alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{Auth::user()->name}}</span>
                                        <span
                                            class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">{{Auth::user()->email}}</span>
                                    </span>
                                </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->

                            <a class="dropdown-item" href="{{route('user.profile')}}"><i
                                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Profile</span></a>

                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Balance : <b>{{$gnl->site_currency}} {{number_format(Auth::user()->balance,2)}}</b></span></a>

                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Earning Balance : <b>{{$gnl->site_currency}} {{number_format(Auth::user()->earning_bal,2)}}</b></span></a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle" data-key="t-logout">Logout</span></a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/dashboard/')}}/images/logo-sm.png" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="{{asset('assets/dashboard/')}}/images/logo-dark.png" alt="" height="17">
                    </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/dashboard/')}}/images/logo-sm.png" alt="" height="22">
                    </span>
                <span class="logo-lg">
                          <img src="{{asset('assets/dashboard/')}}/images/logo.png" alt=""
                               style="height: 46px;background-color: whitesmoke">
                    </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>
        <div id="scrollbar">
            <div class="container-fluid">
                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('home')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('user.find.job')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Find Job</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('user.post.job')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Post Job</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('user.my.jobs')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">My Jobs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('user.my.tasks')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">My Task</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('user.deposit')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Deposit</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('user.withdraw')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Withdraw</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('user.all.transaction')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">All Transaction</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('user.transfer.balance')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Transfer</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <?php
                        $count_dep = \App\Models\user_notification::where('user_id', Auth::user()->id)->where('is_view', 1)->count();
                        ?>
                        <a class="nav-link menu-link" href="{{route('user.all.notification')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Notifications</span>
                            <span class="badge badge-pill bg-danger" data-key="t-new">{{$count_dep}}</span>
                        </a>
                    </li>


                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('user')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<script src="{{asset('assets/dashboard/')}}/js/jquery-1.12.4.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/node-waves/waves.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/feather-icons/feather.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/js/pages/plugins/lord-icon-2.1.0.js"></script>


<!-- Required datatable js -->
<script src="{{asset('assets/dashboard/')}}/table/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/table/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script
    src="{{asset('assets/dashboard/')}}/table/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script
    src="{{asset('assets/dashboard/')}}/table/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>


<script src="{{asset('assets/dashboard/')}}/js/pages/form-wizard.init.js"></script>
<script src="{{asset('assets/dashboard/')}}/form-widget.js"></script>

<script src="{{asset('assets/dashboard/')}}/js/app.js"></script>

{{--<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>--}}


{{--<script src="{{asset('assets/dashboard/')}}/libs/rater-js/index.js"></script>--}}
<!-- rating init -->
{{--<script src="{{asset('assets/dashboard/')}}/js/pages/rating.init.js"></script>--}}

<script>
    jQuery(window).on('load', function () {
        jQuery("#preloader").delay(250).fadeOut(250);
    });
    $("#satisfied").click(function () {
        console.log($(this).prop('checked'));
        if ($(this).prop('checked')) {
            $(this).closest('button').addClass("btn-info");
            $('#unsatisfied').closest('button').removeClass("btn-info");
        } else {
            $(this).closest('button').removeClass("btn-info");
        }
    });
    $("#unsatisfied").click(function () {
        console.log($(this).prop('checked'));
        if ($(this).prop('checked')) {
            $(this).closest('button').addClass("btn-info");
            $('#satisfied').closest('button').removeClass("btn-info");
        } else {
            $(this).closest('button').removeClass("btn-info");
        }
    });
</script>

@yield('js')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('layouts.message')

</body>

</html>
