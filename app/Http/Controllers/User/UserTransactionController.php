<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTransactionController extends Controller
{
    public function all_transaction()
    {
        $transations = transaction::where('user_id',Auth::user()->id)
            ->orderBy('id','desc')
            ->paginate(15);
        return view('user.page.transaction',compact('transations'));
    }
}
