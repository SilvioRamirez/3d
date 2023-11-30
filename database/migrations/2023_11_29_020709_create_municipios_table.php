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
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('municipio');
            $table->integer('votantes');
            $table->integer('epe')->nullable();
            $table->integer('epm')->nullable();
            $table->integer('epp')->nullable();
            $table->integer('joven_comunidad')->nullable();
            $table->integer('joven_ubch')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipios');
    }
};
