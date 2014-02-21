<?php

class Punto extends Eloquent {


	protected $guarded = array();

	public static $rules = array();

	public function sala(){
		return $this->bellongsTo('Sala');

	}

	public static function salas(){
		 $salas = Sala::all() ;
		 $i = 0;
		 foreach ($salas as $sala) {

		 	if(count($sala->puntos()) > 0){
		 		$resultado[$i++] = $sala ;	
		 	}
		 	
		 	 
		 }
		return $resultado; 
	}
}
