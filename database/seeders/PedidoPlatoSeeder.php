<?php

namespace Database\Seeders;

use App\Models\PedidoPlato;
use Illuminate\Database\Seeder;

class PedidoPlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i = 1; $i <= 50 ;$i++) {
           $cantidad = rand(1, 5);
           PedidoPlato::create([
               'pedido_id' =>$i++,
               'plato_id'=>rand(1, 10),
               'cantidad'=>$cantidad,
               'precio' =>$cantidad * 12
           ]);
       }
        // for ($i = 0; $i <= 3000 ;$i++) {
        //     $cantidad = rand(1, 5);
        //     PedidoPlato::create([
        //         'pedido_id' =>$i++,
        //         'plato_id'=>rand(1, 10),
        //         'cantidad'=>$cantidad,
        //         'precio' =>$cantidad * 12
        //     ]);
        // }
    }
}
