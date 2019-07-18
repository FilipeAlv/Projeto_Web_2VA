<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->date('dataNascimento');
            $table->string('especie');
            $table->string('raca');

            $table->unsignedBigInteger('id_dono');
            
            $table->foreign('id_dono')
                ->references('id')->on('cliente_models')
                ->onDelete('cascade');

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
        Schema::dropIfExists('pet_models');
    }
}
