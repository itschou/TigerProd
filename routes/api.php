<?php

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

Route::get('/sendemails', [App\Http\Controllers\HomeController::class, 'sendmassmail'])->name('sendemails');

Route::get('/test', function(){
    return 'test1';
});

Route::get('/test2', [App\Http\Controllers\SessionController::class, 'show']);
Route::post('/test3', [App\Http\Controllers\SessionController::class, 'create']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
