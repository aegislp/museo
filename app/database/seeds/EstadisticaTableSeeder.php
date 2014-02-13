<?php

class EstadisticaTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('estadisticas')->truncate();

		for ($i=1; $i <= 28; $i++) { 
			Estadistica::create(array('dia'=>'2014-02-'.$i,'visitas'=>rand ( 1 , 10000 )));
		}

		// Uncomment the below to run the seeder
		// DB::table('estadistica')->insert($estadistica);
	}

}
