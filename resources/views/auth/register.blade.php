<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">


<head>

    <meta charset="utf-8"/>
    <title>Register | Dolightjob</title>
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


</head>

<body>

<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="{{route('register')}}" class="d-inline-block auth-logo">
                                <img src="{{asset('assets/dashboard/')}}/images/logo.png" alt=""
                                     style="height: 50px;background-color: whitesmoke">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p class="text-muted">Sign in to continue to Dolightjob.</p>
                            </div>

                            @include('layouts.errors')
                            @if(Session::has('email_error'))
                                <div class="alert alert-warning alert-border-left alert-dismissible fade show"
                                     role="alert">
                                    <i class="ri-alert-line me-3 align-middle fs-16"></i><strong>Warning</strong>
                                    - {{Session::get('email_error')}} <br>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            @endif

                            @if(Session::has('phone_error'))
                                <div class="alert alert-warning alert-border-left alert-dismissible fade show"
                                     role="alert">
                                    <i class="ri-alert-line me-3 align-middle fs-16"></i><strong>Warning</strong>
                                    - {{Session::get('phone_error')}} <br>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            @endif

                            @if(Session::has('email_verify_success'))
                                <div class="alert alert-primary alert-border-left alert-dismissible fade show"
                                     role="alert">
                                    <i class="ri-user-smile-line me-3 align-middle fs-16"></i><strong>Success</strong>
                                    - {{Session::get('email_verify_success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="p-2 mt-4">
                                <form action="{{route('user.custom.register')}}" method="post">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Full Name</label>
                                        <input type="text" name="name" class="form-control" id="username"
                                               placeholder="Enter full name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="username"
                                               placeholder="Enter email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Phone Number</label>
                                        <input type="text" name="phone_number" class="form-control" id="username"
                                               placeholder="Enter phone number" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" name="password" class="form-control pe-5"
                                                   placeholder="Enter password" id="password-input" required>
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                                type="button" id="password-addon"><i
                                                    class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Confirm Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" name="confirm_password" class="form-control pe-5"
                                                   placeholder="Enter Confirm password" id="password-input2" required>
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                                type="button" id="password-addon2"><i
                                                    class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Register</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Already have an account ? <a href="{{route('login')}}"
                                                                     class="fw-semibold text-primary text-decoration-underline">
                                Login </a></p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">&copy;
                            <script>document.write(new Date().getFullYear())</script>
                            Dolightjob. Developed By <i class="mdi mdi-heart text-danger"></i> by SR Tusher
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{asset('assets/dashboard/')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/node-waves/waves.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/feather-icons/feather.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="{{asset('assets/dashboard/')}}/js/plugins.js"></script>

<!-- particles js -->
<script src="{{asset('assets/dashboard/')}}/libs/particles.js/particles.js"></script>
<!-- particles app js -->
<script src="{{asset('assets/dashboard/')}}/js/pages/particles.app.js"></script>
<!-- password-addon init -->
<script src="{{asset('assets/dashboard/')}}/js/pages/password-addon.init.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 03:49:05 GMT -->
</html>
