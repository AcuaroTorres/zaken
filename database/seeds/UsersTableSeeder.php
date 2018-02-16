<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::where('name','Admin')->first();
        $usuario_role = Role::where('name','Usuario')->first();

        $user = new User();
        $user->id = 15287582;
        $user->dv = 7;
        $user->name = "Alvaro";
        $user->email = "a@b.c";
        $user->password = bcrypt('pluto');
        $user->save();
        $user->roles()->attach($admin_role);
        $user->roles()->attach($usuario_role);
        
        $cargo = App\rrhh\Cargo::find(1);
        $user->cargos()->attach($cargo);

        $user = new User();
        $user->id = 21097570;
        $user->dv = 5;
        $user->name = "Aaron";
        $user->email = "aaron@torres.cl";
        $user->password = bcrypt('pluto');
        $user->save();
        $user->roles()->attach($usuario_role);

        //factory(App\User::class, 10)->create()->each(function ($u) {
        //    $u->roles()->attach(Role::where('name','Usuario')->first());
        //});
    }
}
