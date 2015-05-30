<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('usuarios', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('Cedula')->unique();
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->string('usuario')->unique();
            $table->string('email', 40)->unique();
            $table->Integer('telefono')->nullable();
            $table->string('password', 60);
            $table->enum('tipo',['deportista','admin','entrenador']);
            $table->integer('id_perfil')->unsigned();

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
        Schema::drop('usuarios');
	}

}
