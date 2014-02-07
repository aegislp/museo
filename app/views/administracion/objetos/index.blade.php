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
<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title">Informacion de la sala</h3>
  	</div>
	<div class="panel-body">
	    <div class="col-md-3">
		    <a href="#" class="thumbnail">
		      {{HTML::image('assets/img/salas/'.$sala->id.'/portada.png')}}
		    </a>
		</div>
		<div class="caption col-md-9">
	    	<h3>Sala {{$sala->numero}} : {{$sala->nombre}}  </h3>
	        <h3>Objetos :{{count($sala->objetos)}}</h3>
	        <h3>Puntos : 0  </h3>
	    </div>
		  
	</div>
</div>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">
        	<span class="glyphicon glyphicon-wrench"></span>
			Objetos :
		</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
	    <li>
	    	<a href="{{URL::action('AdminObjetosController@getCrear',$sala->id)}}">
	    		<span class="glyphicon glyphicon-plus"></span>
	   			Agregar
	   		</a>
	   	</li>
	</ul>
   
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
 


<div class="bs-callout bs-callout-warning  alert-dismissable" id="alert_eliminar_obj" style="display:none">
	{{Form::open(array('method'=>'post','url'=> URL::action('AdminObjetosController@postEliminar') ))}} 
    <h4>Atencion!!!</h4>
    <p>¿Quiere eliminar el objeto?</p>
    <button id="btn_ok_obj" type="submit" class="btn btn-sm btn-primary" rel="">Aceptar</button>
    <button id="btn_cancel_obj"type="button" class="btn btn-sm btn-default" data-dismiss="alert">Cancelar</button>
    {{Form::hidden('objeto',null,array('id'=>'objeto'))}}
    {{Form::close()}}
</div>
@stop	