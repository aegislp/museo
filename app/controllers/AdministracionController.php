 <?php

	class AdministracionController extends \BaseController {



		public function __construct()
    	{
        	$this->beforeFilter('auth.basic'); 
     
    	}
		public function getIndex(){
			return "Index";
		}

	}