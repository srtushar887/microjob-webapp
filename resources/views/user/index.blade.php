@extends('layouts.user')
@section('title')
    Dashboard
@endsection
@section('user')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Dashboard</h4>
                <div class="page-title-right">

                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                Total Earnings</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">559.25</span>k
                            </h4>
                            <a href="" class="text-decoration-underline">View net
                                earnings</a>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                Total Earnings</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">559.25</span>k
                            </h4>
                            <a href="" class="text-decoration-underline">View net
                                earnings</a>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                Total Earnings</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">559.25</span>k
                            </h4>
                            <a href="" class="text-decoration-underline">View net
                                earnings</a>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                Total Earnings</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">559.25</span>k
                            </h4>
                            <a href="" class="text-decoration-underline">View net
                                earnings</a>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Deals Status</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted">02 Nov 2021 to 31 Dec 2021<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Current Year</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table
                            class="table table-borderless table-hover table-nowrap align-middle mb-0">
                            <thead class="table-light">
                            <tr class="text-muted">
                                <th scope="col">Name</th>
                                <th scope="col" style="width: 20%;">Last Contacted</th>
                                <th scope="col">Sales Representative</th>
                                <th scope="col" style="width: 16%;">Status</th>
                                <th scope="col" style="width: 12%;">Deal Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Absternet LLC</td>
                                <td>Sep 20, 2021</td>
                                <td><img src="{{asset('assets/dashboard/')}}/images/users/avatar-1.jpg" alt=""
                                         class="avatar-xs rounded-circle me-2">
                                    <a href="#javascript: void(0);"
                                       class="text-body fw-medium">Donald Risher</a></td>
                                <td><span class="badge badge-soft-success p-2">Deal Won</span></td>
                                <td>
                                    <div class="text-nowrap">$100.1K</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Raitech Soft</td>
                                <td>Sep 23, 2021</td>
                                <td><img src="{{asset('assets/dashboard/')}}/images/users/avatar-2.jpg" alt=""
                                         class="avatar-xs rounded-circle me-2">
                                    <a href="#javascript: void(0);"
                                       class="text-body fw-medium">Sofia Cunha</a></td>
                                <td><span class="badge badge-soft-warning p-2">Intro Call</span>
                                </td>
                                <td>
                                    <div class="text-nowrap">$150K</div>
                                </td>
                            </tr>
                            <tr>
                                <td>William PVT</td>
                                <td>Sep 27, 2021</td>
                                <td><img src="{{asset('assets/dashboard/')}}/images/users/avatar-3.jpg" alt=""
                                         class="avatar-xs rounded-circle me-2">
                                    <a href="#javascript: void(0);" class="text-body fw-medium">Luis
                                        Rocha</a></td>
                                <td><span class="badge badge-soft-danger p-2">Stuck</span></td>
                                <td>
                                    <div class="text-nowrap">$78.18K</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Loiusee LLP</td>
                                <td>Sep 30, 2021</td>
                                <td><img src="{{asset('assets/dashboard/')}}/images/users/avatar-4.jpg" alt=""
                                         class="avatar-xs rounded-circle me-2">
                                    <a href="#javascript: void(0);"
                                       class="text-body fw-medium">Vitoria Rodrigues</a></td>
                                <td><span class="badge badge-soft-success p-2">Deal Won</span></td>
                                <td>
                                    <div class="text-nowrap">$180K</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Apple Inc.</td>
                                <td>Sep 30, 2021</td>
                                <td><img src="{{asset('assets/dashboard/')}}/images/users/avatar-6.jpg" alt=""
                                         class="avatar-xs rounded-circle me-2">
                                    <a href="#javascript: void(0);"
                                       class="text-body fw-medium">Vitoria Rodrigues</a></td>
                                <td><span class="badge badge-soft-info p-2">New Lead</span></td>
                                <td>
                                    <div class="text-nowrap">$78.9K</div>
                                </td>
                            </tr>
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end table responsive -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div>
    </div>
@endsection
