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

	 	
		public function getEditarObjetos($sala){

			$sala  = Sala::findOrFail($sala);
			return View::make('administracion.editar_objetos',array('sala'=>$sala));
		}
		public function postEditarObjetos($sala){
			 
			try{
				$sala  = Sala::findOrFail($sala);
				$file = Input::file('portada');
				$objeto = new Objeto( );	

				if($objeto->isValid(Input::all())){
					$objeto->fill(Input::all());	 
					$sala->objetos()->save($objeto);	 
				}else{
					throw new Exception("Datos no validos", 1);
					
				}
				
				 
				$directorio = public_path().'/assets/img/salas/'.$sala->id.'/objetos/';
				$upload_success = $file->move($directorio, $objeto->id.'.jpg');
				 
				if( !$upload_success ) {
					$errores['Archivo no subido'];    
				}  		
			}catch(Exception $e){
				if($e->getCode() == 1){
					$errores = $objeto->errores; 

				}
			}
				

			return View::make('administracion.editar_objetos',array('sala'=>$sala))->withErrors($errores);  
		}
	}