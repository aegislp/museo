<?php

class SalasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$salas = Sala::getActivas();

		return View::make('salas.index',array('salas' => $salas ));
	}

 

	/**
	 * Mostrar una sala espesifica.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sala =Sala::find($id);
		$salas =Sala::getActivas();
		return View::make('salas.sala',array('salas'=>$salas,'seleccion'=>$sala));
	}

	 
	public function postAjax(){

		$sala = Sala::find(Input::get('sala'));
		return $sala->descripcion;
	} 

}