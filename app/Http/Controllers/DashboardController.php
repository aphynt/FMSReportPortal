<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function production()
    {
        return view('dashboard.production');
    }
}
