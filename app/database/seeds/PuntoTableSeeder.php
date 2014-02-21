<?php

class PuntoTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('puntos')->truncate();

		$punto = array(
			array('sala_id' =>1 ,'titulo'=>'punto 1' ),
			array('sala_id' =>1 ,'titulo'=>'punto 2' ),
			array('sala_id' =>1 ,'titulo'=>'punto 3' ),
			array('sala_id' =>1 ,'titulo'=>'punto 4' ),
			array('sala_id' =>1 ,'titulo'=>'punto 5' ),
			array('sala_id' =>2 ,'titulo'=>'punto 1' ),
			array('sala_id' =>2 ,'titulo'=>'punto 2' ),
			array('sala_id' =>2 ,'titulo'=>'punto 3' ),
			array('sala_id' =>2 ,'titulo'=>'punto 4' ),
			array('sala_id' =>2 ,'titulo'=>'punto 5' ) 
		);

		// Uncomment the below to run the seeder
		DB::table('puntos')->insert($punto);
	}

}
