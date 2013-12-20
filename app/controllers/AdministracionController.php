 <?php

	class AdministracionController extends \BaseController {



		public function __construct()
    	{
        	$this->beforeFilter('auth.basic'); 
     
    	}
		public function getIndex(){


			$usuarios = User::getSolicitudes();
			return View::make('administracion.index',array('usuarios'=>$usuarios));
		}

	}