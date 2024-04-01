<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiteController;
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
});

Route::get('/propos', function () {
    return view('propos');
})->name('propos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sendemails', [App\Http\Controllers\HomeController::class, 'sendmassmail'])->name('sendemails');
Route::post('/sentmassmail', [HomeController::class, 'sentmassmail'])->name('sentmassmail');


Route::post('/newsession', [SessionController::class, 'create'])->name('newsession');
Route::post('/archiversession', [SessionController::class, 'archiver'])->name('archiversession');
Route::post('/supprimersession', [SessionController::class, 'destroy'])->name('supprimersession');

Route::post('toggle', [SiteController::class, 'update'])->name('toggle');
