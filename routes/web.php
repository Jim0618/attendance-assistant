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

Route::any('/', ['uses' => 'StudentController@login']);

Route::post('/ask_for_leave', ['uses' => 'LeaveController@ask_for_leave']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
