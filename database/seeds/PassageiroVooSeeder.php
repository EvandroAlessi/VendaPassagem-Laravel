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
                'passageiroID' => rand(),
                'numAssento' => rand(),
                'solicitacoes' => str_random(126),
                'tipoAssento' => rand(),
                'formaPagamento' => rand(),
                'valorPagamento' => rand()
            ]);
        }
    }
}
