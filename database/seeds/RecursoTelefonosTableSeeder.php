<?php

use Illuminate\Database\Seeder;

class RecursoTelefonosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telefono = new App\Recursos\Telefono();
        $telefono->numero = 572606984;
        $telefono->minsal = 576984;
        $telefono->user_id = 15287582;
        $telefono->save();
    }
}
