<?php

class SalasController extends \BaseController {

	public function index()
	{
		$salas = Sala::getActivas();

		return View::make('salas.index',array('salas' => $salas ));
	}

 
	public function objetos($sala){
		$sala = Sala::find($sala);
		
		if(is_null($sala)){
			App::abort(404,'Sala no encontrada');
		}

		 

		return View::make('salas.objetos',array('sala'=>$sala ));

	}

	 
	public function show($id)
	{
		$sala =Sala::find($id);

		if(is_null($sala)){
			App::abort(404,'Sala no encontrada');
		}

		$salas =Sala::getActivas();
		return View::make('salas.sala',array('salas'=>$salas,'seleccion'=>$sala));
	}

	 
	public function postAjax(){

		$sala = Sala::find(Input::get('sala'));
		return View::make('salas.detalle',array('seleccion'=>$sala));
	} 

}