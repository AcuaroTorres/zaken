<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo = new App\rrhh\Cargo();
        $cargo->name = 'Director';
        $cargo->save();

        $cargo = new App\rrhh\Cargo();
        $cargo->name = 'Gerente';
        $cargo->save();
    }
}
