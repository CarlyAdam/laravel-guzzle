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

Route::get('/', function () {
    return view('welcome');
});
Route::get('get','ApiController@Get');
Route::get('post','ApiController@Post');
Route::get('put','ApiController@Put');
Route::get('delete','ApiController@Delete');
