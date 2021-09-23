<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio()
    {
        $numeroEmpleados = Persona::where('tipo_persona', 1)->count();
        return view('inicio')->with(['numeroEmpleados' => $numeroEmpleados]);
    }
}
