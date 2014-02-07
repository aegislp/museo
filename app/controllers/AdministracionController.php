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
 

	 	
		
	}