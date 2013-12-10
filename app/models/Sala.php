<?php 

	class Sala extends Eloquent 
	{
		public static function getActivas(){

			return DB::table('salas')->where('activa','=',1)->get();
		}
	}

?>	