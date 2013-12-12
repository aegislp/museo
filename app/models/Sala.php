<?php 

	class Sala extends Eloquent 
	{
		
		public function objetos(){

			return $this->hasMany('Objeto');
		}
		public function categorias(){

			return $this->hasMany('Categoria');
		}

		public static function getActivas(){

			return DB::table('salas')->where('activa','=',1)->get();
		}
	}

?>	