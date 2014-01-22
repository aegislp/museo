@extends('adminLayout')
@section('contenido')

<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <a class="navbar-brand" href="#">
	        	<span class="glyphicon glyphicon-wrench"></span>
				Datos de la sala
			</a>
	    </div>
	       <ul class="nav navbar-nav navbar-right">
	            <li id="btn_sala_nueva">
	            	<a   data-toggle="collapse"  href="#colapseone">
	            		<span class="glyphicon glyphicon-floppy-disk"></span>
			   			Guardar
			   		</a>
			   	</li>
	        </ul>
	   
	</nav>
	<div id="formulario_sala"  >
		{{ Form::model($sala,array(   'method' => 'POST', 'id'=>'form_sala') ) }}
			 <div class="row">  
			  <div class="col-lg-2">
			  	<div class="form-group">
			    	{{ Form::label('numero', 'Numero de sala') }}
			    	{{ Form::text('numero', null,array('class' => 'required form-control')) }}
			    
			  	</div>
				</div>
				<div class="col-lg-10">
			  <div class="form-group">
			    {{ Form::label('nombre', 'Nombre') }}
			    {{ Form::text('nombre', null,array('class' => 'form-control')) }}
			    
			  </div>
				</div>
			</div>  
			  <div class="form-group">
			    {{ Form::label('descripcion', 'Descripcion') }}
			    {{ Form::textarea('descripcion', null,array('class' => 'form-control','rows'=>6)) }}

			  </div>
	 
		{{ Form::close() }}
		
	</div>
	 
 
@stop	