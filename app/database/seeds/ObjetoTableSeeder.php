<?php

class ObjetoTableSeeder extends Seeder {

	public function run()
	{
		DB::table('objetos')->truncate();

		for ($i=0; $i < 11; $i++) { 
			Objeto::create(array(


			'sala_id'=>1,
			'categoria_id'=>($i % 2) + 1,
			'nombre'=>'Objeto'.$i,
			'nombre_cientifico'=>'Objeto'.$i,
			'descripcion'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

" ,'votos'=>$i * 10
			

			));
		}
		
		
	}

}
