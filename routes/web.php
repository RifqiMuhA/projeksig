<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersHimadaMapController;

Route::get('/', function () {
    return view('pages/welcome');
})->name('welcome');
Route::get('/about',function(){
    return view('pages/about');
})->name('about');
Route::get('/map', [UsersHimadaMapController::class, 'index'])->name('map');
Route::get('/map/{namaHimada}', [UsersHimadaMapController::class, 'detailHimada'])->name('map.detail');