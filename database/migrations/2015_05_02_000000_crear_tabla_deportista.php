<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDeportista extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Deportista', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('Cedula')->unique();
			$table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->Integer('telefono')->nullable();
			$table->string('email', 40);
			$table->string('password', 60);


            $table->rememberToken();
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
		Schema::drop('Deportista');
	}

}
