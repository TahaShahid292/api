<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('country' , 'CountryController@index');
Route::get('country/{country}' , 'CountryController@show');
Route::post('save' , 'CountryController@store');
Route::get('country/{id}/destroy' , 'CountryController@destroy');
Route::post('country/{id}/edit' , 'CountryController@update');