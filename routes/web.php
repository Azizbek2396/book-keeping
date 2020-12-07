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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [\App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');

Route::get('/expense', [\App\Http\Controllers\ExpenseController::class, 'index'])->name('expense.index');
Route::get('/expense/create', [\App\Http\Controllers\ExpenseController::class, 'create'])->name('expense.create');
Route::post('/expense', [\App\Http\Controllers\ExpenseController::class, 'store'])->name('expense.store');
