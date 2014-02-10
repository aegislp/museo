<?php

class MensajesController extends BaseController {

 
	public function index()
	{
        return View::make('mensajes.index');
	}

	 
	public function store()
	{
		$mensaje = new Mensaje;

		$mensaje->fill(Input::all());

		$mensaje->save();

		return Redirect::action('MensajesController@index')->with('mensaje','El mensaje fue enviado');
	}

 

}
