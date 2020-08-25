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

Route::group(['prefix' => 'admin',], function() {
    Route::get('project/create', 'Admin\ProjectController@add')->middleware('auth');
    Route::post('project/create', 'Admin\ProjectController@create')->middleware('auth');
    Route::get('project', 'Admin\ProjectController@index')->middleware('auth');
    Route::get('project/edit', 'Admin\ProjectController@edit')->middleware('auth'); // 追記
    Route::post('project/edit', 'Admin\ProjectController@update')->middleware('auth');
    Route::get('project/delete', 'Admin\ProjectController@delete')->middleware('auth');
    Route::get('project/hive', 'Admin\ProjectController@hive');
    Route::get('project/arban', 'Admin\ProjectController@arban');
    Route::get('project/teine', 'Admin\ProjectController@teine');
    Route::get('project/minami', 'Admin\ProjectController@minami');
    Route::get('project/kai', 'Admin\ProjectController@kai');
    Route::get('project/round', 'Admin\ProjectController@round');
    Route::get('project/dice', 'Admin\ProjectController@dice');
    Route::get('project/profile', 'Admin\ProjectController@profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProjectController@index');
