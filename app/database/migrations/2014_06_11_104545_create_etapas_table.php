<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtapasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('etapas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->datetime('ini_etapa');
			$table->datetime('fin_etapa');
			$table->text('descripcion');
			$table->integer('concurso_id');
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
		Schema::drop('etapas');
	}

}
