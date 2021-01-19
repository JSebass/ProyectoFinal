<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FerreteriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FerreteriaController::class,'getIndex'] );

Route::get('nosotros/historia', [FerreteriaController::class,'showHistoria'] );

Route::get('nosotros/vision', [FerreteriaController::class,'showMision'] );

Route::get('nosotros/ubicacion', [FerreteriaController::class,'showUbicacion']);

Route::get('registro/registrar', [FerreteriaController::class,'showregistro']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
