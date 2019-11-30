<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeronaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aeronave', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('modelo', 126);
            $table->integer('qntAssentos');
            $table->integer('qntAssentosEspecial');
            $table->timestamps();
        });

        Schema::table('aeronave', function (Blueprint $table) {
            $table->integer('destinoID')->unsigned();
            $table->foreign('destinoID')->references('id')->on('destino')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aeronave');
    }
}
