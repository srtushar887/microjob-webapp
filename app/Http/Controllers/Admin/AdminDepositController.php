<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\general_setting;
use App\Models\transaction;
use App\Models\User;
use App\Models\user_deposit;
use App\Models\user_notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminDepositController extends Controller
{
    public function all_deposit()
    {
        $gen = general_setting::first();
        return view('admin.deposit.allDeposit', compact('gen'));
    }

    public function all_deposit_get()
    {
        $all_deposit = user_deposit::with('user')->get();
        return DataTables::of($all_deposit)
            ->addColumn('action', function ($all_deposit) {
                return '
                <button id="' . $all_deposit->id . '" onclick="editdepsoit(this.id)" type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#editdepositmodal">Edit</button>
                <button id="' . $all_deposit->id . '" onclick="deletedeposit(this.id)"  type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#deletedepositmodal">Delete</button>
               ';
            })
            ->editColumn('created_at', function ($all_main_cats) {
                return Carbon::parse($all_main_cats->created_at)->format('d-F-Y');
            })
            ->make(true);
    }

    public function pending_deposit()
    {
        $gen = general_setting::first();
        return view('admin.deposit.pendingDeposit', compact('gen'));
    }


    public function pending_deposit_get()
    {
        $all_deposit = user_deposit::where('status', 0)->with('user')->get();
        return DataTables::of($all_deposit)
            ->addColumn('action', function ($all_deposit) {
                return '
                <button id="' . $all_deposit->id . '" onclick="editdepsoit(this.id)" type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#editdepositmodal">Edit</button>
                <button id="' . $all_deposit->id . '" onclick="deletedeposit(this.id)"  type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#deletedepositmodal">Delete</button>
               ';
            })
            ->editColumn('created_at', function ($all_main_cats) {
                return Carbon::parse($all_main_cats->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


    public function approved_deposit()
    {
        $gen = general_setting::first();
        return view('admin.deposit.approvedDeposit', compact('gen'));
    }


    public function approved_deposit_get()
    {
        $all_deposit = user_deposit::where('status', 1)->with('user')->get();
        return DataTables::of($all_deposit)
            ->addColumn('action', function ($all_deposit) {
                return '
                <button id="' . $all_deposit->id . '" onclick="editdepsoit(this.id)" type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#editdepositmodal">Edit</button>
                <button id="' . $all_deposit->id . '" onclick="deletedeposit(this.id)"  type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#deletedepositmodal">Delete</button>
               ';
            })
            ->editColumn('created_at', function ($all_main_cats) {
                return Carbon::parse($all_main_cats->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


    public function rejected_deposit()
    {
        $gen = general_setting::first();
        return view('admin.deposit.rejectedDeposit', compact('gen'));
    }


    public function rejected_deposit_get()
    {
        $all_deposit = user_deposit::where('status', 2)->with('user')->get();
        return DataTables::of($all_deposit)
            ->addColumn('action', function ($all_deposit) {
                return '
                <button id="' . $all_deposit->id . '" onclick="editdepsoit(this.id)" type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#editdepositmodal">Edit</button>
                <button id="' . $all_deposit->id . '" onclick="deletedeposit(this.id)"  type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#deletedepositmodal">Delete</button>
               ';
            })
            ->editColumn('created_at', function ($all_main_cats) {
                return Carbon::parse($all_main_cats->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


    public function deposit_change_status(Request $request)
    {
        if ($request->status == 1) {
            $user_deposit = user_deposit::where('id', $request->edit_dep_id)->first();
            $user_deposit->status = 1;
            $user_deposit->save();

            $dep_tran = transaction::where('dep_id', $user_deposit->id)->first();
            if ($dep_tran) {
                $dep_tran->status = 1;
                $dep_tran->save();
            }


            $user = User::where('id', $user_deposit->user_id)->first();
            $user->balance = $user->balance + $user_deposit->amount;
            $user->save();


            $new_notification = new user_notification();
            $new_notification->user_id = $user->id;
            $new_notification->title = "Your deposit has been approved";
            $new_notification->description = $request->deposit_comment;
            $new_notification->type = 2;
            $new_notification->status = 1;
            $new_notification->is_view = 1;
            $new_notification->save();


            return back()->with('success', 'Deposit Successfully Approved');

        } elseif ($request->status == 2) {
            $user_deposit = user_deposit::where('id', $request->edit_dep_id)->first();
            if ($user_deposit->status == 1) {
                $user = User::where('id', $user_deposit->user_id)->first();
                $user->balance = $user->balance + $user_deposit->amount;
                $user->save();
            }

            $user_deposit->status = 2;
            $user_deposit->save();


            $dep_tran = transaction::where('dep_id', $user_deposit->id)->first();
            if ($dep_tran) {
                $dep_tran->status = 2;
                $dep_tran->save();
            }


            $new_notification = new user_notification();
            $new_notification->user_id = $user_deposit->user_id;
            $new_notification->title = "Your deposit has been rejected";
            $new_notification->description = $request->with_comment;
            $new_notification->type = 2;
            $new_notification->status = 1;
            $new_notification->is_view = 1;
            $new_notification->save();

            return back()->with('success', 'Deposit Successfully Rejected');
        } else {
            return back()->with('alert', 'Deposit Not Found');
        }
    }

    public function deposit_delete(Request $request)
    {
        $del_dep = user_deposit::where('id', $request->delete_dep_id)->first();

        $dep_tran = transaction::where('dep_id', $del_dep->id)->first();
        if ($dep_tran) {
            $dep_tran->delete();
        }

        $del_dep->delete();
        return back()->with('success', 'Deposit Successfully Deleted');
    }


}
