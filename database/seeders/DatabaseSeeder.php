<?php

namespace Database\Seeders;

use App\Models\Pedido;
use App\Models\PedidoPlato;
use App\Models\Persona;
use App\Models\Plato;
use App\Models\User;
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
        //1
        $this->call(
        [
//            AreaSeeder::class,
//            UserSeeder::class,
//            PlatoSeeder::class,
              PedidoPlatoSeeder::class
        ]);
        //Persona::factory()->count(1000)->create();
        //Pedido::factory()->count(3000)->create();
        //2

    }
}
