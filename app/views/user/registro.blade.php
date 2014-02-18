@extends('base')

@section('title')  
   Museo: Registro de Usuario   
@stop
 
@section('contenido')

	@include('nav',array('nav'=> array('inicio'=>URL::route('home'),'registro'=>'')))
	
	<div class="rows">
	
  		<div class="col-lg-6 col-lg-offset-1">
  		<h1><i class="fa fa-user fa-6"></i>Registro de nuevo usuario.</h1>	
  		<hr>	
		{{ Form::open(array( 'method' => 'POST', 'id'=>'form_registro') ) }}
     		@if ($errors->any())
		    <div class="alert alert-danger">
		      	<button type="button" class="close" data-dismiss="alert">&times;</button>
		      	<strong>Por favor corrige los siguentes errores:</strong>
		      	<ul>
		      		@foreach ($errors->all() as $error)
		        	<li>{{ $error }}</li>
		      		@endforeach
		      	</ul>
		    </div>
		  	@endif
	 	
		 	<div class="form-group">
				{{ Form::label('usuario', 'Usuario') }}
				{{ Form::text('usuario', null,array('class' => 'required form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('email', 'Email') }}
				{{ Form::email('email', null,array('class' => 'form-control')) }}
			</div>
		 	<div class="form-group">
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password', array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('password_confirmation', 'Repital el password') }}
				{{ Form::password('password_confirmation',array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				 
				{{ Form::submit('Registrarse',array('class' => 'btn btn-lg pull-right btn-warning')) }}
			</div>

			{{Form::close()}}

 		</div>
 		<div class="col-lg-5">
 			{{HTML::image('assets/img/registro.png')}}
 		</div>
  	</div>
  

	

@stop

