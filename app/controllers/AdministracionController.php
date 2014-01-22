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

		public function getSalas(){
			$salas = Sala::all();

			$sala = new Sala;
			return View::make('administracion.salas',array('salas'=>$salas,'sala'=>$sala));
		}
		public function postSalas(){
			$errores = null;
			try {
				
				$sala = new Sala;
			 	if($sala->isValid(Input::all())){

					$sala->fill(Input::all());
					$sala->save();				
				}else{
					throw new Exception( "Error campos no validos", 700);
					
				}

			} catch (Exception $e) {

				if($e->getCode() == 700){
					$errores = $sala->errors;	
				}else{
					$errores =  array('error'=>'Error al grabar la sala '.$e);
				}
				
 


			}
			
			 return Redirect::action('AdministracionController@getSalas')->withInput()->withErrors($errores);
		}
		public function getEditarSala($sala){

			$sala  = Sala::findOrFail($sala);
			return View::make('administracion.editar_sala',array('sala'=>$sala));
		}
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