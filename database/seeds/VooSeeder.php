<?php

use Illuminate\Database\Seeder;

class VooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table("Voo")->insert([
                'destinoID' => rand(),
                'modelo' => str_random(20),
                'qntAssentos' => rand(),
                'qntAssentosEspecial' => rand(),
            ]);
        }
    }
}
