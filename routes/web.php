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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/home/insured', 'HomeController@insured');
Route::get('/home/insured/new', 'HomeController@insure_new');
Route::get('/home/claims', 'HomeController@claims');
Route::get('/home/claims/new', 'HomeController@claim_new');
Route::get('/home/users', 'HomeController@user');
