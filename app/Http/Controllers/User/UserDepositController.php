<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user_deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDepositController extends Controller
{
    public function deposit()
    {
        return view('user.deposit.deposit');
    }

    public function deposit_save(Request $request)
    {
        $user_deposit_save = new user_deposit();
        $user_deposit_save->user_id = Auth::user()->id;
        $user_deposit_save->gateway_id = $request->deposit_type;
        $user_deposit_save->amount = $request->amount;
        $user_deposit_save->usd_rate = $request->usd_rate;
        $user_deposit_save->transaction_number = $request->transaction_number;
        $user_deposit_save->status = 0;
        $user_deposit_save->save();
        return back()->with('success','Deposit Successfully Created');
    }

}
