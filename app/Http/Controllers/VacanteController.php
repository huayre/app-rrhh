<?php

namespace App\Http\Controllers;
use App\Models\Vacante;
use App\Models\Area;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VacanteController extends Controller
{
    public function listaVacantes()
    {
        $areas = Area::all('id', 'nombre');
        $vacantes = Vacante::with('area')



            ->get();
        return view('vacante.index')->with(['vacantes' => $vacantes,'areas' => $areas]);
    }

    public function crearVacante(Request $request)
    {
        $mensaje = 'success';
        try {


            $recurso = Vacante::create([

                'nombre' => $request->nombre,
                'cantidad' => $request->cantidad,
                'fecha_limite' => $request->fecha_limite,
                'requisitos' => $request->requisitos,
                'responsabilidades' => $request->responsabilidades,

                'beneficios' => $request->beneficios,

                'tipo_puesto' => $request->tipo_puesto,
                'area_id' => $request->area_id,
            ]);
        } catch (\Exception $e) {
            $mensaje = 'errors';
            $recurso = $e->getMessage();
        }

        return response()->json(['mensaje' => $mensaje,'recurso'=>$recurso]);
    }
    public  function eliminarVacante($id){
        $mensaje = 'success';
        $recurso = '';

        try {
            $vacante = Vacante::find($id);
            $vacante->delete();

        } catch (\Exception $e){
            $mensaje = 'errors';

            $recurso = $e->getMessage();
        }
        return response()->json(['mensaje' => $mensaje,'recurso'=>$recurso]);

    }
    public function listaVacantesTrabajo(){
        $areas = Area::all('id', 'nombre');
        $vacantes = Vacante::with('area')
            ->get();
        return view('trabajo.index')->with(['vacantes' => $vacantes,'areas' => $areas]);
    }

}


