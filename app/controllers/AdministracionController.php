 <?php

	class AdministracionController extends \BaseController {



		public function __construct(){
        	
         
        	$this->beforeFilter('administrador'); 
     
    	}
		public function getIndex(){


			$cantidades = array( 	
				'cant_usuarios' => User::cantidad_usuarios(),
				'cant_mensajes' =>Mensaje::cant_no_leidos(),
				'cant_salas' => Sala::cantidad(),
				'cant_objetos'=> Objeto::cantidad(),
				'estadisticas'=> Estadistica::all()
			);
			return View::make('administracion.index',$cantidades) ;
		}

		public function getUsuarios(){

			$usuarios = User::getUsuarios();
			 
			return View::make('administracion.usuarios',array('usuarios'=>$usuarios ));
		}
		public function getMensajes(){
			$mensajes = Mensaje::orderBy('created_at','desc')->get();

 			return View::make('administracion.mensajes',array('mensajes'=>$mensajes)) ;

		}
 
 		public function postMensajes(){
			$mensaje = Mensaje::findOrFail(Input::get('mensaje'));
 			$mensaje->delete();
 			return Redirect::action('AdministracionController@getMensajes')->with('mensaje','Se borro el mensaje correctamente');

		}
		public function postUsuarios(){
			$usuario = User::findOrFail(Input::get('usuario'));
 			$usuario->delete();
 			return Redirect::action('AdministracionController@getUsuarios')->with('mensaje','Se borro el usuario correctamente');

		}
	 	public function getEstadisticas(){
			$cantidades = array( 	
				 
				'estadisticas'=> Estadistica::all()
			);
			return View::make('administracion.estadisticas',$cantidades) ;

		}
		
	}