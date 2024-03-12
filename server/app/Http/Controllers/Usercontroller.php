<?php

namespace App\Http\Controllers;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class Usercontroller extends Controller
{

    // public function create_admin(Request $request){

    //     $validateuser = Validator::make($request->all(),[
    //         'name' =>'required |string',
    //         'phone' => 'required|string',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:8|confirmed',
    //         'adrress' => 'required|',   
    //     ]);

    // }

}
