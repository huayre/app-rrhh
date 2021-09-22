<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonaController extends Controller
{
    public function listaEmpleados()
    {
        $areas = Area::all('id', 'nombre');
        $empleados = Persona::with('area')
            ->where('tipo_persona',1)
            ->orderBy('created_at','desc')
            ->get();
        return view('empleado.index')->with(['areas' => $areas,'empleados' => $empleados]);
    }

    public function crearEmpleado(Request $request)
    {
        $mensaje = 'success';
        try {
            if ($request->file('url_copia_dni')) {
                $ruta = $request->file('url_copia_dni')->store('public/PdfsDnis');
                $ruta = Storage::url($ruta);
                $ruta = asset($ruta);
            }
            $recurso = Persona::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'num_dni' => $request->num_dni,
                'direccion' => $request->direccion,
                'num_celular' => $request->num_celular,
                'correo' => $request->correo,
                'url_linkedin' => $request->url_linkedin,
                'url_copia_dni' => $ruta,
                'salario' => $request->salario,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'avatar' => '',
                'tipo_persona' => 1,
                'area_id' => $request->area_id,
            ]);
        } catch (\Exception $e) {
            $mensaje = 'errors';
            $recurso = $e->getMessage();
        }
        return response()->json(['mensaje' => $mensaje,'recurso'=>$recurso]);
    }
    public  function eliminarEmpleado($id){
        $mensaje = 'success';
        $recurso = '';
        try {
            $empleado = Persona::find($id);
            $empleado->delete();

        } catch (\Exception $e){
            $mensaje = 'errors';
            $recurso = $e->getMessage();
        }
        return response()->json(['mensaje' => $mensaje,'recurso'=>$recurso]);
    }

}
