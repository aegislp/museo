<?php

class Trivia extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	protected 	$fillable = array('pregunta', 'opcion1', 'opcion2','opcion3','respuesta');

	public function sala(){
		return $this->belongsTo('Sala');
	}
}
