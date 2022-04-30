<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user_activity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user_agent = $request->userAgent();

        $bname = 'Unknown';
        $platform = 'Unknown';

        //First get the platform?
        if (preg_match('/linux/i', $user_agent)) {
            $platform = 'linux';
        }
        elseif (preg_match('/macintosh|mac os x/i', $user_agent)) {
            $platform = 'mac';
        }
        elseif (preg_match('/windows|win32/i', $user_agent)) {
            $platform = 'windows';
        }

//        return $request->ip();
        return view('user.index');
    }

    public function my_profile()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('user.page.myProfile',compact('user'));
    }

    public function my_profile_update(Request $request)
    {
        $update_profile = User::where('id',Auth::user()->id)->first();
        $update_profile->name = $request->name;
        $update_profile->phone_number = $request->phone_number;
        $update_profile->website = $request->website;
        $update_profile->city = $request->city;
        $update_profile->country = $request->country;
        $update_profile->zip_code = $request->zip_code;
        $update_profile->description = $request->description;
        $update_profile->save();


        $act = new user_activity();
        $act->user_id = Auth::user()->id;
        $act->activity = "Profile Updated";
        $act->created_date = Carbon::now()->format('Y-m-d');
        $act->save();

        return back()->with('success','Profile Successfully Updated');
    }

    public function change_password()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('user.page.changePassword',compact('user'));
    }

    public function change_password_update(Request $request)
    {
        $npass=$request->n_pass;
        $cpass=$request->c_pass;

        if ($npass != $cpass){
            return back()->with('alert','Password Not Match');
        }elseif (strlen($npass) < 8 || strlen( $cpass) < 8){
            return back()->with('alert','Password should be min 8 char');
        }else{
            $user = User::where('id',Auth::user()->id)->first();
            $user->password = Hash::make($npass);
            $user->save();

            $act = new user_activity();
            $act->user_id = Auth::user()->id;
            $act->activity = "Account Password Changed";
            $act->created_date = Carbon::now()->format('Y-m-d');
            $act->save();


            return back()->with('success','Password Successfully Changed');
        }

    }



}
