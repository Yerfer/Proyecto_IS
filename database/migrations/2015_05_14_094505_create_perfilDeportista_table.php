<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilDeportistaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('perfilDeportista', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('id_deportista');
                $table->string('direccion')->nullable();
                $table->integer('telefono')->nullable();
                $table->smallInteger('peso')->nullable();
                $table->smallInteger('altura')->nullable();
                $table->smallInteger('presion')->nullable();
                $table->enum('genero',['masculino','femenino'])->nullable();
                $table->foreign('id_deportista')
                    ->references('id')
                    ->on('usuarios')
                    //->on('Deportista')
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
		Schema::drop('perfilDeportista');
	}

}
