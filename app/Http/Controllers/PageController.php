<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function guidelines()
    {
        return view('guidelines');
    }

    public function adminDashboard()
    {
        return view('dashboard');
    }
}
