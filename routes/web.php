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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_first', function () {
    return view('sula');
});

Route::get('/test_last', function () {
    return view('kair');
});

Route::get('/test_id', function () {
    return view('num');
});

Route::get('/post/{id}/{age}', function ($id,$age) {
    return "Your id is: ".$id." Your age is: ".$age;
});

