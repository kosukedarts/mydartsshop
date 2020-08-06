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
    Route::get('project/create', 'Admin\ProjectController@add');
    Route::post('project/create', 'Admin\ProjectController@create');
    Route::get('project', 'Admin\ProjectController@index');
    Route::get('project/edit', 'Admin\ProjectController@edit'); // 追記
    Route::post('project/edit', 'Admin\ProjectController@update');
    Route::get('project/delete', 'Admin\ProjectController@delete');
    Route::get('project/hive', 'Admin\ProjectController@hive');
    Route::get('project/arban', 'Admin\ProjectController@arban');
    Route::get('project/teine', 'Admin\ProjectController@teine');
    Route::get('project/minami', 'Admin\ProjectController@minami');
    Route::get('project/kaikatsu', 'Admin\ProjectController@kaikatsu');
    Route::get('project/roundone', 'Admin\ProjectController@roundone');
    Route::get('project/dice', 'Admin\ProjectController@dice');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProjectController@index');
