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

Route::get('/orders', function () {
    return view('orders.index');
});


Route::get('/vehicles', function () {
    return view('vehicles.index');
});


Route::get('/customers', function () {
    return view('customers.index');
});
