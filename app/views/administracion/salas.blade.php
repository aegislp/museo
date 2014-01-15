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
	            <li  data-toggle="modal" data-target="#myModal">
	            	<a   data-toggle="collapse"  href="#colapseone">
	            		<span class="glyphicon glyphicon-plus"></span>
			   			Nueva
			   		</a>
			   	</li>
	        </ul>
	    </div>
	   
	</nav>
	<table class="table table-striped">
		<thead>
 			<tr>
 				<th>#</th><th>Nombre</th><th>Objetos</th><th>Visitas</th><th></th>
 			</tr>
		</thead>
		<tbody>
			
			@foreach($salas  as $i => $sala)
			<tr>
				<td>{{$sala->id}}</td>
				<td>{{$sala->nombre}}</td>
				<td>{{count($sala->objetos)}}</td>
				<td></td>
				<td>{{$sala->activa}}</td>
				<td style="text-align:right">

					<button type="button" class="btn btn-success btn-sm"> 
						<span class="glyphicon     glyphicon-cog"></span>
					</button>
					<button type="button" class="btn btn-success btn-sm"> 
						<span class="glyphicon   glyphicon-trash"></span>
					</button>
				</td>
			</tr>
			@endforeach
	 	</tbody>
	</table>


 
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Nueva Sala</h4>
	      </div>
	      <div class="modal-body">
	       		{{ Form::open(array(  'method' => 'POST', 'id'=>'form_sala') ) }}
				  <div class="form-group">
				    {{ Form::label('numero', 'Numero de sala') }}
				    {{ Form::text('numero', null,array('class' => 'required form-control')) }}
				    
				  </div>
				  <div class="form-group">
				    {{ Form::label('nombre', 'Nombre') }}
				    {{ Form::text('nombre', null,array('class' => 'form-control')) }}
				    
				  </div>
				  <div class="form-group">
				    {{ Form::label('descripcion', 'Descripcion') }}
				    {{ Form::textarea('nombre', null,array('class' => 'form-control','rows'=>3)) }}

				  </div>
				  
				  
				 {{ Form::close() }}

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-primary" id="btn_nueva_sala">Guardar</button>
	      </div>
	    </div> 
	  </div> 
	</div> 
@stop