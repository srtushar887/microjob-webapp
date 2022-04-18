<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class SubAdminUsersController extends Controller
{
    public function all_users()
    {
        return view('subadmin.users.allUsers');
    }

    public function all_users_get()
    {
        $all_users = User::all();
        return DataTables::of($all_users)
            ->addColumn('action',function ($all_users){
                return '<a href="'.route('subadmin.user.details',$all_users->id).'"><button type="button" class="btn btn-sm btn-light ">View</button></a> ';
            })
            ->editColumn('created_at', function ($all_users) {
                return Carbon::parse($all_users->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


    public function user_details($id)
    {
        $user = User::where('id',$id)->first();
        return view('subadmin.users.userDetails',compact('user'));
    }

    public function user_details_update(Request $request)
    {
        $update_profile = User::where('id',$request->user_id)->first();
        $update_profile->name = $request->name;
        $update_profile->balance = $request->balance;
        $update_profile->phone_number = $request->phone_number;
        $update_profile->website = $request->website;
        $update_profile->city = $request->city;
        $update_profile->country = $request->country;
        $update_profile->zip_code = $request->zip_code;
        $update_profile->description = $request->description;
        $update_profile->account_status = $request->account_status;
        $update_profile->save();
        return back()->with('success','Profile Successfully Updated');
    }



    public function user_change_password($id)
    {
//        return request()->userAgent();

        $user = User::where('id',$id)->first();
        return view('subadmin.users.changePassword',compact('user'));
    }

    public function user_change_password_update(Request $request)
    {
        $npass=$request->n_pass;
        $cpass=$request->c_pass;

        if ($npass != $cpass){
            return back()->with('alert','Password Not Match');
        }elseif (strlen($npass) < 8 || strlen( $cpass) < 8){
            return back()->with('alert','Password should be min 8 char');
        }else{
            $user = User::where('id',$request->user_id)->first();
            $user->password = Hash::make($npass);
            $user->save();
            return back()->with('success','Password Successfully Changed');
        }
    }
}
