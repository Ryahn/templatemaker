<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DatabaseTableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('jwt.verify')->group(function() {
    Route::get('/dashboard', function() {
        return response()->json(['message' => 'Welcome to dashboard'], 200);
    });
    Route::get('/user', [AuthController::class, 'getUser']);
    Route::post('/table/view/bbcode/save', [DatabaseTableController::class, 'saveBBCode'])->name('api.save.bbcode');
    Route::get('/table/recent', [DatabaseTableController::class, 'recentIndex'])->name('api.recent.index');
    Route::get('/table/view/bbcode/{id}', [DatabaseTableController::class, 'viewBBCode'])->name('api.view.bbcode');
    
});
