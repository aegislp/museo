<?php

class Objeto extends Eloquent {
	public $errores;
	protected $guarded = array();

	public static $rules = array();
	protected $fillable = array('nombre', 'nombre_cientifico', 'categoria_id','descripcion');

	public function sala()
	{
		return $this->belongsTo('Sala');
	}

	public function categoria()
	{
		return $this->belongsTo('Categoria');
	}
	public static function getObjetoAzar($sala_id){
		return Objeto::where('sala_id','=',$sala_id)->orderBy(DB::raw('RAND()'))->first();
	}

	public function datos_validos($datos){
		$rules = array(
            'nombre' => 'required|min:2|max:200', 
            'nombre_cientifico' => 'required|min:2|max:200', 
            'descripcion' => 'required|min:2'  
        );
        
       	$validator = Validator::make($datos, $rules);
        
     	if (!$validator->passes()){
       		$this->errores = $validator->errors();
       	}
         	
        return $validator->passes();
	}
	public static function cantidad(){
		return DB::table('objetos')->count();
	}
}
