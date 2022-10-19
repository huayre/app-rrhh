<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Persona;
use App\Models\Vacante;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio()
    {
        $numeroEmpleados = Persona::where('tipo_persona', 1)->count();
        $empleados = Persona::where('tipo_persona', 1)->limit(5)->get();
        $numeroPostulantes = Persona::where('tipo_persona', 2)->count();
        $areas = Area::all('nombre');
        // $vacantes = Vacante::all('nombre');
        $vacantes = Vacante::withCount('postulantes')->limit(5)->get();
        return view('inicio')->with(
            [
                'numeroEmpleados' => $numeroEmpleados,
                'numeroPostulantes' => $numeroPostulantes,
                'areas' => $areas,
                'empleados' => $empleados,
                'vacantes' => $vacantes
            ]);
    }
}
