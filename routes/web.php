<?php

use App\Models\City;
// use App\Models\Desktop;
// use App\Models\Processor;
use App\Models\Country;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/processor', function () {
//     $processor= Desktop::find(3)->processor;
//     return $processor;
// });

// Route::get('/desktop', function () {
//     $desktop= Processor::find(1)->desktop;
//     return $desktop;
// });

Route::get('/cities',function(){
    $cities = Country::find(2)->cities;
    return $cities;
});

Route::get('/country',function(){
    $country = City::find(4)->country;
    return $country;
});