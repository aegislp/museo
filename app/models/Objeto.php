<?php

class Objeto extends Eloquent {
	public $errores;
	protected $guarded = array();

	public static $rules = array();
	protected $fillable = array('nombre', 'nombre_cientifico', 'categoria_id','descripcion');

	public function sala()
	{
		return $this->belongsTo('Sala');
	}

	public function categoria()
	{
		return $this->belongsTo('Categoria');
	}
}
