<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidenceController;
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
    return view('Incidencias.menu');
});
Route::get('/lista', [IncidenceController::class, 'index'])->name('listado');
//Route::get('/lista', [IncidenceController::class, 'index'])->name('listado');
Route::get('/incidences/redNueva', [IncidenceController::class, 'redNueva'])->name('redNueva');
Route::get('/incidences/showSol/{id}/{i_id}', [IncidenceController::class, 'showSol'])->name('showSol');
Route::resource('incidences', IncidenceController::class);

//Route::view('Incidencias.nueva', 'nueva');
