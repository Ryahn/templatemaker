<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/changelog', function() {
    return view('changelog.index');
})->name('changelog');

Route::get('/help', function() {
    return view('help.index');
})->name('help');

Route::prefix('/maker')->group(function () {
    Route::get('/', [TemplateController::class, 'index'])->name('maker');
    Route::post('/store', [TemplateController::class, 'store'])->name('makerStore');
    Route::get('/{id}', [TemplateController::class, 'ajax'])->name('makerGet');
    Route::get('/edit/{id}', [TemplateController::class, 'edit'])->name('makerEdit');
});

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::middleware('auth')->group(function() {
    Route::middleware('is_admin')->prefix('admin')->group(function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.index')->middleware('is_admin');
        Route::get('/logs', [LogController::class, 'getIndex']);
        Route::get('/api/logs', [LogController::class, 'getLogs']);
        Route::post('/logs', [LogController::class, 'postDelete']);
    });
});

Route::post('/gitupdate', function() {
    $command = Artisan::call('git:update');
    if(!$command) return response()->json(['msg' => 'Pull Successful', 'status' => 200]);
    return response()->json(['msg' => $command, 'status' => 409]);
});