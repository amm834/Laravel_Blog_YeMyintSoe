<?php

use Illuminate\Support\Facades\Route;



/* User */

Route::get('/', 'PageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/* Amdin */

Route::group(['middleware' => 'isadmin'], function () {
  Route::get('admin', 'admin\AdminController@index');

});