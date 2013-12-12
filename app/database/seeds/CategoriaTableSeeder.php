<?php

class CategoriaTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('categorias')->truncate();

		Categoria::create(array(
			'sala_id'=>1,
			'nombre'=>'categoria1'
		));
		
		Categoria::create(array(
			'sala_id'=>1,
			'nombre'=>'categoria2'
		));


	}

}
