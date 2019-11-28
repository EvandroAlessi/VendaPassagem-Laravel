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
                'aeronaveID' => rand(),
                'dataPartida' => str_random(20),
                'valorPassagem' => rand()
            ]);
        }
    }
}
