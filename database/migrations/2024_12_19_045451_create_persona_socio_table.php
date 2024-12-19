<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaSocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_socio', function (Blueprint $table) {
            $table->increments('id_socio');
            $table->string('codigo_boleta')->nullable();
            $table->string('carnet_seguro')->nullable();
            $table->string('escalafon')->nullable();
            $table->string('situacion')->nullable();
            $table->string('grado')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('estado')->nullable();
            $table->integer('carnet_identidad')->nullable();
            $table->string('extension')->nullable();
            $table->string('nombres')->nullable();
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->string('observaciones')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('afiliacion')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('sangre')->nullable();
            $table->string('alergia')->nullable();
            $table->string('celular')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('persona_socio');
    }
}
