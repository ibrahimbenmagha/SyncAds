<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Business;
use App\Models\Location;


class BusinessController extends Controller
{
    
    public function create_business(Request $request) //checked and it works
    {
        $user = User::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password' => bcrypt($request->input('password')),
            'role' => 'business', // Assuming the role for businesses is 'business'
            'status' => 'activated', // Default status
        ]);
        $business = Business::create([
            'name' => $request->input('business_name'),
            'user_id' => $user->id,
            'businessType' => $request->input('business_type'),
            'businessActivity' => $request->input('business_activity'),
        ]);

        $location = Location::create([
            'city' => $request->input('city'),
            'Available' => True,
            'secteur' => $request->input('secteur'),
            'business_id' => $business->id,
        ]);

        return response()->json(['message' => 'Business created successfully', 'business' => $business], 201);
    }

    public function GetAllBusinesses()
    { //checked and it works
        $AllBusin= Business::all();
        return response()->Json($AllBusin);
    }


    public function GetBusinessById(Request $request) //checked and it works
    {
        $id = $request->input('id'); 
        $BusinessById = Business::where('id', "$id")->get();
        return response()->json(['BusinessById' => $BusinessById]);
    }

}
