<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id('idDetallePedido');
            $table->unsignedBigInteger('idPedido');
            $table->unsignedBigInteger('idProducto');
            $table->unsignedBigInteger('idDocumento');
            $table->integer('cantidad');
            $table->decimal('precioUnitario', 8, 2);
            $table->decimal('importe', 8, 2);
            $table->foreign('idPedido')->references('idPedido')->on('pedidos');
            $table->foreign('idProducto')->references('idProducto')->on('productos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_pedidos');
    }
}
