<?php
	class SalaTableSeeder extends Seeder{


		public function run(){

			DB::table('salas')->delete();

			Sala::create( array(
				'numero' => 1 , 
				'nombre' => 'Sala esqueletos' , 
				'descripcion' => 'Descripcion para la sala 1',
				'activa' => true

			));

			Sala::create( array(
				'numero' => 2 , 
				'nombre' => "Sala egipcia", 
				'descripcion' => 'Esta es la direccion de la tabla dos pero no se que onda',
				'activa' => true

		));
		}

	}