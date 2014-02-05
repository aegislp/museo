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

			$usuarios = User::getUsuarios();
			$solicitudes = User::getSolicitudes();
			return View::make('administracion.usuarios',array('usuarios'=>$usuarios,'solicitudes'=>$solicitudes));
		}

		/*------------------------------------  administracion de salas -------------------------------------*/
		
	/*------------------------------------------------------------------------------------------------------*/	

	 	
		
	}