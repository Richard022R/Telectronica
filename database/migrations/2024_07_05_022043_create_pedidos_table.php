<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('idPedido');
            $table->date('fecha');
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('idCliente')->on('clientes');
            $table->boolean('estadoPedido');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}