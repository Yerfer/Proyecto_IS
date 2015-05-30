<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaObjetivo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('objetivo', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('objetivo',300);
            $table->Integer('id_deportista')->unsigned();

            $table->foreign('id_deportista')
                ->references('id')
                ->on('usuarios')
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
		Schema::drop('objetivo');
	}

}
