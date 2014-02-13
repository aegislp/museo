@extends('adminLayout')

@section('titulo_admin')
	Salas <small> cree y administre salas</small>
@stop
@section('/menu/salas')
active
@stop
@section('navegacion')
	<li><a href="{{URL::action('AdministracionController@getIndex')}}"><i class="fa fa-cog"></i> Panel</a></li>
    <li class="active"><i class="fa fa-table"></i> Salas</li>
@stop


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
	            	<a   href="{{ URL::action('AdminSalasController@getEditar') }}">
	            		<span class="glyphicon glyphicon-plus"></span>
			   			Nueva
			   		</a>
			   	</li>
	        </ul>
	    </div>
	   
	</nav>

 

	<table class="table table-striped" id="tabla_salas">
		<thead>
 			<tr>
 				<th>#</th><th class="col-lg-5">Nombre</th><th>Objetos</th><th>Trivias</th> <th>Estado</th><th style="text-align:right">Editar</th>
 			</tr>
		</thead>
		<tbody>
			
			@foreach($salas  as $i => $sala)
			<tr @if (isset($nueva) and $sala->id == $nueva->id) echo "class:succes" @endif>
				<td>{{$sala->numero}}</td>
				<td>{{$sala->nombre}}</td>
				<td >
					<a type="button" class="btn btn-default btn-sm" href="{{URL::route('admin_objetos',$sala->id)}}">
					
						{{count($sala->objetos)}}
					</a>
				</td>
				<td > 
					<a type="button" class="btn btn-default btn-sm" href="{{URL::action('AdminSalasController@getTrivias',$sala->id)}}">
						<span>{{count($sala->trivias)}}</span>
					</a>
				</td>
				<td> 
					<button class="btn-activar-sala btn-sm btn-primary {{ $sala->activa ? 'btn-success': 'btn-danger' }}" rel="{{ URL::action('AdminSalasController@postActivarSala',$sala->id)}}">
						<span>{{$sala->activa ? 'Activada': 'Desactivada'}}</span>
					</button>
				 </td>
				

				<td style="text-align:right">

					<a type="button" class="btn btn-default btn-sm" href="{{ URL::action('AdminSalasController@getEditar',$sala->id) }}"> 
						<span class="glyphicon     glyphicon-edit"></span>
					</a>
					 
				</td>
			</tr>
			@endforeach
	 	</tbody>
	</table>

 </div>
@stop