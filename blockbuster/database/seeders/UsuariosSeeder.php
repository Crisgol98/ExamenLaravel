<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $nUsuarios = 10;
        for ($i = 0; $i < $nUsuarios; $i++) {
            $usuario = new Usuario();
            $usuario->nombre = $faker->firstName;
            $usuario->email = $faker->email;
            $usuario->save();
        }
    }
}
