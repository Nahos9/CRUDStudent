<?php

namespace Database\Seeders;

use App\Models\etudiant;
use Database\Factories\EtudiantFactory;
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
        // \App\Models\User::factory(10)->create();
        etudiant::factory(20)->create();
        // $this->call(classeSeeder::class);
    }
}
