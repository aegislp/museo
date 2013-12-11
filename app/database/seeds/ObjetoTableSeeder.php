<?php

class ObjetoTableSeeder extends Seeder {

	public function run()
	{
		DB::table('objetos')->truncate();

		for ($i=0; $i < 11; $i++) { 
			Objeto::create(array(


			'sala_id'=>1,
			'nombre'=>'Objeto'.$i,
			'nombre_cientifico'=>'Objeto'.$i,
			'descripcion'=>"asdddddddddddddddddddddddddddddddddddddddddddddddddddd asd  asdasdasd",
			'archivo'=>$i.'png'
			

			));
		}
		
		
	}

}
