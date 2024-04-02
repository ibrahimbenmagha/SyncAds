<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\BusinessController;





/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/createAdmin', [Usercontroller::class, 'create_admin']); //checked and it works

//Buinsess
Route::post('/createBusiness', [BusinessController::class, 'create_business']); // checked and works
Route::get('/allbusiness', [BusinessController::class, 'GetAllBusinesses']); //checked and it works
Route::get('/BusinessById/{id}', [BusinessController::class, 'GetBusinessById']); //checked and it works



//Advertiser
Route::post('/createAdvertiser', [AdvertiserController::class, 'create_advertiser']); 
Route::get('/alladvertisers', [AdvertiserController::class, 'GetAllAdvertisers']); 
Route::get('/AdvById/{id}', [AdvertiserController::class, 'GetAdvertiserById']);
Route::get('/AdvByctivity/{advacty}', [AdvertiserController::class, 'getAdvertisersByActivity']);
Route::get('/AdvByName/{advname}', [AdvertiserController::class, 'getAdvertisersByName']);




