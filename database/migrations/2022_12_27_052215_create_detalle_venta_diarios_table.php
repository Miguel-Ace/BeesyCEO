<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta_diarios', function (Blueprint $table) {
            $table->id();
            $table->string('cod_empresa');
            $table->string('num_ventas_rpt');
            $table->string('tipo');
            $table->string('cod_cliente');
            $table->string('nombre_cliente');
            $table->string('fecha')->unique();
            $table->string('sub_total');
            $table->string('igv');
            $table->string('num_documento');
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
        Schema::dropIfExists('detalle_venta_diarios');
    }
};
