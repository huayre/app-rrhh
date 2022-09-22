<?php

namespace Database\Seeders;

use App\Models\Asistencia;
use Illuminate\Database\Seeder;

class AsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 2; $i++) { 
            $dateInit = strtotime('2018-01-01');
            $dateEnd = strtotime(date('Y-m-d'));
            $asistencia = Asistencia::create([
                'dia' => date('Y-m-d', mt_rand($dateInit, $dateEnd))
            ]);
            for ($i=1; $i <= mt_rand(50, 100) ; $i++) { 
                $asistencia->personas()->attach(mt_rand(1, 100));    
            }
        }
    }
}
