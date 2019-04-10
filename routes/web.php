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
    return view('صفحه اصلی');
});
Route::get('/صفحه اصلی', function () {
    return view('صفحه اصلی');
    return redirect('/');
});
Route::get('/تماس-با ما ', function () {
    return view('تماس-با ما');
});
Route::get('/قالب رایگان ', function () {
    return view('قالب رایگان');
});
Route::get('/تیم-ما ', function () {
    return view('تیم-ما');
});
Route::get('/free/shops/shop1/{id?}', function () {
    return view('free/shops/shop1/index');
});
