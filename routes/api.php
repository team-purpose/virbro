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

// List Assets
Route::get('assets', 'AssetController@index');

// List Single Asset
Route::get('asset/{id}', 'AssetController@show');

// Create new Asset
Route::post('asset', 'AssetController@store');

// Update Asset
Route::put('asset', 'AssetController@store');

// List Assets
Route::delete('asset/{id}', 'AssetController@destroy');
