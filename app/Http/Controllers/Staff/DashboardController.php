<?php

// app/Http/Controllers/Staff/DashboardController.php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $policies = Auth::user()->policies;

        return view('staff.dashboard', compact('policies'));
    }
}
