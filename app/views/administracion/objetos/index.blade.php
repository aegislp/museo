@extends('adminLayout')

@section('titulo_admin')
	Objetos <small> crear y eliminar objetos para la sala {{$sala->nombre}}</small>
@stop

@section('navegacion')
	<li><a href="index.html"><i class="fa fa-cog"></i> Panel</a></li>
    <li class="active"><i class="fa fa-table"></i> Salas</li>
    <li class="active"><i class="fa fa-table"></i> Objetos</li>
@stop

@section('contenido')

	@include('administracion.header_sala',array('sala'=>$sala))

	<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <a class="navbar-brand" href="#">
	        	<span class="glyphicon glyphicon-wrench"></span>
				Objetos:
			</a>
	    </div>
	    <div class="collapse navbar-collapse navbar-ex1-collapse">
	        <ul class="nav navbar-nav navbar-right">
	            <li id="btn_sala_nueva">
	            	<a href="{{URL::action('AdminObjetosController@getCrear',$sala->id)}}">
	            		<span class="glyphicon glyphicon-plus"></span>
			   			Nueva
			   		</a>
			   	</li>
	        </ul>
	    </div>
	   
	</nav>

 
	 @if ($errors->any())
	    <div class="alert alert-danger">
	      <button type="button" class="close" data-dismiss="alert">&times;</button>
	      <strong>Ocurrio un error al grabar la sala:</strong>
	      <ul>
	      @foreach ($errors->all() as $error)
	        <li>{{ $error }}</li>
	      @endforeach
	      </ul>
	    </div>
	 @endif 
	 
 	
 	@if(count($sala->objetos) > 0 )   
		@foreach ($sala->objetos as $objeto)
		<div class="thumbnail objeto">
			{{HTML::image('assets/img/salas/'.$sala->id.'/objetos/'.$objeto->id.'_s.jpg','salas')}}
		  	<div class="caption">
		    	<h3 style="display:inline-block">{{$objeto->nombre}}</h3> 
		    	<div class="btn-group" style="float:right">
					<button type="button" class="btn_eliminar_obj btn btn-default" rel="{{$objeto->id}}"> 
						<span class="glyphicon glyphicon-trash"></span>   
					</button>
					<a type="button" class="btn btn-default" href="{{URL::action('AdminObjetosController@getEditar',$objeto->id)}}"> 
						<span class="glyphicon glyphicon-pencil"></span>
					</a>
				</div>
		    	<p>{{$objeto->descripcion}}</p>
		 
		  	</div>
		</div>
		@endforeach
	 
	@else
		<div class="alert alert-warning alert-dismissable" id="tabla-trivias">
  			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  			<strong>Atencion!</strong> La sala no posee objetos.
		</div>

	@endif

<div class="bs-callout bs-callout-warning  alert-dismissable" id="alert_eliminar_obj" style="display:none">
	{{Form::open(array('method'=>'post','url'=> URL::action('AdminObjetosController@postEliminar') ))}} 
    <h4>Atencion!!!</h4>
    <p>¿Quiere eliminar el objeto?</p>
    <button id="btn_ok_obj" type="submit" class="btn btn-sm btn-primary" rel="">Aceptar</button>
    <button id="btn_cancel_obj"type="button" class="btn btn-sm btn-default">Cancelar</button>
    {{Form::hidden('objeto',null,array('id'=>'objeto'))}}
    {{Form::close()}}
</div>
@stop	