<?php

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'nombre_rol' => 'Administrador'
        ]);

        Rol::create([
            'nombre_rol' => 'Operador'
        ]);
    }
}
