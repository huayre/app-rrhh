<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public  function listaAreas() {
        $areas = Area::orderBy('created_at','desc')->get();
        return view('areas.index')->with(['areas' => $areas]);
    }

    public function crearArea(Request $request)
    {
        $mensaje = 'success';
        try {
            $recurso = Area::create([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
            ]);
        } catch (\Exception $e) {
            $mensaje = 'errors';
            $recurso = $e->getMessage();
        }
        return response()->json(['mensaje' => $mensaje,'recurso'=>$recurso]);
    }

    public  function eliminarArea($id){
        $mensaje = 'success';
        $recurso = '';
        try {
            $area = Area::find($id);
            $area->delete();

        } catch (\Exception $e){
            $mensaje = 'errors';
            $recurso = $e->getMessage();
        }
        return response()->json(['mensaje' => $mensaje,'recurso'=>$recurso]);
    }
}
