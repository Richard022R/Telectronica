<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoVentasTable extends Migration
{
    public function up()
    {
        Schema::create('documento_ventas', function (Blueprint $table) {
            $table->id('idDocumento');
            $table->string('nombreDocumento');
            $table->text('descripcionDocumento');
            $table->unsignedBigInteger('idCliente')->nullable(); // Permite valores nulos
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('documento_ventas');
    }
}