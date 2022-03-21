<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomLoginController extends Controller
{
    public function user_custom_register(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
           'email'=>'required',
           'phone_number'=>'required',
           'password'=>'required',
           'confirm_password'=>'required',
        ]);

        $new_user = new User();
        $new_user->user_ref_id = rand(00000000,88888888);
        $new_user->balance = 0.00;
        $new_user->name = $request->name;
        $new_user->email = $request->email;
        $new_user->phone_number = $request->phone_number;
        $new_user->password = Hash::make($request->password);
        $new_user->save();
        return redirect(route('login'))->with('success','Account Successfully Created');

    }


    public function user_custom_login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect(route('user.dashboard'));
        }

        return redirect()->back();
    }

}
