<?php

class Objeto extends Eloquent {
	protected $guarded = array();

	public static $rules = array();


	public function sala()
	{
		return $this->belongsTo('Sala');
	}

	public function categoria()
	{
		return $this->belongsTo('Categoria');
	}
}
