<?php

use App\Http\Controllers\AnasayfaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create someth
|
*/

Route::get('/', [AnasayfaController::class,'index'] )->name('anasayfa');
