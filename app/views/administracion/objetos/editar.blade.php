@extends('adminLayout')

@section('titulo_admin')
	Edicion o Creacion Objetos <small> Sala :{{$sala->nombre}}</small>
@stop

@section('navegacion')
	<li><a href="index.html"><i class="fa fa-cog"></i> Panel</a></li>
	<li><a href="index.html"><i class="fa fa-cog"></i> Salas</a></li>
	<li><a href="index.html"><i class="fa fa-cog"></i> Objetos</a></li>
 	<li class="active"><i class="fa fa-edit"></i> Edicion</li>
@stop

@section('contenido')

	@include('administracion.header_sala',array('sala'=>$sala))

{{ Form::model($objeto, array('method' => 'POST',  'files'=>true ,'url'=>URL::action('AdminObjetosController@postEditar')) ) }}
 
	<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <a class="navbar-brand" href="#">
	        	<span class="glyphicon glyphicon-wrench"></span>
				Objeto:
			</a>
	    </div>
	  
	     <button type="submit" class="btn btn-default pull-right">
	   		<span class="glyphicon glyphicon-floppy-disk"></span>Guardar Todo
		</button>
	 
	   
	</nav>
 
 
	{{ Form::hidden('objeto_id', $objeto->id) }}
 	{{ Form::hidden('sala_id', $sala->id) }}
  	<div   class="rows">
	  	<div class="form-group col-lg-6">
	    	{{ Form::label('nombre', 'Nombre') }}
	    	{{ Form::text('nombre', null,array('class' => 'required form-control')) }}
	    
	  	</div>
		<div class="form-group col-lg-6">
		    {{ Form::label('nombre_cientifico', 'Nombre cientifico') }}
		    {{ Form::text('nombre_cientifico', null,array('class' => 'form-control')) }}
		</div>
	</div>
 	<div class="rows">	
	 	<div class="form-group col-lg-12">
	 		{{ Form::label('categoria', 'Categoria') }}  	
		   	{{ Form::select('categoria_id', Categoria::all()->lists('nombre', 'id'),1,array('class' => 'form-control')) }}  
		</div>
	</div>
	
	@if ($objeto->id)
		<div class="rows">	
	 		<div class="form-group col-lg-12">
				{{ Form::label('portada', 'Imagen principal') }}  	<br>
				<div style="display:none">
	 				{{ Form::file('portada_h',null,array('id'=>'portada'))  }}  
	 			</div>	
				<div class="thumbnail" style="width:25%;">
				      
				    <div class="caption">
				      	<a   class="btn-close" id="btn_cambiar_portada">×</a>
					     
				        	{{HTML::image('assets/img/salas/'.$sala->id.'/objetos/'.$objeto->id.'_s.jpg')}}
				       
				    </div>
				</div>
			</div>
		</div>	
	@else
	<div class="rows">	
	 	<div class="form-group col-lg-12">
		{{ Form::label('portada', 'Imagen principal') }} 
	   	{{ Form::file('portada',null,array('id'=>'portada'))  }}  
	   </div>
	</div>   
	
	@endif
	<div class="rows">
		<div class="">
		    {{ Form::label('descripcion', 'Descripcion') }}
		    {{ Form::textarea('descripcion', null,array('rows'=>6)) }}

		</div>
 	</div>
	


 <br>	
<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header pull-right">
	    <button type="submit" class="btn btn-default">
	   		<span class="glyphicon glyphicon-floppy-disk"></span>Guardar Todo
		</button>
	</div>
</nav>


	{{ Form::close() }}
@stop	
