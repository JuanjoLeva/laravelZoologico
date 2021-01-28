<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animales')->delete();
        $this->call(AnimalSeeder::class);

        DB::table('users')->delete();
        $this->call(UserSeeder::class);
        \App\Models\User::factory(5)->create();

        DB::table('revisiones')->delete();
        $this->call(RevisionSeeder::class);

    }

}
