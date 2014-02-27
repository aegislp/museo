@extends('adminLayout')

@section('navegacion')
	<li><a href="{{URL::action('AdministracionController@getIndex')}}"><i class="fa fa-cog"></i> Panel</a></li>
	<li><a href="{{URL::action('AdminSalasController@getIndex')}}">
		<i class="fa fa-home"></i> Salas</a>
	</li>
    <li class="active"><i class="fa fa-edit"></i> {{$sala->nombre}}</li>
@stop


@section('contenido')

<nav class="navbar navbar-default barra" role="navigation">
	<h4 style="display:inline-block"><span class="glyphicon glyphicon-home"></span>  Datos de la sala</h4>
	<button  class="btn btn-primary btn-sm navbar-btn  pull-right" type="submit">
		<span class="glyphicon glyphicon-floppy-disk"></span>
		Guardar todo
	</button>
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

{{ Form::model($sala,array( 'method' => 'POST', 'id'=>'form_sala','files'=>true) ) }}
 	{{Form::hidden('id_sala',$sala->id,array('id' => 'id_sala'))}}
	<div class="form-group">
		{{ Form::label('numero', 'Numero de sala') }}
		{{ Form::text('numero', null,array('class' => 'required form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('nombre', 'Nombre') }}
		{{ Form::text('nombre', null,array('class' => 'form-control')) }}
	</div>
 	<div class="form-group2">
		{{ Form::label('descripcion', 'Descripcion') }}
		{{ Form::textarea('descripcion', null,array('class' => 'form-control','rows'=>6)) }}
	</div>
 	
 	<div id="fotos_salas" style>
	
	</div>
	<br>

<nav class="navbar navbar-default barra" role="navigation">
	<h4 style="display:inline-block"><span class="glyphicon glyphicon-picture"></span>  Galeria</h4>
	<button    type="button" id="btn_add_foto_sala" class="btn btn-default btn-sm navbar-btn">
		<span class="glyphicon glyphicon-plus"></span>
		Agregar
	</button>
</nav>


<div style="display:inline-block;width:100%" >
@foreach( File::glob('assets/img/salas/'.$sala->id.'/galeria/*_s.jpg')  as $imagen)
	
	    <div class="thumbnail col-lg-3" id="{{ str_replace('.','',basename($imagen)) }}">
	      
	      <div class="caption row">
	      	<div class="col-lg-12 header_caption">
	      		<input type="radio" name="portada" value="{{ basename($imagen)  }}">portada de sala
	      		<button aria-hidden="true"  class="close" type="button" rel="{{URL::action('AdminSalasController@postEliminarImagenSala').'/'.str_replace('assets/img/salas/'.$sala->id.'/galeria/','',$imagen)}}">×</button>
		    </div>
		     
			{{HTML::image($imagen,'',array('class'=>"col-lg-12"))}}
	      
	      </div>
	    </div>
	
@endforeach	 
</div>

 


<nav class="navbar navbar-default barra" role="navigation">
	 
	<button  type="submit"  class="btn btn-primary btn-sm navbar-btn pull-right">
		<span class="glyphicon glyphicon-floppy-disk"></span>
		Guardar todo
	</button>
</nav>
 {{ Form::close() }} 



<div class="alert alert-warning alert-dismissable" id="alert_borrado" style="display:none">
  
  <strong>Atencion!</strong>  
  <p>¿Quiere eliminar la imagen de la galeria ?</p> 
  <input type="hidden" id="parametro_sala" value=""> 
  <button class="btn" id="btn_aceptar_borrado">Aceptar</button>
  <button class="btn btn-primary" id="btn_cancelar_borrado">Cancelar</button>
</div>

@stop	