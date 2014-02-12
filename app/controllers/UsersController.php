<?php

class UsersController extends BaseController {

	 public function login(){

	 	$campos = array('email' => Input::get('email'), 'password' => Input::get('pass'));
	 	if (Auth::attempt($campos)){
		    return Redirect::route('home');
		}else{
			echo "Usuario no loguead";
		}
	 }

	 public function logout(){

	 	Auth::logout();
	 	return Redirect::route('home');
	 } 

	 public function getRegistro(){

	 	return View::make('user.registro');
	 }
	public function postRegistro(){


	 	$user = new User;

	 	print_r(Input::all());
	 	
	 	if( $user->datos_validos(Input::all()) ){

	 		$user->fill(Input::all());
	 		$user->save();
	 		 
	 		return Redirect::route('home');
	 	} 

	 	return Redirect::action('UsersController@getRegistro')->withInput()->withErrors($user->errores);
	} 
}
