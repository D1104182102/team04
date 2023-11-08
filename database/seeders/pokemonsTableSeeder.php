<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemons')->insert([
            'pokemon' => '妙蛙種子',
            'tid1' => 0,
            'tid2' => 0,
            'ability' => '茂盛'
        ]);
    }
}
