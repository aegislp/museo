<?php 

	class Sala extends Eloquent 
	{
		
		public 		$errores;
		protected 	$fillable = array('numero', 'nombre', 'descripcion');

		public function puntos(){
			return $this->hasMany('Objeto');
		}
		public function objetos(){
			return $this->hasMany('Objeto');
		}
		public function categorias(){
			return $this->hasMany('Categoria');
		}
		public function trivias(){
			return $this->hasMany('Trivia');
		}
		public static function getActivas(){
			return Sala::with('objetos')->where('activa','=',1)->get();
		}
		
		 
		public function isValid($data){
			
			$rules = array(
            	'numero' => 'required|unique:salas,numero,'.$this->id,
            	'nombre' => 'required|min:2|max:200', 
            	'descripcion' => 'required|min:2'  
            );
        
        	$validator = Validator::make($data, $rules);
        
        	if (!$validator->passes()){
        		$this->errores = $validator->errors();
     
     	   	}
         	
         	return $validator->passes();
		}
		public static function cantidad(){
			return DB::table('salas')->count();
		}
		public static function destacadas(){
			return Sala::with('objetos')->where('activa','=',1)->get();
		}
	}

?>	