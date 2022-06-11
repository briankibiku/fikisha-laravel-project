<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;

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

// Route::get('/', [LandingController::class,'index'])->name('landing');

Route::get('/', function () {
    return view('landing');
})->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\OrdersController::class, 'index'])->name('home');
Route::get('/customers', [App\Http\Controllers\CustomersController::class, 'index'])->name('customers');
Route::get('/create_customer', [App\Http\Controllers\CreateCustomersController::class, 'index'])->name('create_customer');
Route::post('/create_customer', [App\Http\Controllers\CreateCustomersController::class, 'create']);
Route::get('/delete_customer/{id}', [App\Http\Controllers\CreateCustomersController::class, 'delete']);
Route::get('/edit_customer/{id}', [App\Http\Controllers\CreateCustomersController::class, 'edit']);
Route::post('/edit_customer', [App\Http\Controllers\CreateCustomersController::class, 'update']);

//vehicles
Route::get('/on_transit_vehicles', [App\Http\Controllers\VehiclesController::class, 'on_transit'])->name('on_transit_vehicles');
Route::get('/loading_vehicles', [App\Http\Controllers\VehiclesController::class, 'loading'])->name('loading_vehicles');
Route::get('/available_vehicles', [App\Http\Controllers\VehiclesController::class, 'available'])->name('available_vehicles');
Route::get('/vehicles', [App\Http\Controllers\VehiclesController::class, 'index'])->name('vehicles');
Route::get('/create_vehicle', [App\Http\Controllers\CreateVehicleController::class, 'index'])->name('create_vehicle');
Route::post('/create_vehicle', [App\Http\Controllers\CreateVehicleController::class, 'create']);
Route::get('/delete_vehicle/{id}', [App\Http\Controllers\CreateVehicleController::class, 'delete']);
Route::get('/edit_vehicle/{id}', [App\Http\Controllers\CreateVehicleController::class, 'edit']);
Route::post('/edit_vehicle', [App\Http\Controllers\CreateVehicleController::class, 'update']);

// orders
Route::get('/orders', [App\Http\Controllers\OrdersController::class, 'index'])->name('orders');
Route::get('/pending_orders', [App\Http\Controllers\OrdersController::class, 'pending'])->name('pending_orders');
Route::get('/loading_orders', [App\Http\Controllers\OrdersController::class, 'loading'])->name('loading_orders');
Route::get('/delivered_orders', [App\Http\Controllers\OrdersController::class, 'delivered'])->name('delivered_orders');
Route::get('/dispatched_orders', [App\Http\Controllers\OrdersController::class, 'dispatched'])->name('dispatched_orders');
Route::get('/create_order', [App\Http\Controllers\CreateOrdersController::class, 'index'])->name('create_order');
Route::post('/create_order', [App\Http\Controllers\CreateOrdersController::class, 'create']);
Route::get('/allocate_order/{id}', [App\Http\Controllers\CreateOrdersController::class, 'allocate_order']);
Route::post('/allocate_order', [App\Http\Controllers\CreateOrdersController::class, 'update']);
