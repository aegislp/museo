<?php

class Mensaje extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public static function no_leidos(){

		return Mensaje::where('estado','=','R');
	}
 
	public static function cant_no_leidos(){
		return DB::table('mensajes')->where('estado','=','R')->count();
	}
}
