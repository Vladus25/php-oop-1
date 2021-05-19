<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'TestController@movie') -> name('movie');
