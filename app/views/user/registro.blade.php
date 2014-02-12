@extends('base')

@section('title')  
   Museo: Registro de Usuario   
@stop

@section('contenido')

	@include('nav',array('nav'=> array('home'=>URL::route('home'),'registro'=>'')))
	
	<div class="rows">
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
	{{ Form::open(array( 'method' => 'POST', 'id'=>'form_registro') ) }}
     	<div class="col-lg-6 col-lg-offset-1">
	 	
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
 		</div>
  	</div>
  

	{{Form::close()}}


@stop

