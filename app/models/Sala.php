<?php 

	class Sala extends Eloquent 
	{
		
		public $errors;
		protected $fillable = array('numero', 'nombre', 'descripcion');

		public function objetos(){

			return $this->hasMany('Objeto');
		}
		public function categorias(){

			return $this->hasMany('Categoria');
		}

		public static function getActivas(){

			//return DB::table('salas')->where('activa','=',1)->get();
			return Sala::with('objetos')->where('activa','=',1)->get();
		}
		public function activa(){
			$var = "desactiva";
			if($this->activa){
				$var = "activa";
			}
			return $var;
		}
		public function isValid($data){
			
			$rules = array(
            	'numero' => 'required|unique:salas,numero',
            	'nombre' => 'required|min:2|max:200', 
            	'descripcion' => 'required|min:2|max:200'  
            );
        
        	$validator = Validator::make($data, $rules);
        
        	if (!$validator->passes()){
        		$this->errors = $validator->errors();
     
     	   	}
         	
         	return $validator->passes();
		}
	}

?>	