<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function portada()
    {
        $productos = [
            ['nombre' => 'Teclado', 'precio' => 25],
            ['nombre' => 'Ratón', 'precio' => 12],
            ['nombre' => 'Monitor', 'precio' => 140],
        ];

        return view('portada', ['productos' => $productos]);
    }

    public function producto($numero)
    {
        $productos = [
            ['nombre' => 'Teclado', 'precio' => 25],
            ['nombre' => 'Ratón', 'precio' => 12],
            ['nombre' => 'Monitor', 'precio' => 140],
        ];

        return view('producto', [
            'productos' => $productos,
            'numero' => $numero
        ]);
    }
}