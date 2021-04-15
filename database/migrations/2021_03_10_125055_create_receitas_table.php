<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('urlvideo');
            $table->longText('extra');

            $table->longText('body')->nullable();
            $table->text('obs');
            $table->enum('type', ['doce', 'salgada'])->default('doce');

            $table->enum('status', [1,2])->default(1);
            $table->unsignedBigInteger('user_id');


 
            $table->foreign('user_id')->references('id')->on('users');



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
        Schema::dropIfExists('receitas');
    }
}
