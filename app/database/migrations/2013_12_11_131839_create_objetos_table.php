<?php

use Illuminate\Database\Migrations\Migration;

class CreateObjetosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('objetos',function($table){

			$table->increments('id');
			$table->integer('sala_id');
			$table->string('nombre');
			$table->string('nombre_cientifico');
			$table->string('descripcion');
			$table->string('archivo');
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
		Schema::drop('objetos');
	}

}