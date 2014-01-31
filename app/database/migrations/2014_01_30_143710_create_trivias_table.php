<?php

use Illuminate\Database\Migrations\Migration;

class CreateTriviasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trivias', function($table){
			$table->increments('id');
			$table->integer('sala_id')->unsigned();
			$table->string('pregunta');
			$table->string('opcion1');
			$table->string('opcion2');
			$table->string('opcion3');
			$table->integer('respuesta')->unsigned();
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
		Schema::drop('trivias');
	}

}