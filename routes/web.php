<?php

use App\Http\Controllers\InformeController;
use App\Http\Controllers\ValvulaController;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [InformeController::class, 'index']);
Route::get('/informe/crear', [InformeController::class, 'create']);
Route::post('/informes', [InformeController::class, 'store']);

Route::get('/valvula/crear', [ValvulaController::class, 'create']);
Route::post('/valvulas', [ValvulaController::class, 'store']);
Route::get('/valvula/{valvula:id}', [ValvulaController::class, 'show']);

Route::get('/api/empresas', function (Request $request) {
    return Empresa::where('nombre', 'like', '%' . $request->query('query') . '%')->get();
});