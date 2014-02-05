@extends('base')

@section('contenido')
    @include('nav',array('nav'=> array('home'=>URL::route('home'),'Objetos' =>'')))

    {{Form::open(array('method'=>'post','role'=>'search'))}}
    	<div class="col-xs-10">
    		<input class="form-control input-lg" type="text" placeholder="codigo de objeto" name="codigo">
    	</div>
    	<button type="submit" class="btn btn-default btn-lg">
    		<i class="fa fa-search"></i> <span id="span_busqueda"> Buscar</span>

    	</button>
    {{Form::close()}}
 <br><br>
    @if ($errors->any())
	    <div class="alert alert-danger">
	      <button type="button" class="close" data-dismiss="alert">&times;</button>
	      <strong>No se encontraron resultados para el codigo:</strong>
	      <ul>
	      @foreach ($errors->all() as $error)
	        <li>{{ $error }}</li>
	      @endforeach
	      </ul>
	    </div>
  	@endif 

 <br><br>


    <div class="panel panel-default"  >
        <div class="panel-heading">Destacados</div>
        <div class="panel-body">
            @foreach($destacados as $objeto) 
                 <div class="col-xs-6 col-md-3">
                    <a   rel="{{URL::action('ObjetosController@getDetalle',$objeto->id)}}"  class="btn_objetos thumbnail">
                         {{HTML::image('assets/img/salas/'.$objeto->sala->id.'/objetos/'.$objeto->id.'_s.jpg')}}
                     </a>
                </div>

            @endforeach 

        </div>
    </div>
    
<div id="detalle_objeto"></div>  
@stop