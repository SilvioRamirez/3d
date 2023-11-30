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
        Schema::create('votantes', function (Blueprint $table) {
            $table->id();
            $table->string('nac');
            $table->string('cedula');
            $table->string('p_apellido')->nullable();
            $table->string('s_apellido')->nullable();
            $table->string('p_nombre')->nullable();
            $table->string('s_nombre')->nullable();
            $table->string('sexo')->nullable();
            $table->string('fec_nac')->nullable();
            $table->string('edad')->nullable();
            $table->string('edo')->nullable();
            $table->string('estado')->nullable();
            $table->string('mun')->nullable();
            $table->string('municipio')->nullable();
            $table->string('paq')->nullable();
            $table->string('parroquia')->nullable();
            $table->string('cod_cv')->nullable();
            $table->string('centro_votacion')->nullable();
            $table->string('direccion')->nullable();
            $table->boolean('voto_esequibo')->default(0)->nullable();
            $table->string('estructura')->nullable();
            $table->string('comision')->nullable();
            $table->string('nombre')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votantes');
    }
};
