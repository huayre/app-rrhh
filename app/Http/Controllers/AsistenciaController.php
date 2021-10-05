<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\AsistenciaPersona;
use App\Models\Persona;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public  function listaAsistencia(){
        $asistencia = Asistencia::all();
        $empleados = Persona::where('tipo_persona',1)->get();
        return view('asistencia.index')->with(
            ['asistencia'=>$asistencia,
            'empleados'=>$empleados]
        );
    }

    public function crearAsistencia(Request $request){
        $asistencia = Asistencia::create([
            'dia' => isset($request->dia) ? $request->dia : date('Y-m-d')
        ]);
        $total = count($request->check);
        for ($i=0;$i<$total;$i++) {
            AsistenciaPersona::create([
                'persona_id'=>$request->check[$i],
                'asistencia_id'=>$asistencia->id,
            ]);
        }

        return redirect()->route('reporte');

    }
    public function reporteAsistencia(){
        $asistencias = Asistencia::all();
        $empleados = Persona::where('tipo_persona',1)->get();
        $asistenciaPersona = AsistenciaPersona::all();
        return view('asistencia.reporte')->with(
            [
                'asistencia'=>$asistencias,
                'asistencia1'=>$asistencias,
                'empleados'=>$empleados,
                'asistenciaPersona'=>$asistenciaPersona
            ]
        );
    }
}
