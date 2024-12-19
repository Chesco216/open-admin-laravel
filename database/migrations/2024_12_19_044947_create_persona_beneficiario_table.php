<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaBeneficiarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_beneficiario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_boleta')->nullable();
            $table->string('persona_tipo')->nullable();
            $table->integer('carnet_identidad')->nullable();
            $table->string('complemento_carnet_identidad')->nullable();
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->string('nombre')->nullable();
            $table->string('persona_sexo')->nullable();
            $table->string('persona_sangre')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('persona_departamento')->nullable();
            $table->string('persona_provincia')->nullable();
            $table->string('carnet_seguro')->nullable();
            $table->integer('id_administrador')->nullable();
            $table->date('fecha_alta')->nullable();
            $table->string('persona_estado')->nullable();
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
        Schema::dropIfExists('persona_beneficiario');
    }
}
