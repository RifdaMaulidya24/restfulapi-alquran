<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;

//Route::get('/', function () {
   // return view('welcome');
//});


Route::get('/', [QuranController::class, 'index']);
Route::get('/surah/{id}', [QuranController::class, 'show']);
Route::get('/juz/{id}', [QuranController::class, 'juz'])->name('juz.show');