<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('/user')->group(function () {
    //when using get, send error message
    Route::get('/login', 'App\Http\Controllers\Api\V1\LoginController@notSupported');

    //when trying to login, send to login
    Route::post('/login', 'App\Http\Controllers\Api\V1\LoginController@login');
    //when logged in, send to controller
    Route::middleware('auth:api')->get('/all', 'App\Http\Controllers\UserController@index');
});
