<?php

use Illuminate\Database\Migrations\Migration;

class CreateEstadisticasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estadisticas',function($table){
			$table->increments('id');
		 	$table->date('dia')->default( date('Y-m-d'));
		 	$table->integer('visitas')->unsigned();
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
		Schema::drop('estadisticas');
	}

}