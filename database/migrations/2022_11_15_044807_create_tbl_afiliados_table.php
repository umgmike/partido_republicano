<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dpi', 20);
            $table->string('nombre1', 120);
            $table->string('nombre2', 120)->nullable();
            $table->string('nombre3', 120)->nullable();
            $table->string('apellido1', 120);
            $table->string('apellido2', 120);
            $table->string('apellido3', 120)->nullable();
            $table->unsignedInteger('id_puesto');
            $table->foreign('id_puesto','fk_afiliados_puesto')->references('id')->on('puestos');
            $table->unsignedInteger('id_departamento');
            $table->foreign('id_departamento','fk_depto_afiliados')->references('id')->on('departamentos');
            $table->unsignedInteger('id_municipio');
            $table->foreign('id_municipio','fk_muni_afil')->references('id')->on('municipios');
            $table->unsignedInteger('id_responsable');
            $table->foreign('id_responsable','fk_responsable_afil')->references('id')->on('usuario');
            $table->string('telefono1', 120)->nullable();
            $table->string('telefono2', 120)->nullable();
            $table->string('email', 120)->nullable();
            $table->text('direccion');
            $table->boolean('estado')->default(1);
            $table->boolean('esafiliado')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliados');
    }
}
