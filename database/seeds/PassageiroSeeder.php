<?php

use Illuminate\Database\Seeder;

class PassageiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table("Passageiro")->insert([
                'CPF' => str_random(18),
                'RG' => str_random(16),
                'nome' => str_random(20),
                'dataNascimento' => rand(),
            ]);
        }
    }
}
