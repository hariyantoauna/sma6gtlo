<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CekController::class, 'index']);
Route::post('/cek', [CekController::class, 'cek']);
Route::get('/hasil/{siswa:kode}', [CekController::class, 'hasil']);