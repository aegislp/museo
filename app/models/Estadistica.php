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
	public static function addVisita(){

		$date =  new DateTime();

		$fecha = $date->format('Y-m-d');
		 
		$estadistica_hoy = Estadistica::firstOrNew(array('dia'=>$fecha)); 
	 
		if(is_null($estadistica_hoy)){
			
			$estadistica_hoy = new Estadistica;
		} 
		 
		$estadistica_hoy->visitas += 1;

		$estadistica_hoy->save();  
	}
}
