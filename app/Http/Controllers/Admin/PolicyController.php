<?php
// app/Http/Controllers/Admin/PolicyController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;
use App\Models\Availablep;
use Auth;
use Illuminate\Support\Facades\Validator;
use Nette\Utils\Random;

class PolicyController extends Controller
{
    // Add a policy to a staff member
    public function addPolicy(Request $request, $id)
    {
        $last_operation = date('Y-m-d H:i:s');
        $policyIds = $request->input('policy_ids', []);
        $availablePolicies = Availablep::whereIn('id', $policyIds)->get();
        foreach ($availablePolicies as $availablePolicy) {
            $policy = new Policy();
            $policy->code = Random::generate();
            $policy->first_name = $availablePolicy->first_name;
            $policy->last_name = $availablePolicy->last_name;
            $policy->plan_reference = $availablePolicy->plan_reference;
            $policy->investment_house = $availablePolicy->investment_house;
            $policy->user_id = $id;
            $policy->last_operation = $last_operation;

            $policy->save();
        }
        // if (!empty($errors)) {
        //     return response()->json(['errors' => $errors], 409);
        // }
        return redirect()->back()->with('status', 'Policy added successfully!');
    }

    // Remove a policy from a staff member
    public function removePolicy($id)
    {
        $policy = Policy::findOrFail($id);
        $policy->user_id = null;
        $policy->save();

        return redirect()->back()->with('status', 'Policy removed successfully!');
    }
}
