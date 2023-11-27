<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pagos', function(Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->String('moneda');
            $table->string('metododepago');
            $table->string('proyecto');
            $table->string('formadepago');
            $table->string('facturar');
            $table->string('subtotal');
            $table->string('iva');
            $table->string('imputrasladados');
            $table->string('impuretenidos');
            $table->string('total');
            $table->string('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
