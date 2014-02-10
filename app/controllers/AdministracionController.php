 <?php

	class AdministracionController extends \BaseController {



		public function __construct(){
        	
         
        	$this->beforeFilter('administrador'); 
     
    	}
		public function getIndex(){

			 
			return View::make('administracion.index') ;
		}

		public function getUsuarios(){

			$usuarios = User::getUsuarios();
			 
			return View::make('administracion.usuarios',array('usuarios'=>$usuarios ));
		}
		public function postUsuarios(){
			$usuario = User::findOrFail(Input::get('usuario'));
 			$usuario->delete();
 			return Redirect::action('AdministracionController@getUsuarios')->with('mensaje','Se borro el usuario correctamente');

		}
 

	 	
		
	}