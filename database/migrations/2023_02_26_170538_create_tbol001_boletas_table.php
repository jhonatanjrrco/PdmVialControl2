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
        Schema::create('tbol001_boletas', function (Blueprint $table) {
		$table->id();
		$table->string('esquema',25);
		$table->string('numero',10);
		$table->string('motivo',250);
		$table->date('fecha');
		$table->time('hora');
		$table->string('lugar',250);
		$table->string('parroquia',50);
		$table->string('ciudadano_tipo_documento',1);
		$table->integer('ciudadano_numero');
		$table->string('vehiculo_placa');
		$table->string('remolque',2);
		$table->string('estacionamiento',50);
		$table->integer('funcionario_placa');
		$table->string('compadecer',50);
		$table->date('compadecer_fecha');
		$table->time('compadecer_hora');
		$table->string('tipo_ley',100);
		$table->string('art',25);
		$table->string('numeral',25);
		$table->string('literal',25);
		$table->string('observacion',250);
		$table->decimal('monto',12,8);
		$table->string('moneda',25);
		$table->integer('estatus');
		$table->string('modificacion')->default('NINGUNA');
		$table->string('autorizado_por',30);
		$table->text('nota');
		$table->string('ip',20);
		$table->string('usuario',20);
		$table->string('accion',15);
		$table->timestamps();
        $table->unique(['esquema', 'numero']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbol001_boletas');
    }
};
