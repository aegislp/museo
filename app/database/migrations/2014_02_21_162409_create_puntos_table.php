<?php

use Illuminate\Database\Migrations\Migration;

class CreatePuntosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('puntos',function($table){
			$table->increments('id');
			$table->integer('sala_id')->unsigned();
			$table->string('titulo');
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
		Schema::drop('puntos');
	}

}