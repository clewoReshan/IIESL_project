<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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


Route::get('admin/users', function () {
    return view('admin/users');
});

Route::get('admin/form', function () {
    return view('admin/form');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/admin/log', 'admin_log_index')->name('admin_log_index');
    Route::post('/admin/log', 'admin_log')->name('admin_log');
    Route::get('/admin/reg', 'admin_reg_index')->name('admin_reg_index');
    Route::post('/admin/reg', 'admin_reg')->name('admin_reg');

});

// Route::controller(AdminController::class)->middleware('adminIsAuth')->group(function () {
//     Route::get('/admin/dashboard', 'admin_dashboard')->name('admin_dashboard');
// });

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'admin_dashboard')->name('admin_dashboard');
   
});


