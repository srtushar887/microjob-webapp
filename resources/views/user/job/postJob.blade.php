@extends('layouts.user')
@section('title')
    Post Job
@endsection
@section('user')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Find Job</h4>
                </div><!-- end card header -->
                <div class="card-body form-steps">
                    <form action="{{route('user.post.job.save')}}" method="post" enctype="multipart/form-data" id="post_job">
                        @csrf
                        <div id="custom-progress-bar" class="progress-nav mb-4">
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%;"
                                     aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link rounded-pill active"
                                            data-progressbar="custom-progress-bar" data-bs-toggle="pill"
                                            data-bs-target="#pills-gen-info" type="button">1</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link rounded-pill"
                                            data-progressbar="custom-progress-bar" id="pills-info-desc-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-info-desc"
                                            type="button">2</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link rounded-pill"
                                            data-progressbar="custom-progress-bar" id="pills-success-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-success"
                                            type="button">3</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link rounded-pill"
                                            data-progressbar="custom-progress-bar" id="budget"
                                            data-bs-toggle="pill" data-bs-target="#budget-setting"
                                            type="button">4</button>
                                </li>
                            </ul>
                        </div>
                        <input type="hidden" class="cat_amount">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-gen-info">
                                <div>
                                    <div class="mb-4">
                                        <div>
                                            <h5 class="mb-1">Select Location</h5>
                                        </div>
                                    </div>
                                    <ul class="list-inline nav mb-3 location-category">
                                        @foreach($all_reg as $reg)
                                            <li class="list-inline-item mb-2">
                                                <button type="button"
                                                        class="btn btn-sm btn-outline-primary {{$loop->first ? 'active':''}}"
                                                        data-bs-toggle="tab" data-bs-target="#{{$reg->region}}">
                                                    <div class="form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="radio"
                                                                   value="{{$reg->region}}"
                                                                   class="form-check-input d-none reg_name"
                                                                   {{$loop->first ? 'checked':''}}
                                                                   name="region_name">{{$reg->region}}
                                                        </label>
                                                    </div>
                                                </button>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content location-sub-category">
                                        <hr>
                                        <h6 class="mb-3">Select Country</h6>
                                        @foreach($all_reg as $regn)
                                            <div class="tab-pane show {{$loop->first ? 'show active' : ''}}" id="{{$regn->region}}">
                                                <?php
                                                $countrys = \App\Models\region_country::where('region', $regn->region)->get();
                                                ?>
                                                <ul class="list-inline">
                                                    @foreach($countrys as $count)
                                                        <li class="list-inline-item mb-3">
                                                            <button type="button" class="btn btn-sm btn-light">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox"
                                                                           class="form-check-input d-none country_name"
                                                                           value="{{$count->id}}"
                                                                           name="country_name[]">{{$count->country_name}}
                                                                </label>
                                                            </button>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                    @endforeach
                                    <!-- /for loop -->

                                    </div>
                                </div>
                            </div>
                            <!-- Job Category -->
                            <div class="tab-pane fade" id="pills-info-desc">
                                <div>
                                    <div class="mb-4">
                                        <div>
                                            <h5 class="mb-1">Select Job Category</h5>
                                        </div>
                                    </div>
                                    <ul class="list-inline nav mb-3 main_cats">
                                        <li class="list-inline-item mb-2">
                                            <button type="button"
                                                    class="btn btn-sm btn-outline-primary active"
                                                    data-bs-toggle="tab" data-bs-target="#assignment">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio"
                                                               class="form-check-input d-none main_category"
                                                               name="job-category">
                                                    </label>
                                                </div>
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content job-sub-category">
                                        <hr>
                                        <h6 class="mb-3">Select Sub Category</h6>
                                        <div class="tab-pane show active" id="jobsubcats">
                                            <ul class="list-inline sub_cats">
                                                <li class="list-inline-item mb-3">
                                                    <button type="button" class="btn btn-sm btn-light">
                                                        <label class="form-check-label">
                                                            <input type="radio"
                                                                   class="form-check-input d-none"
                                                                   name="subcat">Assignment (300 words)
                                                        </label>
                                                    </button>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Job Information -->
                            <div class="tab-pane fade" id="pills-success">
                                <div>
                                    <div class="mb-4">
                                        <div>
                                            <h5 class="mb-1">Job Information</h5>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Job Title <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="job_title" class="form-control job_title"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label>What specific tasks need to be Completed? <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control specific_task" name="specific_task" cols="7" rows="7"
                                                          placeholder="Write here..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label>Required proof the job was Completed <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control require_proof" name="require_proof" cols="7" rows="7"
                                                          placeholder="Write here..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Thumbnail Image</label>
                                                <br>
                                                <img src="https://discountseries.com/wp-content/uploads/2017/09/default.jpg"
                                                     style="width: 100%;height: 200px;" id="wizardPicturePreview">
                                                <input type="file" name="thumbnail" class="form-control" id="fileup">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Budget & Setting -->
                            <div class="tab-pane fade" id="budget-setting">
                                <div class="mb-4">
                                    <div>
                                        <h5 class="mb-1">Budget & Setting</h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Worker Need <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="worker_need" class="form-control worker_need" value="1"
                                                           placeholder="Enter here..." required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label>Each worker Earn <span
                                                            class="text-danger">*</span></label>

                                                    <input type="text" name="each_worker_earn"
                                                           class="form-control each_worker_earn"
                                                           placeholder="Enter here..." required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label>Require Screenshots <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="screenshot" class="form-control screen_short" value="1"
                                                           placeholder="Enter here..." required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label>Estimated Day <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" name="est_day" class="form-control est_day"
                                                           placeholder="Enter here..." required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border">
                                            <div class="card-body">
                                                <h5 class="card-title fw-bold text-center">Estimated Job
                                                    Cost</h5>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">$</span>
                                                    <input type="text" name="est_job_cost" class="form-control est_job_cost"
                                                           placeholder="Enter here..." readonly>
                                                </div>
                                                <p class="text-danger text-center">My Balance {{$gen_settings->site_currency}} {{number_format(Auth::user()->balance,2)}}</p>
                                                <p class="text-danger text-center">Minimum spend {{$gen_settings->site_currency}} {{number_format($gen_settings->job_post_min_amt,2)}}</p>
                                                <div class="text-center">
                                                    <button type="button"
                                                            class="btn btn-sm btn-warning">Please
                                                        Deposit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="button" class="btn btn-primary submit_job" id="submit_job" data-bs-toggle="modal"
                                            data-bs-target="#success-msg">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
@include('user.job.include.postJobInc')
