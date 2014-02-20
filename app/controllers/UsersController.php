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

 	 	
	 	if( $user->datos_validos(Input::all()) ){

	 		$user->fill(Input::all());
	 		$user->password = Hash::make($user->password);
	 		$user->save();

	 		Auth::login($user);
	 		Event::fire('user.registro', array($user)); 
	 		return Redirect::route('home');
	 	} 

	 	return Redirect::action('UsersController@getRegistro')->withInput()->withErrors($user->errores);
	} 
}
