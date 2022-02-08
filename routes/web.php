<?php

use App\Models\Desktop;
use App\Models\Processor;
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

Route::get('/desktop', function () {
    $desktop= Processor::find(1)->desktop;
    return $desktop;
});
