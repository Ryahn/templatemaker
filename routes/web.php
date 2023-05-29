<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\TemplateController;
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
})->name('homeIndex');

Route::get('/maker', [TemplateController::class, 'index'])->name('maker');
Route::get('/changelog', function() {
    return view('changelog.index');
})->name('changelog');

Route::post('/maker/store', [TemplateController::class, 'store'])->name('makerStore');
Route::get('/maker/{id}', [TemplateController::class, 'ajax'])->name('makerGet');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.index')->middleware('is_admin');

