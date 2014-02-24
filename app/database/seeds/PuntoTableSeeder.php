<?php

class PuntoTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('puntos')->truncate();

		$punto = array(
			array('sala_id' =>1 ,'titulo'=>'punto 1' ,'color'=>'nav1'),
			array('sala_id' =>1 ,'titulo'=>'punto 2','color'=>'nav1' ),
			array('sala_id' =>1 ,'titulo'=>'punto 3' ,'color'=>'nav1'),
			array('sala_id' =>1 ,'titulo'=>'punto 4','color'=>'nav1' ),
			array('sala_id' =>1 ,'titulo'=>'punto 5' ,'color'=>'nav1'),
			array('sala_id' =>2 ,'titulo'=>'punto 1' ,'color'=>'nav2'),
			array('sala_id' =>2 ,'titulo'=>'punto 2','color'=>'nav2' ),
			array('sala_id' =>2 ,'titulo'=>'punto 3' ,'color'=>'nav2'),
			array('sala_id' =>2 ,'titulo'=>'punto 4' ,'color'=>'nav2'),
			array('sala_id' =>2 ,'titulo'=>'punto 5' ,'color'=>'nav2') 
		);

		// Uncomment the below to run the seeder
		DB::table('puntos')->insert($punto);
	}

}
