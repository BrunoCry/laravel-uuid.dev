<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PageController;

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

Route::get('/', [PageController::class, 'list'])->name('page.index');
Route::get('/generate', [PageController::class, 'generate'])->name('page.generate');
Route::get('/retrieve', [PageController::class, 'retrieve'])->name('page.retrieve');