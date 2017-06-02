<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuantidadeProdutoTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER tr_Quantidade_Produto AFTER INSERT ON estoques
        FOR EACH ROW
        BEGIN
            UPDATE produtos, estoques SET produtos.quantidade = (produtos.quantidade+estoques.quantidade) WHERE  produtos.id = estoques.produtos_id;
        END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `tr_Quantidade_Produto`');
    }
}
