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
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "elijio la sala $id";
	}

	 
	 

}