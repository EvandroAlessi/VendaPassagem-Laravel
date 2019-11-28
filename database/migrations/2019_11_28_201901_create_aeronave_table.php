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
            $table->bigIncrements('ID');
            $table->integer('DestinoID');
            $table->string('Modelo', 126);
            $table->integer('QntAssentos');
            $table->integer('QntAssentosEspecial');
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
        Schema::dropIfExists('aeronave');
    }
}
