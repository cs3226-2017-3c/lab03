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
Route::get('/', 'StudentController@index');
Route::get('student/create', function() { return view('create'); });
Route::get('student/{id}', 'StudentController@detail');
Route::get('help', function() { return view('help'); });
Route::get('student/{id}/upload', 'UploadController@upload');
Route::post('student/upload', 'UploadController@store');

Route::get('test', 'FormController@test');
Route::post('test/t', 'FormController@check'); // notice the POST method
