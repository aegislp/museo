<?php

class ObjetosController extends \BaseController {

 
	public function getDetalle($objeto_id)
	{
		$objeto = Objeto::find($objeto_id);
		return View::make('objetos.detalle',array('objeto'=>$objeto));
	}
 
	public function getIndex($objeto_id = null)
	{

		$destacados  = Objeto::where('votos','>',0)->orderBy('votos')->take(10)->get();

		if(!is_null($objeto_id)){

			$objeto = Objeto::firstOrNew(array('id' => $objeto_id ));
		}else{
			$objeto = null;
		}

		return View::make('objetos.index',array('destacados'=>$destacados,'objeto'=>$objeto));	

	}
	/*
		Dividel el codigo posteado para encontra el objeto
		sala-objeto   -> 0000 00000
	*/
	public function postIndex()
	{

		$errores = null;
		$objeto_id = null;
		$codigo = (int)substr(Input::get('codigo'),3,5); 
		$objeto = Objeto::find($codigo);
		

		if(is_null($objeto)){

			$errores = array(0=>Input::get('codigo'));
		}else{
			 
			$objeto_id = $objeto->id;
		}

	 
		return Redirect::action('ObjetosController@getIndex',$objeto_id)->withErrors($errores);
		
	}
 }