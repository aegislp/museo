@extends('adminLayout')

@section('titulo_admin')
	Usuarios <small>administracion de estado de usuarios</small>
@stop

@section('navegacion')
	<li><a href="{{URL::action('AdministracionController@getIndex')}}"><i class="fa fa-cog"></i> Panel</a></li>
    <li class="active"><i class="fa fa-group"></i> Usuarios</li>
@stop

@section('contenido')
 <form method="POST">
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Ok!</strong> {{Session::get('mensaje')}}.
</div>


@endif 	
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
			<td >
				<button type="submit" class="btn btn-default btn-sm  pull-right" name="usuario" value="{{ $usuario->id}}">
					<span class="glyphicon glyphicon-trash"></span>
				</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</form>
@stop