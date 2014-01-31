<?php

class SalasController extends BaseController {

	public function getIndex()
	{
		$salas = Sala::getActivas();
		return View::make('salas.index',array('salas' => $salas )); 
	}

 	public function getObjetos($sala){
		$sala = Sala::findOrFail($sala);
		return View::make('salas.objetos',array('sala'=>$sala ));
	}
	public function getShow($id)
	{
		$sala =Sala::findOrFail($id);

	 	$salas =Sala::getActivas();
		return View::make('salas.sala',array('salas'=>$salas,'seleccion'=>$sala));
	}
	public function postAjax(){

		$sala = Sala::find(Input::get('sala'));
		return View::make('salas.detalle',array('seleccion'=>$sala));
	} 
	public function  getTrivia($sala_id){
		$trivia = Sala::findOrFail($sala_id)->trivias->first();
		 
		return View::make('salas.trivia',array('trivia'=>$trivia));
	}
}