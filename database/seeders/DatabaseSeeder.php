<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        //\App\Models\Port::factory(10)->create();
        \App\Models\Commentaire::factory(10)->create();
        \App\Models\Vote::factory(10)->create();
        \App\Models\Ecrire::factory(10)->create();
        \App\Models\Repondre::factory(10)->create();
    }
}
