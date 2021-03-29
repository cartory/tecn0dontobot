<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CitumController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\RecetumController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ConsultumController;
use App\Http\Controllers\OdontologoController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\EspecialidadController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('theme', function(Request $request) { 
    $user = User::find($request->id);
    $user->theme = $request->theme;
    $user->save();
    return response()->json(
        $user->save()
    );
});

Route::prefix('excel')->group(function() {
    Route::get('citas', [CitumController::class, 'export']);
    Route::get('agendas', [AgendaController::class, 'export']);
    Route::get('recetas', [RecetumController::class, 'export']);
    Route::get('pacientes', [PacienteController::class, 'export']);
    Route::get('consultas', [ConsultumController::class, 'export']);
    Route::get('odontologos', [OdontologoController::class, 'export']);
    Route::get('tratamientos', [TratamientoController::class, 'export']);
    Route::get('especialidades', [EspecialidadController::class, 'export']);
});