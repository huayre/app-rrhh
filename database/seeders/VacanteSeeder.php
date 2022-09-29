<?php

namespace Database\Seeders;

use App\Models\Vacante;
use Illuminate\Database\Seeder;

class VacanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vacante::factory()->count(10)->create();
    }
}
