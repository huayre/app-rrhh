<?php

namespace App\Http\Controllers;
use App\Models\Vacante;
use App\Models\Funcion;
use App\Models\Area;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FuncionController extends Controller
{
    public function listaFunciones()
    {
        $funciones = Funcion::all('id', 'nombre');
       
        return view('funciones.index')->with(['funciones' => $funciones]);
    }

    public function crearFuncion(Request $request)
    {
        $mensaje = 'success';
        try {

           
            $recurso = Funcion::create([

                'nombre' => $request->nombre,
                
            ]);
        } catch (\Exception $e) {
            $mensaje = 'errors';
            $recurso = $e->getMessage();
        }

        return response()->json(['mensaje' => $mensaje,'recurso'=>$recurso]);
    }
    public  function eliminarFuncion($id){
        $mensaje = 'success';
        $recurso = '';

        try {
            $funcion = Funcion::find($id);
            $funcion->delete();

        } catch (\Exception $e){
            $mensaje = 'errors';

            $recurso = $e->getMessage();
        }
        return response()->json(['mensaje' => $mensaje,'recurso'=>$recurso]);

    }

}
  

