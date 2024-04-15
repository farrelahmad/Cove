<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;

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

Route::get('customer', [CustomerController::class, 'index']);

Route::get('customer/create', [CustomerController::class, 'create']);

Route::post('customer', [CustomerController::class, 'store']);

Route::delete('customer/{id}', [CustomerController::class, 'destroy']);

Route::get('customer/{id}/edit', [CustomerController::class, 'edit']);

Route::patch('customer/{id}', [CustomerController::class, 'update']);


Route::get('dashboard', [DashboardController::class, 'index']);

