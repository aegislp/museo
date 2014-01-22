<?php

use Illuminate\Database\Migrations\Migration;

class CreateSalasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salas',function($table){
			$table->increments('id');
			
			$table->integer('numero')->unique();
			$table->string('nombre');
			$table->text('descripcion');
			$table->boolean('activa');
			
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
		Schema::drop('salas');	
	}

}