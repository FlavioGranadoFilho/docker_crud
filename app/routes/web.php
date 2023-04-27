<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowsController;

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

Route::get('/', [ShowsController::class, 'index'])->name('index');
Route::get('/register', [ShowsController::class, 'create'])->name('create');
Route::post('', [ShowsController::class, 'store'])->name('store');
Route::get('{show}', [ShowsController::class, 'edit'])->name('edit');
Route::put('edit/{show}', [ShowsController::class, 'update'])->name('update');
Route::delete('{show}', [ShowsController::class, 'destroy'])->name('destroy');