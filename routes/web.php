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
/*
Route::get('/', 'StudentController@index');
Route::get('student/{id}', 'StudentController@showProfile');
Route::get('student/{id}','StudentController@detail');
*/

Route::get('help', function(){ return view('help'); });

Route::get('/', function(){ return view('index'); });
/*
Route::get('/', function () {
    return view('welcome');
});
*/