<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_detalle_ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id')->on('producto');
            $table->integer('id_venta')->unsigned();
            $table->foreign('id_venta')->references('id')->on('ventas');
            $table->integer('cantidad');
            $table->string('estado');
            $table->string('captura');
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
        Schema::dropIfExists('producto_detalle_ventas');
    }
}
