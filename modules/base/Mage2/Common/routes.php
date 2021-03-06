<?php
/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */


Route::group(['middleware' => ['web','website','adminauth'],'namespace' => "Mage2\Common\Controllers"], function () {

    Route::get('/admin/config', ['as' => 'admin.configuration', 'uses' => 'AdminConfigController@index']);
    Route::post('/admin/config', ['as' => 'admin.configuration.store', 'uses' => 'AdminConfigController@store']);

});


Route::group(['middleware' => ['web','website'],'namespace' => "Mage2\Common\Controllers"], function () {

    Route::get('/', ['as' => 'home','uses' => 'HomeController@index']);
    Route::get('/admin', ['as' => 'admin.dashboard', 'uses' => 'AdminController@index']);

});
