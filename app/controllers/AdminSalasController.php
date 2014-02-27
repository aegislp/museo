<?php

class AdminSalasController extends BaseController {

	
	public function __construct(){
    	
    	$this->beforeFilter('auth.basic'); 
 
	}
	public function getIndex(){
		
		return View::make('administracion.salas.index',array('salas'=>Sala::all()));
	}

	public function getEditar($sala_id = null ){

		$sala  = Sala::firstOrNew( array('id'=>$sala_id));
		return View::make('administracion.salas.editar',array('sala'=>$sala));
	}
	
	public function postEditar($sala = null ){
		$errores  = "";
			
		try{
				
			$sala  = Sala::firstOrNew(  array('id'=>Input::get('id_sala')) );
				
			if(!$sala->isValid(Input::all())){ 
				$errores = $sala->errores;
				throw new Exception( "Error campos no validos", 700);
			}	
			
			$sala->fill(Input::all());
			$sala->save();

			/* upload de imagenes de la galeria*/	
			$directorio = public_path().'/assets/img/salas/'.$sala->id.'/galeria/';
			$fotos = Input::file('archivos',array());
			$contador = count(File::glob($directorio."*_b.jpg"));
				
			foreach ($fotos as  $foto) {
				$foto->move($directorio,$contador."_b.jpg");
				$thumb = Image::make($directorio.$contador."_b.jpg")->resize(150, null,true)->save($directorio.$contador++.'_s.jpg');
			}
				 
			//imagen de portada
			
			//Image::make($directorio.Input::get('portada'))->resize(150, 150,true)->save($directorio.'portada.jpg');		 
			/*--------------------------------------*/	 
			
			return Redirect::action('AdminSalasController@getIndex')->with('nueva',$sala);
			
		}catch (Exception $e) {
		
			if($e->getCode() != 700){
				$errores ="Error al guarda $e";
			}
							 
			return Redirect::action('AdminSalasController@getEditar')->withInput()->withErrors($errores);
		}
	}
	
	public function postEliminarImagenSala($imagen){
			 
		try {
			$sala = Sala::findOrFail(Input::get('sala'));
			File::delete('assets/img/salas/'.$sala->id.'/galeria/'.$imagen);
			File::delete('assets/img/salas/'.$sala->id.'/galeria/'.str_replace('s', 'b', $imagen));

			$respuesta['code'] = 'ok';
			$respuesta['imagen'] = str_replace('.','',$imagen);
		} catch (Exception $e) {
			$respuesta['code'] = -1;
			$respuesta['mensaje'] = -"Error al borrar imagen";
		}
			
		return  Response::json($respuesta);
	}

	public function postActivarSala($sala_id){
		
		$sala = Sala::findOrFail($sala_id);
		$sala->activa = !$sala->activa; 
		$sala->save();
			
		$respuesta['activa'] = $sala->activa;
		$respuesta['codigo'] = 'ok';

		return Response::json($respuesta);
	}

	public function getTrivias($sala_id){
		$sala = Sala::findOrFail($sala_id);
		return View::make('administracion.salas.trivias',array('sala'=>$sala));
	}
	
	public function postTrivias($sala_id){
		$sala = Sala::findOrFail($sala_id);
		$trivia = new Trivia;
		$trivia->fill(Input::all());
		$trivia->save();

		$sala->trivias()->save($trivia);

		return View::make('administracion.salas.trivias',array('sala'=>$sala));
	}

	public function postEliminarTrivia(){
		
		$trivia = Trivia::find(Input::get('trivia'));
		$trivia->delete();
		return Redirect::action('AdminSalasController@getTrivias',$trivia->sala->id);
	}

	public function getEditarObjetos($sala_id){

			$sala  = Sala::findOrFail($sala_id);
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
