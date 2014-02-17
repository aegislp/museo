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
		return View::make('salas.detalle',array('sala'=>$sala));
	} 
	public function  getTrivia($sala_id){
		$trivia = Sala::findOrFail($sala_id)->trivias->first();
		 
		return View::make('salas.trivia',array('trivia'=>$trivia));
	}
	public function getBuscarObjeto($sala_id){
		$objeto = Objeto::getObjetoAzar($sala_id);
		return View::make('salas.juego',array('objeto'=>$objeto));
	}
	public function getMeGusta($sala_id){
		$sala = Sala::findOrFail($sala_id);
		$sala->votos +=   1;
		$sala->save();

		return View::make('salas.like');

		
	}  
}