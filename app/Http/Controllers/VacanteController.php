<?php

namespace App\Http\Controllers;
use App\Models\Vacante;
use App\Models\Area;

use Illuminate\Http\Request;

class VacanteController extends Controller
{
    public function listaVacantes()
    {
        $areas = Area::all('id', 'nombre');
        $vacantes = Vacante::with('area')
            ->where('nombre')
            ->get();
        return view('vacante.index')->with(['areas' => $areas,'vacantes' => $vacantes]);
    }

    public function crearVacante(Request $request)
    {
        $mensaje = 'success';
        try {
           
            $vacante = Vacante::create([
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
        return response()->json(['mensaje' => $mensaje,'vacante'=>$vacante]);
    }
    public  function eliminarVacante($id){
        $mensaje = 'success';
        $vacante = '';
        try {
            $vacante = Vacante::find($id);
            $vacante->delete();

        } catch (\Exception $e){
            $mensaje = 'errors';
            $vacante = $e->getMessage();
        }
        return response()->json(['mensaje' => $mensaje,'vacante'=>$vacante]);
    }

}
  

