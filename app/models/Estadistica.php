<?php

class Estadistica extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	//protected $timestamps = false; 
	
	public function mes(){

		$date = $this->dia;
        $date = DateTime::createFromFormat('Y-m-d', $date);
    	 
		return  $date->format('m') - 1;
	}
	public static function getEstadisticaHoy(){


		$date =  new DateTime();

		$fecha = $date->format('Y-m-d');
		 
		return Estadistica::firstOrNew(array('dia'=>$fecha)); 
	}
	public static function addVisita(){

	 	$estadistica_hoy = Estadistica::getEstadisticaHoy();

		if(is_null($estadistica_hoy)){
			
			$estadistica_hoy = new Estadistica;
		} 
		 
		$estadistica_hoy->visitas += 1;

		$estadistica_hoy->save();  
	}
	public static function addUsuario(){

		$estadistica_hoy = Estadistica::getEstadisticaHoy();
	 
		if(is_null($estadistica_hoy)){
			
			$estadistica_hoy = new Estadistica;
		} 
		 
		$estadistica_hoy->registro += 1;

		$estadistica_hoy->save();  
	}
}
