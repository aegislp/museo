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

	public function show($mensaje_id){


		$mensaje = Mensaje::findOrFail($mensaje_id);

		$mensaje->estado = 'L';

		$mensaje->update();

		return View::make('mensajes.detalle',array('mensaje' =>$mensaje));
	}

 

}
