<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ThemeController;

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

Route::name('theme.')->prefix('theme')->group(function () {
    Route::get('/', [ThemeController::class, 'index'])->name('index');
    Route::get('/forms', [ThemeController::class, 'forms'])->name('forms');
    Route::get('/alerts', [ThemeController::class, 'alerts'])->name('alerts');
    Route::get('/tables', [ThemeController::class, 'tables'])->name('tables');
    Route::get('/buttons', [ThemeController::class, 'buttons'])->name('buttons');
    Route::get('/example', [ThemeController::class, 'example'])->name('example');
});

Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
});
