<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 'admin') {
            return redirect()->route('admin.staff.index');
        } else {
            return redirect()->route('staff.dashboard');
        }
    }
}
