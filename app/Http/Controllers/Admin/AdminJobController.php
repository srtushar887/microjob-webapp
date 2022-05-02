<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\all_job;
use App\Models\User;
use App\Models\user_notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminJobController extends Controller
{
    public function all_jobs()
    {
        return view('admin.jobs.allJobs');
    }


    public function all_jobs_get()
    {
        $all_jobs = all_job::all();
        return DataTables::of($all_jobs)
            ->addColumn('action', function ($all_jobs) {
                return '<a href="' . route('admin.job.details', $all_jobs->id) . '"><button type="button" class="btn btn-sm btn-light ">View</button></a> ';
            })
            ->editColumn('created_at', function ($all_jobs) {
                return Carbon::parse($all_jobs->created_at)->format('d-F-Y');
            })
            ->editColumn('user', function ($all_jobs) {
                $user = User::select('id', 'name')->where('id', $all_jobs->user_id)->first();
                if ($user) {
                    return $user->name;
                } else {
                    return '';
                }
            })
            ->make(true);
    }


    public function job_details($id)
    {
        $job_edit = all_job::where('id', $id)->first();
        return view('admin.jobs.jobDetails', compact('job_edit'));
    }

    public function job_details_update(Request $request)
    {
        $update_job = all_job::where('id', $request->edit_job_id)->first();
        $update_job->job_status = $request->job_status;
        $update_job->save();


        $new_notification = new user_notification();
        $new_notification->user_id = $update_job->user_id;
        if ($request->job_status == 1) {
            $new_notification->title = "Your Job has been pending";
        } elseif ($request->job_status == 2) {
            $new_notification->title = "Your Job has been approved";
        } elseif ($request->job_status == 3) {
            $new_notification->title = "Your Job has been pushed";
        } elseif ($request->job_status == 4) {
            $new_notification->title = "Your Job has been rejected";
        } else {
            $new_notification->title = "Not Set";
        }

        $new_notification->description = $request->notification_details;
        $new_notification->type = 1;
        $new_notification->status = 1;
        $new_notification->is_view = 1;
        $new_notification->save();


        return back()->with('success', 'Job Status Successfully Updated');
    }


    public function pending_jobs()
    {
        return view('admin.jobs.pendingJobs');
    }

    public function pending_jobs_get()
    {
        $all_jobs = all_job::where('job_status', 1)->get();
        return DataTables::of($all_jobs)
            ->addColumn('action', function ($all_jobs) {
                return '<a href="' . route('admin.job.details', $all_jobs->id) . '"><button type="button" class="btn btn-sm btn-light ">View</button></a> ';
            })
            ->editColumn('created_at', function ($all_jobs) {
                return Carbon::parse($all_jobs->created_at)->format('d-F-Y');
            })
            ->editColumn('user', function ($all_jobs) {
                $user = User::select('id', 'name')->where('id', $all_jobs->user_id)->first();
                if ($user) {
                    return $user->name;
                } else {
                    return '';
                }
            })
            ->make(true);
    }


    public function approved_jobs()
    {
        return view('admin.jobs.approvedJobs');
    }


    public function approved_jobs_get()
    {
        $all_jobs = all_job::where('job_status', 2)->with('user')->get();
        return DataTables::of($all_jobs)
            ->addColumn('action', function ($all_jobs) {
                return '<a href="' . route('admin.job.details', $all_jobs->id) . '"><button type="button" class="btn btn-sm btn-light ">View</button></a> ';
            })
            ->editColumn('created_at', function ($all_jobs) {
                return Carbon::parse($all_jobs->created_at)->format('d-F-Y');
            })
            ->editColumn('user', function ($all_jobs) {
                $user = User::select('id', 'name')->where('id', $all_jobs->user_id)->first();
                if ($user) {
                    return $user->name;
                } else {
                    return '';
                }
            })
            ->make(true);
    }


    public function rejected_jobs()
    {
        return view('admin.jobs.rejectedJobs');
    }

    public function rejected_jobs_get()
    {
        $all_jobs = all_job::where('job_status', 4)->get();
        return DataTables::of($all_jobs)
            ->addColumn('action', function ($all_jobs) {
                return '<a href="' . route('admin.job.details', $all_jobs->id) . '"><button type="button" class="btn btn-sm btn-light ">View</button></a> ';
            })
            ->editColumn('created_at', function ($all_jobs) {
                return Carbon::parse($all_jobs->created_at)->format('d-F-Y');
            })
            ->editColumn('user', function ($all_jobs) {
                $user = User::select('id', 'name')->where('id', $all_jobs->user_id)->first();
                if ($user) {
                    return $user->name;
                } else {
                    return '';
                }
            })
            ->make(true);
    }


}
