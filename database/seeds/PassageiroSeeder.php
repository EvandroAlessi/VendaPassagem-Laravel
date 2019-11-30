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
                'CPF' => Str::random(18),
                'RG' => Str::random(16),
                'nome' => Str::random(20),
                'dataNascimento' => date("Y-m-d H:i:s", mt_rand(1262055681,1262055681))
            ]);
        }
    }
}
