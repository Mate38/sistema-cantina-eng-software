<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function(Blueprint $table)
        {
            $table->integer('responsaveis_id')->unsigned()->nullable();
            $table->foreign('responsaveis_id')->references('id')->on('responsaveis');
        });

        /*Schema::table('vendas', function(Blueprint $table)
        {
            $table->integer('clientes_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->foreign('clientes_id')->references('id')->on('clientes');
            $table->foreign('users_id')->references('id')->on('users');
        });*/

        Schema::table('vendas_has_produtos', function(Blueprint $table)
        {
            $table->integer('produtos_id')->unsigned();
            $table->foreign('produtos_id')->references('id')->on('produtos');
        });

        Schema::table('estoques', function(Blueprint $table)
        {
            $table->integer('produtos_id')->unsigned();
            $table->integer('fornecedores_id')->unsigned();
            $table->foreign('produtos_id')->references('id')->on('produtos');
            $table->foreign('fornecedores_id')->references('id')->on('fornecedores');
        });

        /*Schema::table('funcionarios', function(Blueprint $table)
        {
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
        });*/

        Schema::table('users', function (Blueprint $table) {
            $table->integer('funcionarios_id')->unsigned()->nullable();
            $table->foreign('funcionarios_id')->references('id')->on('funcionarios');
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
