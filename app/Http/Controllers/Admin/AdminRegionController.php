<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\job_main_category;
use App\Models\region_country;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminRegionController extends Controller
{
    public function region_country()
    {
        return view('admin.region.regionCountry');
    }

    public function region_country_get()
    {
        $all_region_country = region_country::all();
        return DataTables::of($all_region_country)->make(true);
    }

    public function region_country_get_all(Request $request)
    {
        $all_reg = region_country::distinct()->select('id', 'region')->where('region', '!=', '')->get();
        return response()->json($all_reg, 200);
    }


    public function country_get_all(Request $request)
    {
        $all_reg = region_country::where('region', $request->reg_name)->get();
        return response()->json($all_reg, 200);
    }

    public function main_category_by_country(Request $request)
    {
        $main_cats = job_main_category::where('country_id', $request->country)->get();
        return response()->json($main_cats, 200);
    }







}
