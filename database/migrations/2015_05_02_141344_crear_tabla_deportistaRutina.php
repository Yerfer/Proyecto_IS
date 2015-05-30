<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDeportistaRutina extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deportistaRutina', function(Blueprint $table)
		{
			$table->increments('id');
            $table->Integer('id_deportista')->unsigned();
            $table->Integer('id_rutina')->unsigned();

            $table->foreign('id_deportista')
            ->references('id')
            ->on('usuarios')
            ->onDelete('cascade');

            $table->foreign('id_rutina')
                ->references('id')
                ->on('Rutina')
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
		Schema::drop('deportistaRutina');
	}

}
