<?php

class UserTableSeeder extends Seeder {
 
	public function run()
	{
		DB::table('users')->delete();

		
		for ($i=0; $i < 10; $i++) { 
			
			User::create( array(
			
			'usuario' => 'prueba'.$i , 
			'password' => Hash::make('prueba') , 
			'email' => 'prueba'.$i.'@hotmail.com' 

			));


		}
		

	 
 	}

}