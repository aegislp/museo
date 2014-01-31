<?php

class AdminSalasController extends BaseController {

	
	public function __construct(){
    	
    	$this->beforeFilter('auth.basic'); 
 
	}
	public function getIndex(){
		
		return View::make('administracion.salas',array('salas'=>Sala::all()));
	}

	public function getEditar($sala_id = null ){

		$sala  = Sala::firstOrNew( array('id'=>$sala_id));
		return View::make('administracion.editar_sala',array('sala'=>$sala));
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

			/* ipload de imagenes de la galeria*/	
			$directorio = public_path().'/assets/img/salas/'.$sala->id.'/galeria/';
			$fotos = Input::file('archivos',array());
			$contador = count(File::glob($directorio."*_b.jpg"));
				
			foreach ($fotos as  $foto) {
				$foto->move($directorio,$contador."_b.jpg");
				$thumb = Image::make($directorio.$contador."_b.jpg")->resize(150, null,true)->save($directorio.$contador++.'_s.jpg');
			}
				 
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
		return View::make('administracion.trivias',array('sala'=>$sala));
	}
	
	public function postTrivias($sala_id){
		$sala = Sala::findOrFail($sala_id);
		$trivia = new Trivia;
		$trivia->fill(Input::all());
		$trivia->save();

		$sala->trivias()->save($trivia);

		return View::make('administracion.trivias',array('sala'=>$sala));
	}

	public function postEliminarTrivia(){
		
		$trivia = Trivia::find(Input::get('trivia'));
		$trivia->delete();
		 
		return Redirect::action('AdminSalasController@getTrivias',$trivia->sala->id);
	}

}
