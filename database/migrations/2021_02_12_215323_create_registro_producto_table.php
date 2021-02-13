<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_producto', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_registro');
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_administrador');
            $table->foreign('id_administrador')->references('id')->on('administrador');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('producto');
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
        Schema::dropIfExists('registro_producto');
    }
}
