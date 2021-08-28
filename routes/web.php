<?php

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

Route::get('/',"HomeController@index");
Route::get('/home',"HomeController@index");
Route::get('/call',"HomeController@bookCall");
Route::post('/arrangeMeeting',"HomeController@arrangeMeeting");
Route::post('/checkTimeAvailability',"HomeController@checkTimeAvailability");


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');