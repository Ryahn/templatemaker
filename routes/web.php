<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\Admin\DashboardController;

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
})->name('homeIndex');

Route::get('/maker', [TemplateController::class, 'index'])->name('maker');
Route::get('/changelog', function() {
    return view('changelog.index');
})->name('changelog');

Route::post('/maker/store', [TemplateController::class, 'store'])->name('makerStore');
Route::get('/maker/{id}', [TemplateController::class, 'ajax'])->name('makerGet');

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.index')->middleware('is_admin');
Route::get('/admin/logs', [LogController::class, 'getIndex']);
Route::get('/admin/api/logs', [LogController::class, 'getLogs']);
Route::post('/admin/logs', [LogController::class, 'postDelete']);

