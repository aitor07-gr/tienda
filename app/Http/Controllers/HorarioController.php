<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        $horario = [
            'Lunes' => '9:00 a 20:00',
            'Martes' => '9:00 a 20:00',
            'Miércoles' => '9:00 a 20:00',
        ];

        return view('horario', ['horario' => $horario]);
    }
}