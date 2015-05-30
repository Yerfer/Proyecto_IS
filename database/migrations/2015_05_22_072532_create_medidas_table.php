<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('medidas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_deportista');
            $table->smallInteger('biceps')->nullable();
            $table->smallInteger('hombros')->nullable();
            $table->smallInteger('pecho')->nullable();
            $table->smallInteger('cuadriceps')->nullable();
            $table->smallInteger('pantorrilla')->nullable();
            $table->date('ultima_modificacion')->nullable();
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
		//
        Schema::drop('medidas');
	}

}
