<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\AsistenciaPersona;
use App\Models\Persona;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public  function listaAsistencia()
    {
        $asistencia = Asistencia::all();
        $empleados = Persona::where('tipo_persona', 1)->get();
        return view('asistencia.index')->with(
            [
                'asistencia' => $asistencia,
                'empleados' => $empleados
            ]
        );
    }

    public function crearAsistencia(Request $request)
    {
        if (!isset($request->check) || !isset($request->dia)) {
            return back();
        }
        $asistencia = Asistencia::create([
            'dia' => isset($request->dia) ? $request->dia : date('Y-m-d')
        ]);
        foreach ($request->check as $value) {
            $asistencia->personas()->attach($value);
        }

        return redirect()->route('reporte');
    }
    public function reporteAsistencia()
    {
        $data = [];
        $asistencias = Asistencia::with(
            [
                'personas' => function ($query) {
                    $query->select('personas.id', 'personas.nombre', 'personas.apellido');
                }
            ]
        )
        ->select('asistencias.id', 'asistencias.dia')
        ->get();
        $listaPersonas = Persona::where('tipo_persona', 1)->get();
        return view('asistencia.reporte')->with(['asistencias' => $asistencias , 'listaPersonas' => $listaPersonas]);
    }
}
