<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticWebController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CvController;

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
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('frontend.panel');
})->middleware(['auth'])->name('/dashboard');


//url statics webpages
Route::get('phpreact', [StaticWebController::class, "phpreact"])->name('phpreact');
Route::get('laravel',  [StaticWebController::class, "laravel"])->name('laravel');
Route::get('index',    [StaticWebController::class, "index"])->name('home');
Route::get('symfony',  [StaticWebController::class, "symfony"])->name('symfony');
Route::get('swoole',   [StaticWebController::class, "swoole"])->name('swoole');
Route::get('homepage',   [StaticWebController::class, "get_into"])->name('homepage');

//url for aplication
Route::resource('user', AppController::class)->middleware('auth');

//curriculum
Route::resource('curriculum', CvController::class)->middleware('auth');

