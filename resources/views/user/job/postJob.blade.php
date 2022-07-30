@extends('layouts.user')
@section('title')
    Post Job
@endsection
@section('user')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Create You Job</h4>
                </div><!-- end card header -->
                <div class="card-body form-steps">
                    <form action="{{route('user.post.job.save')}}" enctype="multipart/form-data" id="post_job">
                        @csrf

                        <div id="custom-progress-bar" class="progress-nav mb-4">
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill active" data-progressbar="custom-progress-bar"
                                            id="pills-gen-info-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-gen-info" type="button" role="tab"
                                            aria-controls="pills-gen-info" aria-selected="true" data-position="0">1
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar"
                                            id="pills-info-desc-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-info-desc" type="button" role="tab"
                                            aria-controls="pills-info-desc" aria-selected="false" data-position="1">2
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar"
                                            id="pills-success-tab" data-bs-toggle="pill" data-bs-target="#pills-success"
                                            type="button" role="tab" aria-controls="pills-success" aria-selected="false"
                                            data-position="2">3
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="pills-gen-info" role="tabpanel"
                                 aria-labelledby="pills-gen-info-tab">
                                <div>
                                    <div class="mb-4">
                                        <div>
                                            <h5 class="mb-1">Select Location</h5>
                                        </div>
                                    </div>
                                    <ul class="list-inline nav mb-3 location-category">
                                        @foreach($all_reg as $reg)

                                            <li class="list-inline-item mb-2 regg_name {{$loop->first ? 'active':''}}"
                                                data-id="{{$reg->region}}">

                                                <button type="button"
                                                        class="btn btn-sm btn-outline-primary reg_btn {{$loop->first ? 'active':''}}"
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
                                            <div class="tab-pane show {{$loop->first ? 'show active' : ''}}"
                                                 id="{{$regn->region}}">
                                                <?php
                                                $countrys = \App\Models\region_country::where('region', $regn->region)->get();
                                                ?>
                                                <ul class="list-inline">
                                                    @foreach($countrys as $count)
                                                        <li class="list-inline-item mb-3 country_id"
                                                            data-id="{{$count->id}}">
                                                            <button type="button"
                                                                    class="btn btn-sm btn-light country_btn"
                                                                    data-id="{{$count->id}}">
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
                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button"
                                            class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                            data-nexttab="pills-info-desc-tab"><i
                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next
                                    </button>
                                </div>
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane fade" id="pills-info-desc" role="tabpanel"
                                 aria-labelledby="pills-info-desc-tab">
                                <div>
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto mb-2">
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                <input id="profile-img-file-input" type="hidden"
                                                       class="profile-img-file-input" accept="image/png, image/jpeg">

                                            </div>
                                        </div>


                                    </div>
                                    <div>
                                        <div class="mb-4">
                                            <div>
                                                <h5 class="mb-1">Select Location</h5>
                                            </div>
                                        </div>
                                        <ul class="list-inline nav mb-3 location-category main_cats">
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
                                        <div class="tab-content location-sub-category">
                                            <hr>
                                            <h6 class="mb-3">Select Sub Category</h6>
                                            <div class="tab-pane show active" id="jobsubcats">
                                                <ul class="list-inline sub_cats">


                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-link text-decoration-none btn-label previestab"
                                            data-previous="pills-gen-info-tab"><i
                                            class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to
                                        General
                                    </button>
                                    <button type="button"
                                            class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                            data-nexttab="pills-success-tab"><i
                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next
                                    </button>
                                </div>
                            </div>
                            <!-- end tab pane -->
                            <input type="hidden" class="cat_amount">
                            <div class="tab-pane fade" id="pills-success" role="tabpanel"
                                 aria-labelledby="pills-success-tab">
                                <div>
                                    <div class="mb-4">
                                        <div>
                                            <h5 class="mb-1">Job Information</h5>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Job Title <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="job_title" class="form-control job_title"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Thumbnail Image</label>
                                                <input type="file" name="thumbnail" class="form-control" id="fileup">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>What specific tasks need to be Completed? <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control specific_task" name="specific_task"
                                                          cols="7" rows="7"
                                                          placeholder="Write here..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Required proof the job was Completed <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control require_proof" name="require_proof"
                                                          cols="7" rows="7"
                                                          placeholder="Write here..." required></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-4 mt-3">
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
                                                        <input type="text" name="worker_need"
                                                               class="form-control worker_need" value="1"
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
                                                        <select class="form-control screen_short" name="screenshot">
                                                            <option value="">select any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label>Estimated Day <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control est_day" name="est_day">
                                                            <option value="">select any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <h5 class="card-title fw-bold text-center">Estimated
                                                        Job
                                                        Cost</h5>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">$</span>
                                                        <input type="text" name="est_job_cost"
                                                               class="form-control est_job_cost"
                                                               placeholder="Enter here..." readonly>
                                                    </div>
                                                    <p class="text-danger text-center">My
                                                        Balance {{$gen_settings->site_currency}} {{number_format(Auth::user()->balance,2)}}</p>
                                                    <p class="text-danger text-center">Minimum
                                                        spend {{$gen_settings->site_currency}} {{number_format($gen_settings->job_post_min_amt,2)}}</p>
                                                    <div class="text-center">
                                                        <button type="button"
                                                                class="btn btn-sm btn-warning">Please
                                                            Deposit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                                                        <div class="text-end">--}}
                                    {{--                                                                            <button type="button" class="btn btn-primary"--}}
                                    {{--                                                                                    data-bs-toggle="modal"--}}
                                    {{--                                                                                    data-bs-target="#success-msg">Submit--}}
                                    {{--                                                                            </button>--}}
                                    {{--                                                                        </div>--}}
                                </div>
                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-link text-decoration-none btn-label previestab"
                                            data-previous="pills-gen-info-tab"><i
                                            class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to
                                        General
                                    </button>
                                    <button type="submit"
                                            class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                            data-nexttab="pills-success-tab"><i
                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit
                                    </button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>


    </div>
@endsection
@include('user.job.include.postJobInc')
