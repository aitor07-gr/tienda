<?php

use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TiendaController::class, 'portada'])->name('portada');

Route::redirect('/inicio', '/');
Route::view('/acerca', 'acerca')->name('acerca');
Route::view('/envios', 'envios')->name('envios');

Route::get('/productos', function () {
    $productos = [
        1 => ['nombre' => 'Teclado', 'precio' => 25],
        2 => ['nombre' => 'Ratón', 'precio' => 12],
        3 => ['nombre' => 'Monitor', 'precio' => 140],
    ];

    return view('productos', ['productos' => $productos]);
})->name('productos');

Route::get('/producto/{id}', function (string $id) {
    $productos = [
        1 => ['nombre' => 'Teclado', 'precio' => 25],
        2 => ['nombre' => 'Ratón', 'precio' => 12],
        3 => ['nombre' => 'Monitor', 'precio' => 140],
    ];

    if (!isset($productos[$id])) {
        abort(404);
    }

    return view('producto', ['producto' => $productos[$id]]);
})->whereNumber('id')->name('producto');

Route::get('/clientes', function () {
    return 'Listado de clientes';
})->name('clientes');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', function () {
    return 'Mensaje recibido';
})->name('contacto.enviar');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return 'Panel de administración';
    })->name('panel');

    Route::get('/productos', function () {
        return 'Administrar productos';
    })->name('productos');
});
Route::get('/productos/pagina/{numero?}', function (string $numero = '1') {
    return view('pagina', ['numero' => $numero]);
})->whereNumber('numero')->name('productos.pagina');

Route::fallback(function () {
    return 'Esa página no existe en la Tienda';
});
Route::get('/categoria/{tipo}', function (string $tipo) {
    return view('categoria', ['tipo' => $tipo]);
})->whereIn('tipo', ['teclados', 'ratones', 'monitores'])->name('categoria');