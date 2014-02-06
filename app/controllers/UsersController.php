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

}
