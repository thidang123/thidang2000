<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SiteController;

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


Route::get('/',[\App\Http\Controllers\SiteController::class,"site"]);
Route::group(["prefix"=>'/'],function(){
    Route::get('/home',[\App\Http\Controllers\SiteController::class,"site"]);
    Route::get('/about',[\App\Http\Controllers\SiteController::class,"about"]);
    Route::get('/contact',[\App\Http\Controllers\SiteController::class,"contact"]);
    Route::get('/booking',[\App\Http\Controllers\SiteController::class,"booking"]);
    Route::get('/price',[\App\Http\Controllers\SiteController::class,"price"]);
    Route::get('/service',[\App\Http\Controllers\SiteController::class,"service"]);
    Route::get('/single',[\App\Http\Controllers\SiteController::class,"single"]);
    Route::get('/blog',[\App\Http\Controllers\SiteController::class,"blog"]);
    Route::get('/signin',[\App\Http\Controllers\SiteController::class,"signin"]);
});





