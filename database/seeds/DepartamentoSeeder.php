<?php

use Illuminate\Database\Seeder;
use App\Models\Departamentos;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamentos::create([
            'departamento' => 'Alta Verapaz'
        ]);

        Departamentos::create([
            'departamento' => 'Baja Verapaz'
        ]);

        Departamentos::create([
            'departamento' => 'Chimaltenago'
        ]);

        Departamentos::create([
            'departamento' => 'Chiquimula'
        ]);

        Departamentos::create([
            'departamento' => 'Guatemala'
        ]);

        Departamentos::create([
            'departamento' => 'El Progreso'
        ]);

        Departamentos::create([
            'departamento' => 'Escuintla'
        ]);

        Departamentos::create([
            'departamento' => 'Huehuetenango'
        ]);

        Departamentos::create([
            'departamento' => 'Izabal'
        ]);

        Departamentos::create([
            'departamento' => 'Jalapa'
        ]);

        Departamentos::create([
            'departamento' => 'Jutiapa'
        ]);


        Departamentos::create([
            'departamento' => 'PetÃ©n'
        ]);

        Departamentos::create([
            'departamento' => 'Quetzaltenango'
        ]);

        Departamentos::create([
            'departamento' => 'Quiché'
        ]);

        Departamentos::create([
            'departamento' => 'Retalhuleu'
        ]);

        Departamentos::create([
            'departamento' => 'Sacatepequez'
        ]);

        Departamentos::create([
            'departamento' => 'San Marcos'
        ]);

        Departamentos::create([
            'departamento' => 'Santa Rosa'
        ]);

        Departamentos::create([
            'departamento' => 'Sololá'
        ]);

        Departamentos::create([
            'departamento' => 'Suchitepequez'
        ]);

        Departamentos::create([
            'departamento' => 'Totonicapán'
        ]);

        Departamentos::create([
            'departamento' => 'Zacapa'
        ]);
    }
}