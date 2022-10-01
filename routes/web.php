<?php

use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class,'index']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/usuarios',[UserController::class, 'index'])->name('usuarios');

Route::get('/usuarios/crear',[UserController::class, 'create'])->name('usuarios.crear');
Route::post('/usuarios/crear',[UserController::class, 'store'])->name('usuarios.store');


Route::get('/comunidades',[ComunidadController::class, 'index'])->name('comunidades');
Route::get('/comunidad/crear',[ComunidadController::class, 'create'])->name('comunidad.crear');
Route::post('/comunidad/crear',[ComunidadController::class, 'store'])->name('comunidad.store');

Route::get('/pacientes',[PacienteController::class, 'index'])->name('pacientes');
Route::get('/paciente/crear',[PacienteController::class, 'create'])->name('paciente.crear');
Route::post('/paciente/crear',[PacienteController::class, 'store'])->name('paciente.store');

Route::get('/medicamentos',[MedicamentoController::class, 'index'])->name('medicamentos');
Route::get('/medicamento/crear',[MedicamentoController::class, 'create'])->name('medicamento.crear');
Route::post('/medicamento/crear',[MedicamentoController::class, 'store'])->name('medicamento.store');


