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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('transactions');
Route::get('transaction/{id}', [App\Http\Controllers\TransactionController::class, 'show']);
Route::post('transaction', [App\Http\Controllers\TransactionController::class, 'store']);
Route::put('transaction/{id}', [App\Http\Controllers\TransactionController::class, 'update']);
Route::delete('transaction/{id}', [App\Http\Controllers\TransactionController::class, 'destroy']);
