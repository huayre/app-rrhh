<?php

namespace App\Http\Controllers;

use App\Models\PedidoPlato;
use App\Models\Plato;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function reportePlatos() {
        $platos = Plato::all();
        $detallePedidos = PedidoPlato::all();
        $reportePlatos = [];
        foreach ($platos as $plato) {
            $cantidadPlatos = 0;
            foreach ($detallePedidos as $detallePedido)
            {
               if ($plato->id == $detallePedido->plato_id) {
                   $cantidadPlatos = $cantidadPlatos + 1;
               }
            }
            $item = ['nombre' => $plato->nombre , 'cantidad' =>$cantidadPlatos];
            array_push($reportePlatos,$item);

        }
        return view('reportes.platos')->with(['reportePlatos'=>$reportePlatos]);
    }

    public function reportePedidos() {
        $platos = Plato::all();
        $detallePedidos = PedidoPlato::all();
        $reportePlatos = [];
        foreach ($platos as $plato) {
            $cantidadPlatos = 0;
            foreach ($detallePedidos as $detallePedido)
            {
                if ($plato->id == $detallePedido->plato_id) {
                    $cantidadPlatos = $cantidadPlatos + 1;
                }
            }
            $item = ['nombre' => $plato->nombre , 'cantidad' =>$cantidadPlatos];
            array_push($reportePlatos,$item);

        }
        return view('reportes.pedidos')->with(['reportePlatos'=>$reportePlatos]);
    }
}
