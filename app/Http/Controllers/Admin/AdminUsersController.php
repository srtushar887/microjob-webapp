<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\withdraw;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminUsersController extends Controller
{
    public function all_users()
    {
        return view('admin.users.allUsers');
    }

    public function all_users_get()
    {
        $all_users = User::all();
        return DataTables::of($all_users)
            ->addColumn('action',function ($all_users){
                return '<a href="'.route('admin.user.details',$all_users->id).'"><button type="button" class="btn btn-sm btn-light ">View</button></a> ';
            })
            ->editColumn('created_at', function ($all_users) {
                return Carbon::parse($all_users->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


    public function user_details($id)
    {
        return view('admin.users.userDetails');
    }


}
