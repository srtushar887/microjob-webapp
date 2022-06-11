<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>
    <meta charset="utf-8"/>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/dashboard/')}}/images/faviconnew.png">


    <link href="{{asset('assets/dashboard/')}}/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet"
          type="text/css"/>

    <!--Swiper slider css-->
    <link href="{{asset('assets/dashboard/')}}/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css"/>

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
                                    <img src="{{asset('assets/dashboard/')}}/images/logo.png" alt="" height="17">
                                </span>
                        </a>
                        <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/dashboard/')}}/images/logo-sm.png" alt="" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="{{asset('assets/dashboard/')}}/images/logo.png" alt="" height="17">
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

                    <div class="dropdown topbar-head-dropdown ms-1 header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <i class='bx bx-bell fs-22'></i>
                            <span
                                class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span
                                    class="visually-hidden">unread messages</span></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                             aria-labelledby="page-header-notifications-dropdown">
                            <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                        </div>
                                        <div class="col-auto dropdown-tabs">
                                            <span class="badge badge-soft-light fs-13"> 4 New</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-2 pt-2">
                                    <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true"
                                        id="notificationItemsTab" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab"
                                               role="tab" aria-selected="true">
                                                All (4)
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab"
                                               aria-selected="false">
                                                Messages
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab"
                                               aria-selected="false">
                                                Alerts
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="notificationItemsTabContent">
                                <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                                        <div
                                            class="text-reset notification-item d-block dropdown-item position-relative">
                                            <div class="d-flex">
                                                <div class="avatar-xs me-3">
                                                        <span
                                                            class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                                            <i class="bx bx-badge-check"></i>
                                                        </span>
                                                </div>
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author
                                                            Graphic
                                                            Optimization <span class="text-secondary">reward</span>
                                                            is
                                                            ready!
                                                        </h6>
                                                    </a>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec
                                                                ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="all-notification-check01">
                                                        <label class="form-check-label"
                                                               for="all-notification-check01"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="text-reset notification-item d-block dropdown-item position-relative active">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/dashboard/')}}/images/users/avatar-2.jpg"
                                                     class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                    </a>
                                                    <div class="fs-13 text-muted">
                                                        <p class="mb-1">Answered to your comment on the cash flow
                                                            forecast's
                                                            graph 🔔.</p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 48 min
                                                                ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="all-notification-check02" checked>
                                                        <label class="form-check-label"
                                                               for="all-notification-check02"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="text-reset notification-item d-block dropdown-item position-relative">
                                            <div class="d-flex">
                                                <div class="avatar-xs me-3">
                                                        <span
                                                            class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                                                            <i class='bx bx-message-square-dots'></i>
                                                        </span>
                                                </div>
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b
                                                                class="text-success">20</b> new messages in the
                                                            conversation
                                                        </h6>
                                                    </a>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="all-notification-check03">
                                                        <label class="form-check-label"
                                                               for="all-notification-check03"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="text-reset notification-item d-block dropdown-item position-relative">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/dashboard/')}}/images/users/avatar-8.jpg"
                                                     class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                    </a>
                                                    <div class="fs-13 text-muted">
                                                        <p class="mb-1">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="all-notification-check04">
                                                        <label class="form-check-label"
                                                               for="all-notification-check04"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-3 text-center">
                                            <button type="button"
                                                    class="btn btn-soft-success waves-effect waves-light">View
                                                All Notifications <i
                                                    class="ri-arrow-right-line align-middle"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                     aria-labelledby="messages-tab">
                                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                                        <div class="text-reset notification-item d-block dropdown-item">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/dashboard/')}}/images/users/avatar-3.jpg"
                                                     class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                    </a>
                                                    <div class="fs-13 text-muted">
                                                        <p class="mb-1">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 30 min
                                                                ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="messages-notification-check01">
                                                        <label class="form-check-label"
                                                               for="messages-notification-check01"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-reset notification-item d-block dropdown-item">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/dashboard/')}}/images/users/avatar-2.jpg"
                                                     class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                    </a>
                                                    <div class="fs-13 text-muted">
                                                        <p class="mb-1">Answered to your comment on the cash flow
                                                            forecast's
                                                            graph 🔔.</p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="messages-notification-check02">
                                                        <label class="form-check-label"
                                                               for="messages-notification-check02"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-reset notification-item d-block dropdown-item">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/dashboard/')}}/images/users/avatar-6.jpg"
                                                     class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                                    </a>
                                                    <div class="fs-13 text-muted">
                                                        <p class="mb-1">Mentionned you in his comment on 📃 invoice
                                                            #12501.
                                                        </p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 10 hrs
                                                                ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="messages-notification-check03">
                                                        <label class="form-check-label"
                                                               for="messages-notification-check03"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-reset notification-item d-block dropdown-item">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/dashboard/')}}/images/users/avatar-8.jpg"
                                                     class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                    </a>
                                                    <div class="fs-13 text-muted">
                                                        <p class="mb-1">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 3 days
                                                                ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="messages-notification-check04">
                                                        <label class="form-check-label"
                                                               for="messages-notification-check04"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-3 text-center">
                                            <button type="button"
                                                    class="btn btn-soft-success waves-effect waves-light">View
                                                All Messages <i
                                                    class="ri-arrow-right-line align-middle"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel"
                                     aria-labelledby="alerts-tab">
                                    <div class="w-25 w-sm-50 pt-3 mx-auto">
                                        <img src="{{asset('assets/dashboard/')}}/images/svg/bell.svg" class="img-fluid"
                                             alt="user-pic">
                                    </div>
                                    <div class="text-center pb-5 mt-2">
                                        <h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                         src="{{asset('assets/dashboard/')}}/images/users/avatar-1.jpg"
                                         alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{Auth::user()->name}}</span>
                                        <span
                                            class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Admin</span>
                                    </span>
                                </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Welcome Anna!</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages-profile.html"><i
                                    class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Balance : <b>$5971.67</b></span></a>
                            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                                    class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Profile</span></a>
                            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                                    class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Change Password</span></a>
                            <a class="dropdown-item" href="{{route('admin.logout')}}"><i
                                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle" data-key="t-logout">Logout</span></a>
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
                        <img src="{{asset('assets/dashboard/')}}/images/logo.png" alt="" height="17">
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
                        <a class="nav-link menu-link {{ Request::path() == 'admin' ? 'active' : '' }}"
                           href="{{route('admin.dashboard')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link {{ Request::path() == 'admin/general-settings' ? 'active' : '' }}"
                           href="{{route('admin.general.settings')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">General Setting</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link {{ Request::path() == 'admin/region-country' ? 'active' : '' }}"
                           href="{{route('admin.region.country')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Region & Country</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link menu-link {{ Request::path() == 'admin/main-category' ? 'active' : '' }}"
                           href="#sidebarDashboards" data-bs-toggle="collapse"
                           role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Job Category</span>
                        </a>
                        <div class="collapse menu-dropdown " id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{route('admin.job.main.category')}}" class="nav-link"
                                       data-key="t-crm">
                                        Main Category </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.job.sub.category')}}" class="nav-link"
                                       data-key="t-ecommerce"> Sub Category </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <?php
                        $count_job = \App\Models\all_job::where('job_status', 1)->count();
                        ?>
                        <a class="nav-link menu-link" href="#jonmanagement" data-bs-toggle="collapse"
                           role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Job Management</span>
                            <span class="badge badge-pill bg-danger" data-key="t-new">{{$count_job}}</span>
                        </a>
                        <div class="collapse menu-dropdown" id="jonmanagement">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{route('admin.all.jobs')}}" class="nav-link" data-key="t-crm"> All
                                        Jobs </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.pending.jobs')}}" class="nav-link" data-key="t-ecommerce">
                                        Pending Jobs </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.approved.jobs')}}" class="nav-link" data-key="t-ecommerce">
                                        Approved Jobs </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.rejected.jobs')}}" class="nav-link" data-key="t-ecommerce">
                                        Rejected Jobs </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin.payment.gateway')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Payment Gateway</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <?php
                        $count_dep = \App\Models\user_deposit::where('status', 0)->count();
                        ?>
                        <a class="nav-link menu-link" href="#deposit" data-bs-toggle="collapse"
                           role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">User Deposit</span>
                            <span class="badge badge-pill bg-danger" data-key="t-new">{{$count_dep}}</span>
                        </a>
                        <div class="collapse menu-dropdown" id="deposit">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{route('admin.all.deposit')}}" class="nav-link" data-key="t-crm"> All
                                        Deposit </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.pending.deposit')}}" class="nav-link"
                                       data-key="t-ecommerce"> Pending Deposit </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.approved.deposit')}}" class="nav-link"
                                       data-key="t-ecommerce"> Approved Deposit </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.rejected.deposit')}}" class="nav-link"
                                       data-key="t-ecommerce"> Rejected Deposit </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <?php
                        $count_with = \App\Models\withdraw::where('status', 0)->count();
                        ?>
                        <a class="nav-link menu-link" href="#userwithdraw" data-bs-toggle="collapse"
                           role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">User Withdraw</span>
                            <span class="badge badge-pill bg-danger" data-key="t-new">{{$count_with}}</span>
                        </a>

                        <div class="collapse menu-dropdown" id="userwithdraw">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{route('admin.all.withdraw')}}" class="nav-link" data-key="t-crm"> All
                                        Withdraw </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.pending.withdraw')}}" class="nav-link"
                                       data-key="t-ecommerce"> Pending Withdraw </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.approved.withdraw')}}" class="nav-link"
                                       data-key="t-ecommerce"> Approved Withdraw </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.rejected.withdraw')}}" class="nav-link"
                                       data-key="t-ecommerce"> Rejected Withdraw </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#allusers" data-bs-toggle="collapse"
                           role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Users</span>
                        </a>

                        <div class="collapse menu-dropdown" id="allusers">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{route('admin.all.users')}}" class="nav-link" data-key="t-crm"> All
                                        Users </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.active.users')}}" class="nav-link"
                                       data-key="t-ecommerce"> Active Users </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.inactive.users')}}" class="nav-link"
                                       data-key="t-ecommerce"> In-Active Users </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.blocked.users')}}" class="nav-link"
                                       data-key="t-ecommerce"> Blocked Users </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin.all.subadmin')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Sub Admin</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin.job.report')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Job Report</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin.user.report')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">User Report</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin.user.ip')}}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">User IP</span>
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
                @yield('admin')
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
<!-- JAVASCRIPT -->
<script src="{{asset('assets/dashboard/')}}/js/jquery-1.12.4.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/node-waves/waves.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/feather-icons/feather.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="{{asset('assets/dashboard/')}}/js/plugins.js"></script>
{{--<script src="{{asset('assets/dashboard/')}}/libs/choices.js/public/assets/scripts/choices.min.js"></script>--}}
<script src="{{asset('assets/dashboard/')}}/libs/flatpickr/flatpickr.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/prismjs/prism.js"></script>

<!--Swiper slider js-->
<script src="{{asset('assets/dashboard/')}}/libs/swiper/swiper-bundle.min.js"></script>
<!-- Dashboard init -->

<script src="{{asset('assets/dashboard/')}}/js/app.js"></script>
<!-- Required datatable js -->
<script src="{{asset('assets/dashboard/')}}/table/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/table/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script
    src="{{asset('assets/dashboard/')}}/table/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script
    src="{{asset('assets/dashboard/')}}/table/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script>
    jQuery(window).on('load', function () {
        jQuery("#preloader").delay(250).fadeOut(250);
    });
</script>

{{--<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>--}}
@yield('js')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('layouts.message')

</body>

</html>
