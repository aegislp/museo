<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('SalaTableSeeder');
		$this->call('CategoriaTableSeeder');
		$this->call('ObjetoTableSeeder');
		$this->call('TriviaTableSeeder');
		$this->call('EstadisticaTableSeeder');
		$this->call('PuntoTableSeeder');
	}

}