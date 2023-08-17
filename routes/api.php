<?php

use App\Http\Controllers\API\JadwalController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/register', [AuthController::class, 'Register']);
Route::post('/auth/login', [AuthController::class, 'Login']);

Route::get('/auth/siswa', [AuthController::class, 'jadwal']);

Route::post('/auth/store', [AuthController::class, 'store']);
Route::put('/auth/jadwal/{id}', [AuthController::class, 'update']);
Route::delete('/auth/jadwal/{id}', [AuthController::class, 'destroy']);

Route::post('/jadwal/edit', [JadwalController::class, 'update']);
