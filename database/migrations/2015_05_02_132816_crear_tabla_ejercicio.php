<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEjercicio extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Schema::create('Ejercicios', function(Blueprint $table)
        Schema::create('Ejercicio', function(Blueprint $table)
		{
			$table->increments('id');
            //$table->integer('id_categoria');
            //$table->integer('id_maquina');
            $table->string('nombre');
            $table->string('tiempo',30)->nullable();
            $table->Integer('repeticiones')->nullable();
            $table->Integer('series')->nullable();
            $table->string('peso',30)->nullable();
            $table->string('categoria');
            $table->text('descripcion')->nullable();
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
		//Schema::drop('Ejercicios');
        Schema::drop('Ejercicio');
	}

}
