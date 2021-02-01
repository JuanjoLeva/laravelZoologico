<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Revision;
use Illuminate\Database\Seeder;

class RevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r=new Revision();
        $r->animal_id=Animal::all()->random()->id;
        $r->fecha="2021/12/3";
        $r->descripcion="Hola que tal";

        $r2=new Revision();
        $r2->animal_id=Animal::all()->random()->id;
        $r2->fecha="2021/12/4";
        $r2->descripcion="tal";

        $r->save();
        $r2->save();

        $this->command->info('Tabla revisiones inicializada con datos');
    }
}
