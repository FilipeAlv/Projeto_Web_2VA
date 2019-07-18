<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('categoria');
            $table->string('marca');
            $table->date('dataFabricacao');
            $table->date('dataValidade');
            $table->integer('quantidade');
            $table->double('valor');
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
        Schema::dropIfExists('produto_models');
    }
}
