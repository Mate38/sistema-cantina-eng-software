<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsaveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsaveis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->text('descricao');
            $table->string('cpf', 11);
            $table->string('telefone', 11);
            $table->string('celular', 11);
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
        //
    }
}
