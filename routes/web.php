<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/', function(){
    return view('welcome');
});
Auth::routes();
Route::get('/products', [ProductController::class, 'index'])->middleware('IsAdmin');
Route::get('/products/create', [ProductController::class, 'create'])->middleware('IsAdmin');
Route::post('/products', [ProductController::class, 'store'])->middleware('IsAdmin');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->middleware('IsAdmin');
Route::put('/products/{id}', [ProductController::class, 'update'])->middleware('IsAdmin');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->middleware('IsAdmin');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adminpage', [App\Http\Controllers\HomeController::class, 'adminPage'])->name('adminpage')->middleware('IsAdmin');
