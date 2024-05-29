<?php 

use App\Http\Controllers\api\KasController;
use App\Http\Controllers\api\KegiatanController;
use App\Http\Controllers\api\auth\LoginController;
use App\Http\Controllers\api\auth\RegistController;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Route;


Route::post('/register', [RegistController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/kegiatan',[KegiatanController::class,'readKegiatan']);
Route::post('/kegiatan', [KegiatanController::class, 'createKegiatan']);
Route::put('/kegiatan/{id_kegiatan}', [KegiatanController::class, 'updateKegiatan']);
Route::delete('/kegiatan/{id_kegiatan}', [KegiatanController::class, 'deleteKegiatan']);

Route::get('/saldo-kas', [KasController::class, 'readAllKas']);
Route::post('/saldo-kas', [KasController::class, 'createKas']);
Route::put('/saldo-kas/{id_kas}', [KasController::class, 'updateKas']);
Route::delete('/saldo-kas/{id_kas}', [KasController::class, 'deleteKas']);