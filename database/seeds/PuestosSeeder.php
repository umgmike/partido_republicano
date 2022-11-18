<?php

use Illuminate\Database\Seeder;
use App\Models\Puestos;

class PuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Puestos::create([
            'puesto' => 'Secretario Municipal'
        ]);
    }
}
