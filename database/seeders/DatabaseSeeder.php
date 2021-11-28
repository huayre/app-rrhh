<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\Plato;
use Database\Factories\PersonaFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(
//        AreaSeeder::class
//        );
        //Persona::factory()->count(50)->create();
        //Persona::factory()->count(50)->create();
        Plato::factory()->count(20)->create();
        //\App\Models\User::factory(1)->create();
    }
}
