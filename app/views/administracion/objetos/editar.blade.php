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
	    	<span class="glyphicon glyphicon-wrench"></span>Objetos :
		</a>
	</div>
	<ul class="nav navbar-nav navbar-right">
		<li id="btn_objeto_nuevo">
	    	<button  type="button"  class="btn btn-sm btn-default">
	        	<span class="glyphicon glyphicon-floppy-disk"></span> Guardar
			</button>
		</li>
	</ul>
</nav>
 
 
{{ Form::model($objeto, array('method' => 'POST',  'files'=>true ,'url'=>URL::action('AdminObjetosController@postEditar')) ) }}
 		{{ Form::hidden('objeto_id', $objeto->id) }}
 		{{ Form::hidden('sala_id', $sala->id) }}
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
		{{ Form::label('portada', 'Imagen principal') }}  	<br>
		@if ($objeto->id)
		
		<div class="thumbnail">
		      
		    <div class="caption">
		      	<a   class="btn-close" id="btn_cambiar_portada">×</a>
			     
		        	{{HTML::image('assets/img/salas/'.$sala->id.'/objetos/'.$objeto->id.'_s.jpg')}}
		       
		    </div>
		</div>
		<div style="display:none">
 			{{ Form::file('portada_h',null,array('id'=>'portada'))  }}  
 		</div>	
	@else
	
	   	{{ Form::file('portada',null,array('id'=>'portada'))  }}  
	
	@endif
	</div>
	<div class="form-group">
	    {{ Form::label('descripcion', 'Descripcion') }}
	    {{ Form::textarea('descripcion', null,array('class' => 'form-control','rows'=>6)) }}

	</div>
 
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			 
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li id="btn_objeto_nuevo">
		    	<button  type="submit"  class="btn btn-sm btn-default">
		        	<span class="glyphicon glyphicon-floppy-disk"></span> Guardar
				</button>
			</li>
		</ul>
	</nav>

{{ Form::close() }}
		
 
@stop	
