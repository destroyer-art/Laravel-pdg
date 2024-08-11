<?php
// app/Http/Controllers/Admin/StaffController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Availablep;
use Illuminate\Http\Request;
use App\Mail\NewMemberNotify;
use Mail;

class StaffController extends Controller
{
    // Display all staff
    public function index()
    {
        $staff = User::where('role', 'staff')->get();
        return view('admin.staff.index', compact('staff'));
    }

    // Store a new staff member
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
        ]);

        $staff = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'staff',
            'lastoperation' => '',
            'accept' => 'false',
            'password' => bcrypt('password'), // Set a default password or handle sending an invitation
        ]);
        Mail::to($staff->email)->send(new NewMemberNotify());

        return redirect()->route('admin.staff.index')->with('status', 'Staff member created!');
    }

    // Display a specific staff member
    public function show($id)
    {
        $staff = User::findOrFail($id);
        $policies = $staff->policies;
        $available_policies = Availablep::get();
        return view('admin.staff.show', compact('staff', 'policies', 'available_policies'));
    }

    // Update staff member details
    public function update(Request $request, $id)
    {
        $staff = User::findOrFail($id);
        $staff->update($request->only('name', 'email'));

        return redirect()->route('admin.staff.show', $id)->with('status', 'Staff member updated!');
    }

    // Delete a staff member
    public function destroy($id)
    {
        $staff = User::findOrFail($id);
        $staff->policies()->update(['user_id' => null]);
        $staff->delete();

        return redirect()->route('admin.staff.index')->with('status', 'Staff member deleted!');
    }
}
