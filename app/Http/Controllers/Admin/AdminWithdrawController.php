<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\transaction;
use App\Models\user_deposit;
use App\Models\user_notification;
use App\Models\withdraw;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminWithdrawController extends Controller
{
    public function all_withdraw()
    {
        return view('admin.withdraw.allWithdraw');
    }


    public function all_withdraw_get()
    {
        $all_deposit = withdraw::with('user')->get();
        return DataTables::of($all_deposit)
            ->addColumn('action',function ($all_deposit){
                return '
                <button id="' . $all_deposit->id . '" onclick="editwith(this.id)" type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#editwithmodal">Edit</button>
                <button id="' . $all_deposit->id . '" onclick="deletewithdraw(this.id)"  type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#deletewithmodal">Delete</button>
               ';
            })
            ->editColumn('created_at', function ($all_main_cats) {
                return Carbon::parse($all_main_cats->created_at)->format('d-F-Y');
            })
            ->make(true);
    }

    public function withdraw_status_change(Request $request)
    {
        $type = $request->status;
        if ($type == 1) {
            $user_with = withdraw::where('id',$request->edit_with_id)->first();
            $user_with->status = 1;
            $user_with->save();

            $user_tran = transaction::where('user_id',$user_with->user_id)->where('with_id',$user_with->id)->first();
            $user_tran->status = 1;
            $user_tran->save();


            $new_notification = new user_notification();
            $new_notification->user_id = $user_tran->user_id;
            $new_notification->title = "Your withdraw request has been approved";
            $new_notification->description = $request->notification_details;
            $new_notification->type = 3;
            $new_notification->status = 1;
            $new_notification->save();


            return back()->with('success','User Withdraw Successfully Approved');
        }elseif ($type == 2){
            $user_with = withdraw::where('id',$request->edit_with_id)->first();
            $user_with->status = 2;
            $user_with->save();

            $user_tran = transaction::where('user_id',$user_with->user_id)->where('with_id',$user_with->id)->first();
            $user_tran->status = 2;
            $user_tran->save();

            $new_notification = new user_notification();
            $new_notification->user_id = $user_tran->user_id;
            $new_notification->title = "Your withdraw request has been rejected";
            $new_notification->description = $request->notification_details;
            $new_notification->type = 3;
            $new_notification->status = 1;
            $new_notification->save();

            return back()->with('success','User Withdraw Successfully Rejected');
        }else{
            return back()->with('alert','User Withdraw Not Found');
        }
    }


    public function withdraw_delete(Request $request)
    {
        $with_del = withdraw::where('id',$request->delete_with_id)->first();

        $user_tran = transaction::where('user_id',$with_del->user_id)->where('with_id',$with_del->id)->first();
        if ($user_tran) {
            $user_tran->delete();
        }
        $with_del->delete();
        return back()->with('success','User Withdraw Successfully Deleted');

    }


    public function pending_withdraw()
    {
        return view('admin.withdraw.pendingWithdraw');
    }


    public function pending_withdraw_get()
    {
        $all_deposit = withdraw::where('status',0)->with('user')->get();
        return DataTables::of($all_deposit)
            ->addColumn('action',function ($all_deposit){
                return '
                <button id="' . $all_deposit->id . '" onclick="editwith(this.id)" type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#editwithmodal">Edit</button>
                <button id="' . $all_deposit->id . '" onclick="deletewithdraw(this.id)"  type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#deletewithmodal">Delete</button>
               ';
            })
            ->editColumn('created_at', function ($all_main_cats) {
                return Carbon::parse($all_main_cats->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


    public function approved_withdraw()
    {
        return view('admin.withdraw.approvedWithdraw');
    }

    public function approved_withdraw_get()
    {
        $all_deposit = withdraw::where('status',1)->with('user')->get();
        return DataTables::of($all_deposit)
            ->addColumn('action',function ($all_deposit){
                return '
                <button id="' . $all_deposit->id . '" onclick="editwith(this.id)" type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#editwithmodal">Edit</button>
                <button id="' . $all_deposit->id . '" onclick="deletewithdraw(this.id)"  type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#deletewithmodal">Delete</button>
               ';
            })
            ->editColumn('created_at', function ($all_main_cats) {
                return Carbon::parse($all_main_cats->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


    public function rejected_withdraw()
    {
        return view('admin.withdraw.rejectedWithdraw');
    }

    public function rejected_withdraw_get()
    {
        $all_deposit = withdraw::where('status',2)->with('user')->get();
        return DataTables::of($all_deposit)
            ->addColumn('action',function ($all_deposit){
                return '
                <button id="' . $all_deposit->id . '" onclick="editwith(this.id)" type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#editwithmodal">Edit</button>
                <button id="' . $all_deposit->id . '" onclick="deletewithdraw(this.id)"  type="button" class="btn btn-sm btn-light " data-bs-toggle="modal" data-bs-target="#deletewithmodal">Delete</button>
               ';
            })
            ->editColumn('created_at', function ($all_main_cats) {
                return Carbon::parse($all_main_cats->created_at)->format('d-F-Y');
            })
            ->make(true);
    }


}
