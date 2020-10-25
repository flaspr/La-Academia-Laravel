<?php

use App\Http\Controllers\MatriculationController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/matriculacion', [MatriculationController::class, 'index'])->name('matricula');
Route::post('/matriculacion', [MatriculationController::class, 'send'])->name('matricula.send');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'send'])->name('contacto.send');