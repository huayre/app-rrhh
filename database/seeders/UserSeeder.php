<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Ror Carlos Huayre Bujaico',
                'email' => 'huayre@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'), // password
                'remember_token' => Str::random(10),
            ]
        );
    }
}
