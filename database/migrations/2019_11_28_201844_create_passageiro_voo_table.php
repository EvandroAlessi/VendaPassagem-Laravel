<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassageiroVooTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passageiro_voo', function (Blueprint $table) {
            $table->integer('vooID');
            $table->integer('passageiroID');
            $table->integer('numAssento');
            $table->string('solicitacoes', 255);
            $table->integer('tipoAssento');
            $table->integer('formaPagamento');
            $table->float('valorPagamento', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passageiro_voo');
    }
}
