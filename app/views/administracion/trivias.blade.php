@extends('adminLayout')
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
				Trivias :
			</a>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	            <li id="btn_objeto_nuevo">
	            	<a   data-toggle="collapse"  href="#colapseone">
	            		<span class="glyphicon glyphicon-plus"></span>
			   			Agregar
			   		</a>
			   	</li>
	        </ul>
	   
	</nav>
 
	 
	<div id="formulario_objeto" style="display:none" >
		{{ Form::open( array('method' => 'POST' ,'id'=>'form_trivia') ) }}
		 
		  	<div class="form-group">
		    	{{ Form::label('pregunta', 'Pregunta') }}
		    	{{ Form::text('pregunta', null,array('class' => 'required form-control')) }}
		    
		  	</div>
			<div class="form-group">
			    {{ Form::label('opcion1', 'Opcion 1') }}
			    {{ Form::text('opcion1', null,array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
			    {{ Form::label('opcion2', 'Opcion 1') }}
			    {{ Form::text('opcion2', null,array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
			    {{ Form::label('opcion3', 'Opcion 1') }}
			    {{ Form::text('opcion3', null,array('class' => 'form-control')) }}
			</div>
		 	 
		 	<div class="form-group">
		 		{{ Form::label('respuesta', 'Respuesta') }}  	
			   	{{ Form::select('respuesta', array(1 => 1, 2 =>2,3=>3),1) }}  
			</div>
			 
			
	 		  <div class="form-group">
			   {{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-primary' )) }}  
			   {{ Form::button('Cancelar', array('type' => 'button', 'class' => 'btn btn-default','id'=>'btn_cancelar_obj')) }}  

			  </div>
	 				
		{{ Form::close() }}
		
	</div>
	<table class="table"> 
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
					<td style="text-align:right">
						<button id="{{$trivia->id}}" type="button" class="btn-trivia btn btn-sm btn-default" rel="{{URL::action('AdminSalasController@postEliminarTrivia')}}">
						<span class="glyphicon glyphicon-trash"></span>
						</button>
					</td>
				</tr>
		  	@endforeach
  		</tbody>
 	</table>
@stop	