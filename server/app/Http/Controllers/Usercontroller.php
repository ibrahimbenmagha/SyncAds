<?php

namespace App\Http\Controllers;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class Usercontroller extends Controller
{

    public function create_admin(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password' => bcrypt($request->input('password')),
            'role' => 'admin',
            'status' => 'activated', 
        ]);
        return response()->json(['message' => 'Business created successfully', 'business' => $user], 201);

    }

}
