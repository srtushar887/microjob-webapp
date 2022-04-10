<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\all_job;
use App\Models\User;
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
        $all_jobs = all_job::with('user')->get();
        return DataTables::of($all_jobs)
            ->addColumn('action',function ($all_jobs){
                return '<a href="'.route('admin.job.details',$all_jobs->id).'"><button type="button" class="btn btn-sm btn-light ">View</button></a> ';
            })
            ->editColumn('created_at', function ($all_jobs) {
                return Carbon::parse($all_jobs->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


    public function job_details($id)
    {
        $job_edit = all_job::where('id',$id)->first();
        return view('admin.jobs.jobDetails',compact('job_edit'));
    }

    public function job_details_update(Request $request)
    {
        $update_job = all_job::where('id',$request->edit_job_id)->first();
        $update_job->job_status = $request->job_status;
        $update_job->save();

        return back()->with('success','Job Status Successfully Updated');
    }


    public function pending_jobs()
    {
        return view('admin.jobs.pendingJobs');
    }

    public function pending_jobs_get()
    {
        $all_jobs = all_job::where('job_status',1)->with('user')->get();
        return DataTables::of($all_jobs)
            ->addColumn('action',function ($all_jobs){
                return '<a href="'.route('admin.job.details',$all_jobs->id).'"><button type="button" class="btn btn-sm btn-light ">View</button></a> ';
            })
            ->editColumn('created_at', function ($all_jobs) {
                return Carbon::parse($all_jobs->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


    public function approved_jobs()
    {
        return view('admin.jobs.approvedJobs');
    }


    public function approved_jobs_get()
    {
        $all_jobs = all_job::where('job_status',2)->with('user')->get();
        return DataTables::of($all_jobs)
            ->addColumn('action',function ($all_jobs){
                return '<a href="'.route('admin.job.details',$all_jobs->id).'"><button type="button" class="btn btn-sm btn-light ">View</button></a> ';
            })
            ->editColumn('created_at', function ($all_jobs) {
                return Carbon::parse($all_jobs->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


    public function rejected_jobs()
    {
        return view('admin.jobs.rejectedJobs');
    }

    public function rejected_jobs_get()
    {
        $all_jobs = all_job::where('job_status',4)->with('user')->get();
        return DataTables::of($all_jobs)
            ->addColumn('action',function ($all_jobs){
                return '<a href="'.route('admin.job.details',$all_jobs->id).'"><button type="button" class="btn btn-sm btn-light ">View</button></a> ';
            })
            ->editColumn('created_at', function ($all_jobs) {
                return Carbon::parse($all_jobs->created_at)->format('d-F-Y');
            })
            ->make(true);
    }










}
