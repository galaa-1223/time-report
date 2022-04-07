<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return view('pages.dashboard.index');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
