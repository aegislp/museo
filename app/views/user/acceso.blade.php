@extends('layout')

@section('contenedor')
<style type="text/css">
 
 
	.container-fluid{
		 
		text-align: center;
		padding-left: 0px !important;
    	padding-right: 0px !important;
    	height: 100%;


	}
	 img{
	 	width: 100%;
	 }
	 
	.row,.col-md-12{
		 
		 
		padding:0px !important;
		margin:0px !important;
	}
	.botones{
		background-color: #2d2d2d !important;
		padding-top: 1em 0em 1em 0em!important;
		color:#FFF;

	}
	a{
		 
		height: 4em;
		display: block;
		padding: 1em;
		color: white !important;
		
	}
	.btn_dos{
		background-color: #F0523F;
		color: white !important;
		font-weight: bold !important;
	}
	.btn_tres{
		background-color: #2d2d2d;
	}
 	small{
 		color:white;
 	}
	button{
		background-color: #F0523F !important;
		color:white !important; 
	}
</style>
<div class="container-fluid" id="cont_acceso">
		 
	<div class="row" id="imagen_acceso">
		<div class="col-md-12" style="overflow:hidden">
			{{HTML::image('assets/img/aviso.png','',array('class'=>'img-responsive'))}}
		</div>
		
	</div>
	<div class="maskara"></div>
	<div class="row botones">
		
		<div class="col-sm-12 col-md-8">
			<h4>Ingresa tu usuario para una mejor experiencia!!</h4>
			  @if ($errors->any())
			    <div class="alert alert-danger">
			      <button type="button" class="close" data-dismiss="alert">&times;</button>
			      <strong>Ocurrio un error</strong>
			      <ul>
			      @foreach ($errors->all() as $error)
			        <li>{{ $error }}</li>
			      @endforeach
			      </ul>
			    </div>
			  @endif 
			{{Form::open(array('url'=> URL::to('login') ,'method'=>'POST'))}} 

				<div class="form-group">
			     	{{Form::email('email','Ingrese su email',array('class'=>'form-control'))}}
			   	</div>
			  	<div class="form-group">
			    	{{Form::password('pass', array('class'=>'form-control'))}}
			    </div>
			  	{{Form::hidden('origen','acceso')}}
			   	<button type="submit" class="btn btn-default">Ingresar</button>
			{{Form::close()}}

		</div>
		<div class="col-md-4">
			<h4>¿No tienes Usuario?</h4>
		
			<a class="btn_dos" href="{{  URL::action('UsersController@getRegistro')}}">Registrate</a>
			<a class="btn_tres" href="{{ URL::action('UsersController@getOmitirRegistro')}}">Omitir este paso</a>
		</div>
	</div>	 

</div>	 
	
	 
@stop