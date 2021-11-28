<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $areas =  [
                    [
                      'nombre' => 'VENTAS',
                      'descripcion' => 'Area del éxito de la empresa xd hh'
                    ],
                    [
                        'nombre' => 'COMPRAS',
                        'descripcion' => 'Area del éxito de la empresa xd'
                    ],
                    [
                        'nombre' => 'COCINA',
                        'descripcion' => 'Area del éxito de la empresa xd'
                    ],
                    [
                        'nombre' => 'ATENCIÓN',
                        'descripcion' => 'Area del éxito de la empresa xd'
                    ],
                    [
                        'nombre' => 'RECURSO HUMANOS',
                        'descripcion' => 'Area del éxito de la empresa xd'
                    ],
                    [
                        'nombre' => 'LIMPIEZA',
                        'descripcion' => 'Area del éxito de la empresa xd'
                    ],
                    [
                        'nombre' => 'ADMINISTRACIÓN',
                        'descripcion' => 'Area del éxito de la empresa xd'
                    ]
          ];

       foreach ($areas as $area) {
           Area::create([
               'nombre' => $area['nombre'],
               'descripcion' => $area['descripcion'],
           ]);
       }
    }
}
