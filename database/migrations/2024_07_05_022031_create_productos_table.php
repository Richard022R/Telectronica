<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idProducto');
            $table->string('nombreProducto');
            $table->text('descripcionProducto');
            $table->decimal('precio', 8, 2);
            $table->integer('stock');
            $table->boolean('estadoProducto');
            $table->unsignedBigInteger('idCategoria');
            $table->foreign('idCategoria')->references('idCategoria')->on('categorias');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}