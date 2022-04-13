<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return view('pages.dashboard.index');
        }

        return redirect("login");
    }
}
