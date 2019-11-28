<?php

use Illuminate\Database\Seeder;

class PassageiroVooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table("PassageiroVoo")->insert([
                'destinoID' => rand(),
                'modelo' => str_random(20),
                'qntAssentos' => rand(),
                'qntAssentosEspecial' => rand(),
            ]);
        }
    }
}
