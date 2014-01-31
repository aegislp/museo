<?php

class TriviaTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('trivias')->truncate();

		$trivia = array(
			array('sala_id' => 1, 'pregunta' => "pregunta 1?",'opcion1'=>'respuesta1','opcion2'=>'respuesta2','opcion3'=>'respuesta2','respuesta'=>1 ),
			array('sala_id' => 1, 'pregunta' => "pregunta 2?",'opcion1'=>'respuesta1','opcion2'=>'respuesta2','opcion3'=>'respuesta2','respuesta'=>1 ) 
		);

		// Uncomment the below to run the seeder
		 DB::table('trivias')->insert($trivia);
	}

}
