@extends('adminLayout')

@section('titulo_admin')
	Usuarios <small>administracion de estado de usuarios</small>
@stop

@section('navegacion')
	<li><a href="{{URL::action('AdministracionController@getIndex')}}"><i class="fa fa-cog"></i> Panel</a></li>
    <li class="active"><i class="fa fa-group"></i> Usuarios</li>
@stop

@section('contenido')
 
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th><th>Nombre</th><th>Email</th><th>Fecha Creacion</th><th></th>
		</tr>
	</thead>
	<tbody>
		
		@foreach($usuarios  as $i => $usuario)
		<tr>
			<td>{{$i+1}}</td>
			<td>{{$usuario->usuario}}</td>
			<td>{{$usuario->email}}</td>
			<td>{{$usuario->created_at}}</td>
			<td><button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button></td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop