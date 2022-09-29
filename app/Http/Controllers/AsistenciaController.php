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
        $asistencia = Asistencia::orderBy('dia','asc')->get(['id', 'dia']);
        $empleados = Persona::where('tipo_persona', 1)->get(['id', 'nombre', 'apellido']);
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
        $asistencias = Asistencia::with(
            [
                'personas' => function ($query) {
                    $query->select('personas.id', 'personas.nombre', 'personas.apellido');
                }
            ]
        )
        ->select('asistencias.id', 'asistencias.dia')
        ->orderBy('asistencias.dia','asc')
        ->limit(20)->get();
        $listaPersonas = Persona::where('tipo_persona', 1)->get();
        return view('asistencia.reporte')->with(['asistencias' => $asistencias , 'listaPersonas' => $listaPersonas]);
    }
}
