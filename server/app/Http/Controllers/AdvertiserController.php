<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// use App\Models\Advertiser;
use App\Models\Advertiser;

class AdvertiserController extends Controller
{
    public function create_advertiser(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password' => bcrypt($request->input('password')),
            'role' => 'advertiser', 
            'status' => 'desactivated', 
        ]);

        $advertiser = Advertiser::create([
            'name' => $request->input('advertiser_name'),
            'user_id' => $user->id,
            'advertiser_activity' => $request->input('advertisement_activity'),
        ]);

        return response()->json(['message' => 'Advertiser created successfully', 'advertiser' => $advertiser], 201);
    }



    public function GetAllAdvertisers() //not yet checed out
    {
        $AllAdver= Advertiser::all();
        return response()->Json($AllAdver);
    }


    public function GetAdvertiserById($id) //not yet checed out
    {
        $AdvertiserBuId = Advertiser::find($id);
        if (!$AdvertiserBuId) {
            return response()->json(['error' => 'Advertiser not found'], 404);
        }
        return response()->json($AdvertiserBuId);
    }


    public function getAdvertisersByActivity(Request $request) //not yet checed out
    {
        $advertiser_activity = $request->input('advacty'); 
        $AdvertisersByActivity = Advertiser::where('advertiser_activity', 'LIKE', "%$advertiser_activity%")->get();
        return response()->json(['AdvertisersByActivity' => $AdvertisersByActivity]);
    }


    public function getAdvertisersByName(Request $request) //not yet checed out
    {
        $advertiser_name = $request->input('advname'); 
        $AdvertisersByName = Advertiser::where('name', 'LIKE', "%$advertiser_name%")->get();
        return response()->json(['AdvertisersByName' => $AdvertisersByName]);
    }

}
