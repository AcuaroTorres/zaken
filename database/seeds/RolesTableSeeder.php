<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Admin';
        $role->description = 'Administrador del sistema';
        $role->save();

        $role = new Role();
        $role->name = 'Usuario';
        $role->description = 'Usuario del sistema';
        $role->save();

    }
}
