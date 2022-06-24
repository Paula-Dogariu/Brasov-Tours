<?php

use App\Http\Controllers\ProjectController;
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

Route::get('/', [ProjectController::class, 'getCars'])->name('home');

Route::post('/bookBike', [ProjectController::class, 'bookBike'])->name('bookBike');

Route::post('/bookNow', [ProjectController::class, 'bookNow'])->name('bookNow');