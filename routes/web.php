<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});











// services route

Route::get('web-design',function () {
    return view('service.web-design');
});

Route::get('seo-services',function () {
    return view('service.seo-services');
});

Route::get('mobile-app-development',function () {
    return view('service.mobile-app-development');
});

// end of services route
