<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVooTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('aeronaveID')->unsigned();;
            $table->dateTime('dataPartida');
            $table->float('valorPassagem', 10, 2);
            $table->timestamps();

            $table->foreign('aeronaveID')
                ->references('id')->on('Aeronave')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voo');
    }
}
