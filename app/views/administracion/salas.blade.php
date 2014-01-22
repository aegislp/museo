@extends('adminLayout')
@section('contenido')
	<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <a class="navbar-brand" href="#">
	        	<span class="glyphicon glyphicon-wrench"></span>
				Administracion de Salas
			</a>
	    </div>
	    <div class="collapse navbar-collapse navbar-ex1-collapse">
	        <ul class="nav navbar-nav navbar-right">
	            <li id="btn_sala_nueva">
	            	<a   data-toggle="collapse"  href="#colapseone">
	            		<span class="glyphicon glyphicon-plus"></span>
			   			Nueva
			   		</a>
			   	</li>
	        </ul>
	    </div>
	   
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
	<div id="formulario_sala" style="display:none">
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
			  <button type="button" class="btn btn-default" id="cancelar_btn">Cancelar</button>
	    <button type="submit" class="btn btn-primary" >Guardar</button>
		{{ Form::close() }}
		
	</div>


	<table class="table table-striped" id="tabla_salas">
		<thead>
 			<tr>
 				<th>#</th><th>Nombre</th><th>Estado</th><th  style="text-align:right">Editar</th><th  style="text-align:right">Objetos</th>
 			</tr>
		</thead>
		<tbody>
			
			@foreach($salas  as $i => $sala)
			<tr>
				<td>{{$sala->numero}}</td>
				<td>{{$sala->nombre}}</td>
				<td>{{$sala->activa()}}</td>
				<td style="text-align:right">

					<a type="button" class="btn btn-default btn-sm" href="{{ URL::action('AdministracionController@getEditarSala',$sala->id) }}"> 
						<span class="glyphicon     glyphicon-cog"></span>
					</a>
					 
				</td>
				<td  style="text-align:right">{{count($sala->objetos)}}
					<a type="button" class="btn btn-default btn-sm" href="{{ URL::action('AdministracionController@getEditarObjetos',$sala->id) }}"> 
						<span class="glyphicon     glyphicon-plus"></span>
					</a>
				</td>
			</tr>
			@endforeach
	 	</tbody>
	</table>

 
@stop