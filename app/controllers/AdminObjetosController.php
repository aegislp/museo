<?php

class AdminObjetosController extends BaseController {

	
	public function index($sala_id)
	{
		$sala = Sala::findOrFail($sala_id);	
        return View::make('administracion.objetos.index',array('sala'=>$sala));
	}

	public function getCrear($sala_id){
		$sala = Sala::findOrFail($sala_id);
		$objeto = new Objeto;
		return View::make('administracion.objetos.editar',array('objeto'=>$objeto, 'sala'=>$sala));
	}
	public function getEditar($objeto_id= null){
		$objeto = Objeto::firstOrNew(array('id'=>$objeto_id));	
	 
        return View::make('administracion.objetos.editar',array('objeto'=>$objeto,'sala'=>$objeto->sala));
	}
	public function postEditar(){
		$errores = array();
		try {
			$sala 	= Sala::findOrFail(Input::get('sala_id'));
			$objeto = Objeto::firstOrNew(array('id'=>Input::get('objeto_id')  ));

			if(!$objeto->datos_validos(Input::all())){	
				$errores = $objeto->errores();
				throw new Exception("Datos no validos", 1);
			}

			$objeto->fill(Input::all());
			$objeto->save();

			/* ipload de imagenes de la galeria*/	


			if(Input::file('portada')){

				File::delete('assets/img/salas/'.$sala->id.'/objetos/'.$objeto->id.'_s.jpg');
		 		File::delete('assets/img/salas/'.$sala->id.'/objetos/'.$objeto->id.'_b.jpg');
		 
				$directorio = public_path().'/assets/img/salas/'.$sala->id.'/objetos/';
				$foto = Input::file('portada');
				$foto->move($directorio,$objeto->id."_b.jpg");
				$thumb = Image::make($directorio.$objeto->id."_b.jpg")->resize(150, null,true)->save($directorio.$objeto->id.'_s.jpg');
			}
			/*--------------------------------------*/	 

			$sala->objetos()->save($objeto);

		} catch (Exception $e) {
			
			if( $e->getCode()!= 1){
				$errores[] = "error al guardar el objeto $e";
			}
		}
		 
		return Redirect::action('AdminObjetosController@index', array('sala_id'=>$sala->id))->withErrors($errores);

	}
	public function postEliminar(){
		 $objeto = Objeto::findOrFail(Input::get('objeto'));
		 $sala_id = $objeto->sala->id;

		 File::delete('assets/img/salas/'.$sala_id.'/objetos/'.$objeto->id.'_s.jpg');
		 File::delete('assets/img/salas/'.$sala_id.'/objetos/'.$objeto->id.'_b.jpg');
		 

		 $objeto->delete();
		 return Redirect::action('AdminObjetosController@index',array('sala_id'=>$sala_id));
	}

}
