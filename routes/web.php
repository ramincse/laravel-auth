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

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', 'App\Http\Controllers\AdminLoginController@showLoginForm') -> name('admin.login');
Route::get('admin-register', 'App\Http\Controllers\AdminRegisternController@showRegForm') -> name('admin.register');
Route::post('admin-register', 'App\Http\Controllers\AdminRegisternController@adminRegister') -> name('admin.register');
