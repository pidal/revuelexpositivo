<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConcursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('concursos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('eslogan');
			$table->text('resumen');
			$table->text('descripcion');
			$table->text('premio');
			$table->string('fondo');
			$table->string('estilo');
			$table->boolean('estado');
			$table->string('tipoinscripcion');
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
		Schema::drop('concursos');
	}

}
