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
	public static function mas_vistos(){
		return Objeto::all()->take(6) ;
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
	public function getCodigo(){

		return str_pad($this->sala->id, 3, "0", STR_PAD_LEFT).str_pad($this->id, 5, "0", STR_PAD_LEFT);
	}
}
