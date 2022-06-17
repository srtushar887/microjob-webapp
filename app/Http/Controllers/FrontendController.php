<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('layouts.frontend');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function forum()
    {
        return view('frontend.forum');
    }

}
