<?php
	class SalaTableSeeder extends Seeder{


		public function run(){

			DB::table('salas')->truncate();

			Sala::create( array(
				'numero' => 1 , 
				'nombre' => 'Sala esqueletos' , 
				'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, corporis, dolores quidem qui in molestias modi inventore itaque excepturi eaque perferendis illo reprehenderit ratione possimus impedit repellendus tempore blanditiis accusantium.',
				'activa' => true

			));

			Sala::create( array(
				'numero' => 2 , 
				'nombre' => "Sala egipcia", 
				'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, blanditiis, cupiditate, a dolore suscipit praesentium quia molestiae sint libero accusamus mollitia dolorum similique unde rem odio reprehenderit voluptate nihil minima.",
				'activa' => true

		));
		}

	}