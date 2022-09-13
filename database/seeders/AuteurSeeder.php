<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('auteurs')->insert([
        //     'nom' => Str::random(10),
        //     'nationalite' => Str::random(10),
        //     'urlphoto' => Str::random(50)
        // ]);
    }
}
