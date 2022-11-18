<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombre' => 'Raul', 
            'apellido' => 'Pacheco', 
            'usuario' => 'raulin', 
            'password' => bcrypt('123'),
            'id_genero' => 1,
            'id_rol' => 1
        ]);
    }
}
