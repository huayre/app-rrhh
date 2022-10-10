<?php

namespace Database\Seeders;

use App\Models\Pedido;
use App\Models\PedidoPlato;
use App\Models\Persona;
use App\Models\Plato;
use App\Models\User;
use App\Models\Vacante;
use Database\Factories\PersonaFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                // AreaSeeder::class,
                // AreaSeeder::class,
                // UserSeeder::class,
                // EmpleadoSeeder::class,
                AsistenciaSeeder::class
                //            PlatoSeeder::class,
                //             PedidoPlatoSeeder::class
            ]
        );
        // Persona::factory()->count(50)->create();
        // Vacante::factory()->count(20)->create();
        //Pedido::factory()->count(3000)->create();

    }
}
