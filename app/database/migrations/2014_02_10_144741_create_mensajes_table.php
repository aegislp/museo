<?php

use Illuminate\Database\Migrations\Migration;

class CreateMensajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mensajes', function($table){
			$table->increments('id');
			$table->string('nombre');
			$table->string('email');
			$table->string('asunto');
			$table->text('mensaje');
			$table->string('estado',1)->default('R');
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
		Schema::drop('mensajes');
	}

}