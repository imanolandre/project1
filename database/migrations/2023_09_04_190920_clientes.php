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
        Schema::create('clientes', function(Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombrecliente');
            $table->String('correo');
            $table->string('teléfono');
            $table->string('empresa');
            $table->string('sitioweb');
            $table->string('dirección');
            $table->string('razónsocial');
            $table->string('rfc');
            $table->string('direcciónfiscal');
            $table->string('codigopostal');
            $table->string('regimenincorporación');
            $table->string('constanciasituaciónFiscal');
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
