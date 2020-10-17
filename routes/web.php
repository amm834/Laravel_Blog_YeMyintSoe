<?php

use Illuminate\Support\Facades\Route;


/* User */

Route::get('/','PageController@index');

/* Amdin */

Route::get('admin','admin\AdminController@index');