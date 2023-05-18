<?php

use App\Models\Tags;
use App\Models\Languages;
use App\Models\OpSystems;
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
    $tags = Tags::all();
    $sexual = $tags->filter(function($tag) { return $tag->group=='sexual'; })->values();
    $assets = $tags->filter(function($tag) { return $tag->group=='assets'; })->values();
    $nonsexual = $tags->filter(function($tag) { return $tag->group=='nonsexual'; })->values();
    $technical = $tags->filter(function($tag) { return $tag->group=='technical'; })->values();
    $languages = Languages::all();
    $os = OpSystems::all();

    return view('template.index', compact('tags', 'sexual', 'assets', 'nonsexual', 'technical', 'languages', 'os'));
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
