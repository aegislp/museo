@extends('base')

@section('contenido')
 
		<div class="row mt centered">
		    <div class="col-lg-4 col-lg-offset-1">
		     
		       {{HTML::image('assets/img/404.png')}}
		     </div>
		      <div class="col-lg-4">
		       <h1>Error 404 <br> Pagina no encontrada !!!</h1>
		       
		       <h3>En cada búsqueda apasionada, la búsqueda cuenta más que el objeto perseguido.<br>
		           <strong>Eric Hoffer</strong>

		       </h3>
		      	<a href="{{ URL::route('home')}}" type="button" class="btn btn-primary clearfix">Volver</a>
		      </div>
		</div>  
 
@stop