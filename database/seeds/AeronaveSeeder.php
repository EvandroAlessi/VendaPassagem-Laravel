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
                'destinoID' => rand(1,10),
                'modelo' => Str::random(10),
                'qntAssentos' => rand(1,1000),
                'qntAssentosEspecial' => rand(1,100),
            ]);
        }
    }
}
