<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name' => 'Victor',
            'last_name' => 'Pena',
            'age' => 30,
        ]);

        DB::table('people')->insert([
            'name' => 'Juan',
            'last_name' => 'Alvarez',
            'age' => 35,
        ]);
    }
}
