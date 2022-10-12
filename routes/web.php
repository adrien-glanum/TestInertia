<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


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
    return inertia('Pages/Home');
});

Route::get('/home',function(){
    return Inertia::render('Home');
});

Route::get('/dans_ta_geule_react',function(){
    return Inertia::render('danstageulereact');
});

