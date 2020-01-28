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
Route::get('/',function(){
    return view('page.trang_chu');
});
Route::get('/',function(){
    return view('page.dau_bep');
});
Route::get('/',function(){
    return view('page.tin_tuc');
});
Route::get('/',function(){
    return view('page.tin_tuc1');
});
Route::get('/',function(){
    return view('page.tin_tuc2');
});
Route::get('/',function(){
    return view('page.tin_tuc3');
});