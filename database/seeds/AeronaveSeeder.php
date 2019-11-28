<?php

use Illuminate\Database\Seeder;

class AeronaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table("Aeronave")->insert([
                'destinoID' => rand(),
                'modelo' => str_random(20),
                'qntAssentos' => rand(),
                'qntAssentosEspecial' => rand(),
            ]);
        }
    }
}
