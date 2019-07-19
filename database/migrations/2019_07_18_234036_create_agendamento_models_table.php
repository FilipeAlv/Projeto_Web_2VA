<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamento_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pet_id');
            $table->date('dataAgendada');
            $table->time('horaAgendada');
            $table->date('dataInicio')->nullable();
            $table->time('horaInicio')->nullable();
            $table->date('dataFim')->nullable();
            $table->time('horaFim')->nullable();
            $table->unsignedBigInteger('servico_id');
            $table->string('status');

             $table->foreign('pet_id')
                ->references('id')->on('pet_models')
                ->onDelete('cascade');

            $table->foreign('servico_id')
            ->references('id')->on('servico_models')
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
        Schema::dropIfExists('agendamento_models');
    }
}
