<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // Where to redirect users after login
    protected function redirectTo()
    {
        $user = Auth::user();
        if ($user->role == 'admin') {
            return '/admin/staff';
        } else {
            return '/staff/dashboard';
        }
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
