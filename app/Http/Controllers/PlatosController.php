<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Models\Persona;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlatosController extends Controller
{
    public  function listaPlatos() {
        $platos = Plato::orderBy('created_at','desc')->get();
        return view('platos.index')->with(['platos' => $platos]);
    }
    

    public function crearPlato(Request $request)
    {
        $mensaje = 'success';
        try {
            if ($request->file('imagen')) {
                $rutaRelativaImagen = $request->file('imagen')->store('public/imagenes/platos');
                $rutaRelativaImagen=Storage::url($rutaRelativaImagen);
                $rutaAbsolutaImagen=asset($rutaRelativaImagen);
                $recurso = Plato::create([
                    'nombre'        =>$request->nombre,
                    'descripcion'   =>$request->descripcion,
                    'precio'        =>$request->precio,
                    'imagen'        =>$rutaAbsolutaImagen,
                    'stock'         =>0
                ]);
            }
        } catch (\Exception $e) {
            $mensaje = 'errors';
            $recurso = $e->getMessage();
        }
        return response()->json(['mensaje' => $mensaje,'recurso'=>$recurso]);
    }
    public  function eliminarPlato($id){
        $mensaje = 'success';
        $recurso = '';
        try {
            $plato = Plato::find($id);
            $plato->delete();


        } catch (\Exception $e){
            $mensaje = 'errors';
            $recurso = $e->getMessage();
        }
        return response()->json(['mensaje' => $mensaje,'recurso'=>$recurso]);
    }




    public function paginaWeb() {
        $platos = Plato::orderBy('created_at','desc')->get();
        return view('web.index')->with(['platos' => $platos]);
    }

    //pedidos
    public function listaPedidos()
    {
        $persona = Persona::all('id', 'nombre');
        $pedido = Pedido::with('persona')
            
            ->orderBy('created_at','desc')
            ->get();
        return view('pedidos.index')->with(['persona' => $persona,'pedido' => $pedido]);
    }

}
