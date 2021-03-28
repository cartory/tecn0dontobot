<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CitumController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\RecetumController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ConsultumController;
use App\Http\Controllers\OdontologoController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\EspecialidadController;

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

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/citas/all', [CitumController::class, 'getAll']);

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->group(function() {
        Route::get('recet/createFromConsulta/{consultaSeleccionadaId}', [RecetumController::class, 'createFromConsulta'])->name('recetacreateFromConsulta');
        Route::get('recet/verFromConsulta/{consultaSeleccionadaId}', [RecetumController::class, 'verFromConsulta'])->name('receta.showDeConsulta');

        Route::resource('citas', CitumController::class);
        Route::resource('receta', RecetumController::class);
        Route::resource('agendas', AgendaController::class);
        Route::resource('usuarios', UsuarioController::class);
        Route::resource('consulta', ConsultumController::class);
        Route::resource('pacientes', PacienteController::class);
        Route::resource('odontologos', OdontologoController::class);
        Route::resource('tratamientos', TratamientoController::class);
        Route::resource('especialidades', EspecialidadController::class);
        Route::get('menuEditar', function(){
            return  view('menu.edit');
        });
    });
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
