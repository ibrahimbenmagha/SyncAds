<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Business;
use App\Models\Location;


class BusinessController extends Controller
{
    public function create_business(Request $request)
    {
        $request->validate([
            'name' =>'required |string',
            'phone' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'business_name' => 'required|string',
            'business_activity' => 'required',
            'business_type' => 'required',
            'region' => 'required|string',
            'city' => 'required|string',
            'secteur' => 'required|string',
        ]);
        $user = User::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => 'business', // Assuming the role for businesses is 'business'
            'status' => 'deactivated', // Default status
        ]);
        $business = Business::create([
            'name' => $request->input('business_name'),
            'user_id' => $user->id,
            'businessType' => $request->input('business_type'),
            'businessActivity' => $request->input('business_activity'),
        ]);

        $location = Location::create([
            'region' => $request->input('region'),
            'city' => $request->input('city'),
            'secteur' => $request->input('secteur'),
            'business_id' => $business->id,
        ]);

        return response()->json(['message' => 'Business created successfully', 'business' => $business], 201);
    }

    public function get_business(Request $request)
{
    
}

}
