<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class classeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classe')->insert([
            ['libelle'=>"6e"],
            ['libelle'=>"5e"],
            ['libelle'=>"4e"],
            ['libelle'=>"3e"],
            ['libelle'=>"2nde"],
            ['libelle'=>"1ere"],
            ['libelle'=>"Tle"],
        ]);
    }
}
