<?php

class UserTableSeeder extends Seeder {
 
	public function run()
	{
		DB::table('users')->delete();

		User::create( array(
			'usuario' => 'prueba1' , 
			'password' => Hash::make('prueba1') , 
			'email' => 'prueba1@hotmail.com' 

		));

		User::create( array(
			'usuario' => 'prueba2' , 
			'password' => Hash::make('prueba2' ), 
			'email' => 'prueba2@hotmail.com' 

		));
 	}

}