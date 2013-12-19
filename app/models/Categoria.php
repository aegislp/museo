<?php

class Categoria extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function sala(){
		return $this->belongsTo('Sala');
	}

	public function objetos(){

		return $this->hasMany('Objeto');
	}
}
