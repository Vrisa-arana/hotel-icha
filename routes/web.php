<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HotelController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/hotel', [HotelController::class, 'list'] );
Route::get('/fasilitas', [FasilitasController::class, 'list'] );
Route::get('/hotel/{id}', [FasilitasController::class, 'list_hotel'] );
Route::get('/fasilitas/{id}', [FasilitasController::class, 'detail'] );