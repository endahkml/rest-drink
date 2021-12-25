<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KordrinkController;
use App\Http\Controllers\IdController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('kordrink',[KordrinkController::class,'index']);
Route::get('idkordrink', [IdController::class, 'getId']);
Route::post('kordrink',[KordrinkController::class,'create']);
Route::put('kordrink',[KordrinkController::class,'update']);
Route::delete('kordrink',[KordrinkController::class,'delete']);
