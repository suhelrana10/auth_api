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


    Route::group(['middleware' => 'api',  'namespace' => 'Auth',  'prefix' => 'v1'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::get('users','AuthController@users');

});



// Route::group(['prefix'=>'v1','namespace'=>'Api'],function(){
//
// Route::get('/login','UserController@login');
//
// // Route::resource('/user','UserController');
// // Route::get('/user-verification/{token}','AuthController@verification')->name("verifyuser");
//
//
// });

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
