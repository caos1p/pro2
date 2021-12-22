<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdministradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
         'name'=>'alex',
         'email'=>'alex@gmail.com',
         'password'=>bcrypt('1234'),
         'tipo'=>'administrador',
         'rol_id'=>'8',

        ]);
    }
}
