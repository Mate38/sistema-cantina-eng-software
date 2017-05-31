<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->text('descricao')->nullable();
            $table->string('cpf', 11);
            $table->decimal('valorDebitos', 8, 2)->nullable();
            $table->decimal('valorCreditos', 8, 2)->nullable();
            $table->string('telefone', 11);
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
