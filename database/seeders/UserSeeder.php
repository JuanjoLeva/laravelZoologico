<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User();

        $u->name = "Juanjo";
        $u->email = "juanjose.levaelvira@iesmiguelherrero.com";
        $u->password = bcrypt("hola");

        $u2 = new User();

        $u2->name = "admin";
        $u2->email = "admin@iesmiguelherrero.com";
        $u2->password = bcrypt("adios");

        $u->save();
        $u2->save();

        $this->command->info("Se han añadido dos usuarios predeterminados y 5 aleatorios");
    }
}
