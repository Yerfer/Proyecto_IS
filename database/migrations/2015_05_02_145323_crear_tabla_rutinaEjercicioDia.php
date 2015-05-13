<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRutinaEjercicioDia extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RutinaEjercicioDia', function(Blueprint $table)
		{
			$table->increments('id');

            $table->Integer('id_rutina')->unsigned();
            $table->Integer('id_ejercicio')->unsigned();
            $table->Integer('id_dia')->unsigned();

            $table->foreign('id_rutina')
                ->references('id')
                ->on('Rutina')
                ->onDelete('cascade');

            $table->foreign('id_ejercicio')
                ->references('id')
                ->on('Ejercicio')
                ->onDelete('cascade');

            $table->foreign('id_dia')
                ->references('id')
                ->on('Dia')
                ->onDelete('cascade');

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
		Schema::drop('RutinaEjercicioDia');
	}

}
