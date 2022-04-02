<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gateway;
use Illuminate\Http\Request;

class AdminGatewayController extends Controller
{
    public function payment_gateway()
    {
        $gateway = gateway::all();
        return view('admin.gateway.paymentGateway',compact('gateway'));
    }


    public function payment_gateway_update(Request $request)
    {
        $update_gateway = gateway::where('id',$request->gateway_edit)->first();
        $update_gateway->gateway_name = $request->gateway_name;
        $update_gateway->gateway_number = $request->gateway_number;
        $update_gateway->gateway_note = $request->gateway_note;
        $update_gateway->min_price = $request->min_price;
        $update_gateway->max_price = $request->max_price;
        $update_gateway->is_active = $request->is_active;
        $update_gateway->save();
        return back()->with('success','Payment Gateway Successfully Updated');
    }

}
