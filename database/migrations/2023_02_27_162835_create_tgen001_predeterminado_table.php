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
        Schema::create('tgen001_predeterminado', function (Blueprint $table) {
            $table->id();
            $table->string('tipo',100);
		    $table->string('codigo',25);
		    $table->string('texto',50);
            $table->timestamps();
            $table->unique(['tipo', 'codigo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgen001_predeterminado');
    }
};
