@extends('adminLayout')


@section('titulo_admin')
	Trivias <small> cree y administre las trivias de las sala - {{$sala->nombre}}</small>
@stop

@section('navegacion')
	<li>
		<a href="{{URL::action('AdministracionController@getIndex')}}"><i class="fa fa-cog"></i> Panel</a>
	</li>
    <li>
		<a href="{{URL::action('AdminSalasController@getIndex')}}"><i class="fa fa-home"></i> Salas</a>
	</li>
    <li class="active"><i class="fa fa-table"></i> Trivias</li>
@stop


@section('contenido')
 
	@include('administracion.header_sala', array('sala'=>$sala))
 	
 	<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <a class="navbar-brand" href="#">
	        	<span class="glyphicon glyphicon-lists"></span>
				Trivias
			</a>
	    </div>
	    <div class="collapse navbar-collapse navbar-ex1-collapse">
	        <ul class="nav navbar-nav navbar-right">
	            <li id="btn_nueva_trivia">
	            	<a    data-toggle="collapse"  href="#formulario_objeto">
	            	<span class="glyphicon glyphicon-plus"></span>Nueva
			   	</a>
			   	</li>
	        </ul>
	    </div>
	   
	</nav>

	<div id="formulario_trivia" style="display:none"  class="rows">
		{{ Form::open( array('method' => 'POST' ,'id'=>'form_trivia') ) }}
		 
		  	<div class="form-group col-lg-12">
		    	{{ Form::label('pregunta', 'Pregunta') }}
		    	{{ Form::text('pregunta', null,array('class' => 'required form-control')) }}
		    
		  	</div>
			<div class="form-group col-lg-3">
			    {{ Form::label('opcion1', 'Opcion 1') }}
			    {{ Form::text('opcion1', null,array('class' => 'form-control')) }}
			</div>
			<div class="form-group col-lg-3 col-lg-offset-1">
			    {{ Form::label('opcion2', 'Opcion 2') }}
			    {{ Form::text('opcion2', null,array('class' => 'form-control')) }}
			</div>
			<div class="form-group col-lg-3 col-lg-offset-1">
			    {{ Form::label('opcion3', 'Opcion 3') }}
			    {{ Form::text('opcion3', null,array('class' => 'form-control')) }}
			</div>
		 	 
		 	<div class="form-group col-lg-12" style="border-bottom:1px solid #CCCCCC !important">
		 		{{ Form::label('respuesta', 'Respuesta') }}  	
			   	{{ Form::select('respuesta', array(1 => 1, 2 =>2,3=>3),1) }}  
			</div>
			 
			 
	 		  <div class="form-group col-lg-12" style="text-align:right">
			   {{ Form::submit('Guardar', array('class' => 'btn btn-primary' )) }}  
			   {{ Form::button('Cancelar', array('type' => 'button', 'class' => 'btn btn-default','id'=>'btn_cancelar_obj')) }}  

			  </div>
	 				
		{{ Form::close() }}
		
	</div>

	@if(count($sala->trivias) > 0)
	<table class="table table-striped" id="tabla-trivias"> 
		<thead>
			<th>#</th><th>Pregunta</th><th>Opcion 1</th><th>Opcion 2</th><th>Opcion 3</th><th>Solucion</th><th></th>
		</thead>
		<tbody>
			@foreach ($sala->trivias as $numero => $trivia)
				<tr>
					<td>{{$numero+1}}</td>
					<td>{{$trivia->pregunta}}</td>
					<td>{{$trivia->opcion1}}</td>
					<td>{{$trivia->opcion2}}</td>
					<td>{{$trivia->opcion3}}</td>
					<td>{{$trivia->respuesta}}</td>
					<td>
						<button id="{{$trivia->id}}" type="button" class="btn-trivia btn btn-sm btn-default pull-right" rel="{{URL::action('AdminSalasController@postEliminarTrivia')}}">
						<span class="glyphicon glyphicon-trash"></span>
						</button>
					</td>
				</tr>
		  	@endforeach
  		</tbody>
 	</table>
 	@else
 	<div class="alert alert-warning alert-dismissable" id="tabla-trivias">
  		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  		<strong>Atencion!</strong> La sala no posee ninguna trivia.
	</div>

 	@endif
@stop	