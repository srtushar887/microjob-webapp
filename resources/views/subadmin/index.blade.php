@extends('layouts.subadmins')
@section('title')
    Dashboard
@endsection
@section('subadmin')
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
        <div class="col-xl-12">
            <div class="card crm-widget">
                <div class="card-body p-0">
                    <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                        <div class="col">
                            <div class="py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Total Users <i
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
                            <div class="py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Active Users <i
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
                            <div class="py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Blocked Users <i
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
                                <h5 class="text-muted text-uppercase fs-13">Total Deposit <i
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
                                <h5 class="text-muted text-uppercase fs-13">Total Withdraw <i
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
                        </div>

                    </div><!-- end row -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">New Users</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table
                            class="table table-borderless table-hover table-nowrap align-middle mb-0">
                            <thead class="table-light">
                            <tr class="text-muted">
                                <th scope="col">Name</th>
                                <th scope="col" style="width: 20%;">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col" style="width: 16%;">Status</th>
                                <th scope="col" style="width: 12%;">Created Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Absternet LLC</td>
                                <td>Sep 20, 2021</td>
                                <td>Sep 20, 2021</td>
                                <td><span class="badge badge-soft-success p-2">Deal Won</span></td>
                                <td>
                                    <div class="text-nowrap">$100.1K</div>
                                </td>
                            </tr>
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end table responsive -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div>
    </div>




    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">New Deposit</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table
                            class="table table-borderless table-hover table-nowrap align-middle mb-0">
                            <thead class="table-light">
                            <tr class="text-muted">
                                <th scope="col">Name</th>
                                <th scope="col" style="width: 20%;">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col" style="width: 16%;">Status</th>
                                <th scope="col" style="width: 12%;">Created Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Absternet LLC</td>
                                <td>Sep 20, 2021</td>
                                <td>Sep 20, 2021</td>
                                <td><span class="badge badge-soft-success p-2">Deal Won</span></td>
                                <td>
                                    <div class="text-nowrap">$100.1K</div>
                                </td>
                            </tr>
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end table responsive -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div>
    </div>



    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">New Withdraw</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table
                            class="table table-borderless table-hover table-nowrap align-middle mb-0">
                            <thead class="table-light">
                            <tr class="text-muted">
                                <th scope="col">Name</th>
                                <th scope="col" style="width: 20%;">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col" style="width: 16%;">Status</th>
                                <th scope="col" style="width: 12%;">Created Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Absternet LLC</td>
                                <td>Sep 20, 2021</td>
                                <td>Sep 20, 2021</td>
                                <td><span class="badge badge-soft-success p-2">Deal Won</span></td>
                                <td>
                                    <div class="text-nowrap">$100.1K</div>
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
