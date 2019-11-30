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
                'nomeAeroporto' => Str::random(10),
                'taxaEmbarque' => rand(1,1000)
            ]);
        }
    }
}
