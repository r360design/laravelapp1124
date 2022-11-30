<?php


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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::get('/', 'App\Http\Controllers\HomeController@show');
//Route::post('/', 'App\Http\Controllers\HomeController@storePhoneNumber');
//Route::post('/custom', 'App\Http\Controllers\HomeController@sendCustomMessage');

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'show');
    Route::post('/', 'storePhoneNumber');
    Route::post('/custom', 'sendCustomMessage');
});

