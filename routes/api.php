<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerateSheetController;
use App\Http\Controllers\RamdomNumberController;
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

Route::middleware(['middleware' => 'api'])->group(function () {
    Route::get('/sheet', [GenerateSheetController::class, 'index']);
    Route::get('/number', [RandomNumberController::class, 'index']);
  });

  
