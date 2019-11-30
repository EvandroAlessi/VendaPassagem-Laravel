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
                'aeronaveID' => rand(1,10),
                'dataPartida' => date("Y-m-d H:i:s", mt_rand(1262055681,1262055681)),
                'valorPassagem' => rand(1,1000)
            ]);
        }
    }
}
