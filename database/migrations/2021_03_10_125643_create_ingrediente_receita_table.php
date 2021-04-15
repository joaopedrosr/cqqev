<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredienteReceitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingrediente_receita', function (Blueprint $table) {
            
            $table->unsignedBigInteger('receita_id');
            $table->foreign('receita_id', 'receita_id_fk_2656559')->references('id')->on('receitas')->onDelete('cascade');
            $table->unsignedBigInteger('ingrediente_id');
            $table->foreign('ingrediente_id', 'ingrediente_id_fk_2656559')->references('id')->on('ingredientes')->onDelete('cascade');
            





            /*             $table->id();
            $table->unsignedBigInteger('ingrediente_id');
            $table->unsignedBigInteger('receita_id');
            $table->foreign('receita_id')->references('id')->on('receitas')->onDelete('cascade');
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes');

            $table->timestamps(); */


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingrediente_receita');
    }
}
