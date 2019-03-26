<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_itens', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('pedido');
            $table->unsignedInteger('produto');

            $table->float('valor_unitario', 8, 2);
            $table->integer('quantidade');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign( 'pedido')->references('id')->on('pedidos');
            $table->foreign( 'produto')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_itens');
    }
}
