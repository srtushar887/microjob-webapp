@extends('layouts.user')
@section('user')
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-n4 mx-n4">
                <div class="bg-soft-warning">
                    <div class="card-body pb-0 px-4">
                        <div class="row mb-3">
                            <div class="col-md">
                                <div class="row align-items-center g-3">
                                    <div class="col-md-auto">
                                        <div class="avatar-md">
                                            <div class="avatar-title bg-white rounded-circle">
                                                <img src="{{asset('assets/dashboard/')}}/images/brands/slack.png" alt=""
                                                     class="avatar-xs">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div>
                                            <h4 class="fw-bold">{{$job_details->job_title}}</h4>
                                            <div class="hstack gap-3 flex-wrap">
                                                <div>Job ID : <span class="fw-medium">{{$job_details->id}}</span>
                                                </div>
                                                <div class="vr"></div>
                                                <div>Create Date : <span class="fw-medium">{{\Carbon\Carbon::parse($job_details->created_at)->toFormattedDateString()}}</span></div>
                                                <div class="vr"></div>
                                                <div>Time : <span class="fw-medium">{{$job_details->est_day}} Days</span></div>
                                                <div class="vr"></div>
                                                <?php
                                                $cat_name = \App\Models\job_main_category::where('id',$job_details->main_category)->first();
                                                ?>
                                                <div>Category : <span class="fw-medium">
                                                        @if ($cat_name)
                                                            {{$cat_name->category_name}}
                                                        @endif
                                                    </span></div>
                                                <div class="vr"></div>
                                                <?php
                                                $sub_cat_name = \App\Models\job_sub_category::where('id',$job_details->sub_category)->first();
                                                ?>
                                                <div>Sub Category : <span class="fw-medium">
                                                        @if ($sub_cat_name)
                                                            {{$sub_cat_name->category_name}}
                                                        @endif
                                                    </span></div>
                                                <div class="vr"></div>
                                                <div>Job Status :
                                                    @if ($job_details->job_status == 0)
                                                        <span class="fw-medium badge bg-success">In-Review</span>
                                                    @elseif($job_details->job_status == 1)
                                                        <span class="fw-medium badge bg-success">Active</span>
                                                    @elseif($job_details->job_status == 2)
                                                        <span class="fw-medium badge bg-success">Rejected</span>
                                                    @elseif($job_details->job_status == 3)
                                                        <span class="fw-medium badge bg-success">Completed</span>
                                                    @else
                                                        <span class="fw-medium badge bg-success">Not Set</span>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs-custom border-bottom-0">
                            <li class="nav-item">
                                <a class="nav-link fw-semibold"
                                   href="{{route('user.find.job.details',$job_details->id)}}">
                                    Overview
                                </a>
                            </li>


                            @if ($job_details->user_id == Auth::user()->id)
                                <li class="nav-item">
                                    <a class="nav-link active fw-semibold" href="{{route('user.job.apply.memebers',$job_details->id)}}">
                                        Applied Member
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </div>
                    <!-- end card body -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>



    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-borderless table-hover table-nowrap align-middle mb-0">
                            <thead class="table-light">
                            <tr class="text-muted">
                                <th scope="col">Name</th>
                                <th scope="col" style="width: 20%;">Task ID</th>
                                <th scope="col">Submited Date</th>
                                <th scope="col" style="width: 16%;">Status</th>
                                <th scope="col" style="width: 12%;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($apply_jobs as $app_job)
                                <?php
                                $user_name = \App\Models\User::select('id','name')->where('id',$app_job->user_id)->first();
                                ?>
                                <tr>
                                    <td><img src="{{asset('assets/dashboard/')}}/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="#javascript: void(0);" class="text-body fw-medium">
                                            @if ($user_name)
                                                {{$user_name->name}}
                                            @endif
                                        </a></td>
                                    <td>{{$app_job->task_name}}</td>
                                    <td>{{\Carbon\Carbon::parse($app_job->created_at)->toFormattedDateString()}}</td>

                                    <td>
                                        @if ($app_job->status == 0)
                                            <span class="badge badge-soft-success p-2">In-Process</span>
                                        @elseif($app_job->status == 1)
                                            <span class="badge badge-soft-success p-2">Submitted</span>
                                        @elseif($app_job->status == 2)
                                            <span class="badge badge-soft-success p-2">Approved</span>
                                        @elseif($app_job->status == 3)
                                            <span class="badge badge-soft-success p-2">Rejected</span>
                                        @else
                                            <span class="badge badge-soft-success p-2">Not Set</span>
                                        @endif

                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary btn-light " data-bs-toggle="modal" data-bs-target="#inviteMembersModal{{$app_job->id}}">View Details</button>
                                    </td>
                                </tr>


                                <div class="modal fade" id="inviteMembersModal{{$app_job->id}}" tabindex="-1" aria-labelledby="inviteMembersModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <form action="{{route('user.job.apply.memebers.change.status')}}" method="post">
                                            @csrf
                                            <div class="modal-content border-0">
                                                <div class="modal-header p-3 ps-4 bg-soft-success">
                                                    <h5 class="modal-title" id="inviteMembersModalLabel">View Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <div class="search-box mb-3">
                                                        <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3 border">
                                                            <img src="{{asset($app_job->prove_one)}}" class="img-fluid d-block w-100" alt="">
                                                        </div>
                                                        <div class="col-md-12 mb-3 border">
                                                            <img src="{{asset($app_job->prove_two)}}" class="img-fluid d-block w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="search-box mb-3">
                                                        <select class="form-control" name="status">
                                                            <option value="2">Approved</option>
                                                            <option value="3">Rejected</option>
                                                        </select>
                                                        <input type="hidden" value="{{$app_job->id}}" name="apply_id">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light w-xs" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-success w-xs">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- end modal-content -->
                                    </div>
                                </div>

                            @endforeach

                            </tbody><!-- end tbody -->
                        </table><!-- end table -->

                    </div><!-- end table responsive -->

                </div><!-- end card body -->

            </div><!-- end card -->
            {{$apply_jobs->links()}}
        </div>
    </div>
@endsection
