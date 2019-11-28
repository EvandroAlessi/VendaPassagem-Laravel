<?php

use Illuminate\Database\Seeder;

class DestinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table("Destino")->insert([
                'nomeAeroporto' => str_random(50),
                'taxaEmbarque' => rand()
            ]);
        }
    }
}
