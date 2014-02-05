<?php

class ObjetosController extends \BaseController {

 
	public function getDetalle($objeto_id)
	{
		$objeto = Objeto::find($objeto_id);
		return View::make('objetos.detalle',array('objeto'=>$objeto));
	}
 
	public function getIndex()
	{

		$destacados  = Objeto::where('votos','>',0)->orderBy('votos')->take(10)->get();

		return View::make('objetos.index',array('destacados'=>$destacados));	

	}
	public function postIndex()
	{

		$objeto = Objeto::find(Input::get('codigo')); 

		if(!$objeto){
			return Redirect::action('ObjetosController@getIndex')->withErrors(array(0=>Input::get('codigo')));
		}
			

	}
 }