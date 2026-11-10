<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;

Route::get('/', [TiendaController::class, 'portada']);

Route::get('/hola', function () {
    return 'Hola desde la Tienda';
});

Route::get('/hola-vista', function () {
    return view('hola');
});

Route::get('/bienvenida/{nombre}', function (string $nombre) {
    return view('bienvenida', ['nombre' => $nombre]);
});
Route::get('/lista', function () {
    $productos = ['Teclado', 'Ratón', 'Monitor'];
    return view('lista', ['productos' => $productos]);
});
Route::get('/contacto', function () {
    return view('contacto');
});
use App\Http\Controllers\HorarioController;

Route::get('/horario', [HorarioController::class, 'index']);
Route::get('/producto/{numero}', [TiendaController::class, 'producto']);