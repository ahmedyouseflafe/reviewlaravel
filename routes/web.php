<?php

use Illuminate\Support\Facades\Route;



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

Route::get('/' , function() {

        return "home page";
});

Route::get('news', function () {
    return "news page";
});

Route::get('news/{id}', function ($id) {
    return "singel news number : $id";
}); 

