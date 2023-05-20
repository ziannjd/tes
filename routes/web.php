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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('resto/home',
[App\Http\Controllers\resto\HomeController::class, 'index'])
->middleware('can:isResto');
Route::get('kurir/home',
[App\Http\Controllers\kurir\HomeController::class, 'index'])
->middleware('can:isKurir');
Route::get('konsumen/home',
[App\Http\Controllers\konsumen\HomeController::class, 'index'])
->middleware('can:isKonsumen');
Route::get('resto/user',
[App\Http\Controllers\resto\UserController::class, 'index'])
->middleware('can:isResto');
Route::get('resto/user/create',
[App\Http\Controllers\resto\UserController::class, 'create'])
->middleware('can:isResto');
Route::post('resto/user/store',
[App\Http\Controllers\resto\UserController::class, 'store'])
->middleware('can:isResto');
Route::get('resto/user/edit/{id}',
[App\Http\Controllers\resto\UserController::class, 'edit'])
->middleware('can:isResto');
Route::post('resto/user/update/{id}',
[App\Http\Controllers\resto\UserController::class, 'update'])
->middleware('can:isResto');
Route::post('resto/user/destroy/{id}',
[App\Http\Controllers\resto\UserController::class, 'destroy'])
->middleware('can:isResto');
Route::get('resto/pizza', [App\Http\Controllers\resto\PizzaController::class,
'index'])->middleware('can:isResto');
Route::get('resto/pizza/create', [App\Http\Controllers\resto\PizzaController::class,
'create'])->middleware('can:isResto');
Route::post('resto/pizza/store', [App\Http\Controllers\resto\PizzaController::class,
'store'])->middleware('can:isResto');
Route::get('resto/pizza/edit/{id}',
[App\Http\Controllers\resto\PizzaController::class,
'edit'])->middleware('can:isResto');
Route::post('resto/pizza/update/{id}',
[App\Http\Controllers\resto\PizzaController::class,
'update'])->middleware('can:isResto');
Route::post('resto/pizza/destroy/{id}',
[App\Http\Controllers\resto\PizzaController::class,
'destroy'])->middleware('can:isResto');