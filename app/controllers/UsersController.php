<?php

class UsersController extends BaseController {

	
	 
	public function login(){

	 	$campos = array('email' => Input::get('email'), 'password' => Input::get('pass'));


	 	if (Auth::attempt($campos)){
	 		Session::put('omitir',true);
		    return Redirect::route('home');
		}else{
			$error = array('error'=>'Usuario o password incorrecto');
			if(Input::get('origen') =='acceso'){
				return Redirect::action('UsersController@getAcceso')->withInput()->withErrors($error);
			}else{
				return Redirect::route('home')->withInput()->withErrors($error);
			}
			 	 
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
	public function getNavegacion(){
		return View::make('user.navegacion',array('navegacion'=>Punto::with('Sala')));
	}

	public function getAudio($punto){
		
		$punto = Punto::find($punto);
		Session::put('nav-'.$punto->id,true);
		 
		return View::make('user.guiaaudio',array('audio'=>'inicio'));
		//return View::make('user.guiaaudio',array('audio'=>$punto->id));
	}
	public function getOmitirRegistro(){
		
		 
		Session::put('omitir',true);
		 
		return Redirect::home();
	}
	public function getAcceso(){
		return View::make('user.acceso');

	}
	public function getFormLogin(){
		return View::make('user.login');

	}

}
