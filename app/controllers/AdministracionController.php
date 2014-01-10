 <?php

	class AdministracionController extends \BaseController {



		public function __construct(){
        	
        	$this->beforeFilter('auth.basic'); 
     
    	}
		public function getIndex(){


			$usuarios = User::getSolicitudes(5);
			return View::make('administracion.index',array('usuarios'=>$usuarios));
		}

		public function getUsuarios(){
			return View::make('administracion.usuarios');
		}

	}