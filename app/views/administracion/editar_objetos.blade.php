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
				Objetos :
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
		{{ Form::open( array('method' => 'POST',  'files'=>true) ) }}
		 
		  	<div class="form-group">
		    	{{ Form::label('nombre', 'Nombre') }}
		    	{{ Form::text('nombre', null,array('class' => 'required form-control')) }}
		    
		  	</div>
			<div class="form-group">
			    {{ Form::label('nombre_cientifico', 'Nombre cientifico') }}
			    {{ Form::text('nombre_cientifico', null,array('class' => 'form-control')) }}
			</div>
			
		 		
		 	<div class="form-group">
		 		{{ Form::label('categoria', 'Categoria') }}  	
			   	{{ Form::select('categoria_id', Categoria::all()->lists('nombre', 'id')) }}  
			</div>
			<div class="form-group">
		 		{{ Form::label('portada', 'Imagen principal') }}  	
			   	{{ Form::file('portada')  }}  
			</div>
			<div class="form-group">
			    {{ Form::label('descripcion', 'Descripcion') }}
			    {{ Form::textarea('descripcion', null,array('class' => 'form-control','rows'=>6)) }}

			  </div>
	 		  <div class="form-group">
			   {{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-primary' )) }}  
			   {{ Form::button('Cancelar', array('type' => 'button', 'class' => 'btn btn-default','id'=>'btn_cancelar_obj')) }}  

			  </div>
	 				
		{{ Form::close() }}
		
	</div>
	 <div class="objetos">
	@foreach ($sala->objetos as $objeto)
	  <a href="">
	  	<div class="row">
	      <div class="col-sm-6 col-md-4">
	        <div class="thumbnail objeto">
	    	{{HTML::image('assets/img/salas/'.$sala->id.'/portada.png','salas')}}
	          <div class="caption">
	            <h3>{{$objeto->nombre}}</h3>
	            <p>{{$objeto->descripcion}}</p>
	         
	          </div>
	        </div>
	      </div>
	  </div>
	</a>
	@endforeach
</div>
@stop	