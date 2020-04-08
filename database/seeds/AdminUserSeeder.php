<?php

use App\Persona;
use App\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->email = "heraldcnp@gmail.com";
        $usuario->password = bcrypt("123");
        $usuario->save();
        $user = User::orderBy('id', 'DESC')->limit(1)->get();
        $persona = new Persona();
        $persona->name = "Herald";
        $persona->lastname = "Choque Vargas";
        $persona->phone = "72367995";
        $persona->address = "h vasquez 186";
        $persona->face = "heraldcnp";
        $persona->idUser = $user[0]->id;
        $persona->save();
    }
}
