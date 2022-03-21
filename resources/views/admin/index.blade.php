@extends('layouts.admin')
@section('admin')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">CRM</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">CRM</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card crm-widget">
                <div class="card-body p-0">
                    <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                        <div class="col">
                            <div class="py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Campaign Sent <i
                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-space-ship-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0"><span class="counter-value"
                                                               data-target="197">0</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col">
                            <div class="mt-3 mt-md-0 py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Annual Profit <i
                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-exchange-dollar-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0">$<span class="counter-value"
                                                                data-target="489.4">0</span>k</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col">
                            <div class="mt-3 mt-md-0 py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Lead Coversation <i
                                        class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-pulse-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0"><span class="counter-value"
                                                               data-target="32.89">0</span>%</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col">
                            <div class="mt-3 mt-lg-0 py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Daily Average Income <i
                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-trophy-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0">$<span class="counter-value"
                                                                data-target="1596.5">0</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col">
                            <div class="mt-3 mt-lg-0 py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Annual Deals <i
                                        class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-service-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0"><span class="counter-value"
                                                               data-target="2659">0</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
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
