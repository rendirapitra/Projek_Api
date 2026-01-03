<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FakultasController;
use App\Http\Controllers\Api\ProdiController;
use App\Http\Controllers\Api\DosenController;
use App\Http\Controllers\Api\MahasiswaController;

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

route::get('/fakultas',[FakultasController::class, 'index']);
route::post('/fakultas',[FakultasController::class, 'store']);
route::get('/prodi',[ProdiController::class, 'index']);
route::post('/prodi',[ProdiController::class, 'store']);
route::get('/dosen',[DosenController::class, 'index']);
route::get('/mahasiswa',[MahasiswaController::class, 'index']);