<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\general_setting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function general_settings()
    {
        $gen = general_setting::first();
        return view('admin.page.generalSettings', compact('gen'));
    }


    public function general_settings_save(Request $request)
    {
        $gen = general_setting::first();
        $gen->site_name = $request->site_name;
        $gen->site_email = $request->site_email;
        $gen->site_phone = $request->site_phone;
        $gen->site_address = $request->site_address;
        $gen->is_under_main = $request->is_under_main;
        $gen->usd_rate = $request->usd_rate;
        $gen->service_charge = $request->service_charge;
        $gen->job_auto_post = $request->job_auto_post;
        $gen->auto_post_date = $request->auto_post_date;
        $gen->job_post_min_amt = $request->job_post_min_amt;
        $gen->screenshot_price = $request->screenshot_price;
        $gen->site_currency = $request->site_currency;
        $gen->default_job_msg = $request->default_job_msg;
        $gen->default_dep_msg = $request->default_dep_msg;
        $gen->default_with_msg = $request->default_with_msg;
        $gen->save();
        return back()->with('success', 'General Settings Successfully Updated');
    }

}
