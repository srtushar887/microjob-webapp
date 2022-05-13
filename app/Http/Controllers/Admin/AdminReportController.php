<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\all_job;
use App\Models\job_main_category;
use App\Models\job_report;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminReportController extends Controller
{
    public function job_report()
    {
        return view('admin.report.jobReport');
    }


    public function job_report_get()
    {
        $all_report = job_report::all();
        return DataTables::of($all_report)
            ->addColumn('action', function ($all_report) {
                return '
                <button id="' . $all_report->id . '" onclick="editmaincat(this.id)" type="button" class="btn btn-sm btn-light editcatmd" data-bs-toggle="modal" data-bs-target="#editmaincategory">View</button>
                ';
            })
            ->editColumn('job_id', function ($all_report) {
                $job = all_job::select('id', 'job_title')->where('id', $all_report->job_id)->first();
                if ($job) {
                    return $job->job_title;
                } else {
                    return '';
                }
            })
            ->editColumn('user_id', function ($all_report) {
                $user = User::select('id', 'name')->where('id', $all_report->user_id)->first();
                if ($user) {
                    return $user->name;
                } else {
                    return '';
                }
            })
            ->editColumn('created_at', function ($all_report) {
                return Carbon::parse($all_report->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


    public function job_task_report()
    {
        return view('admin.report.jobTaskReport');
    }


}
