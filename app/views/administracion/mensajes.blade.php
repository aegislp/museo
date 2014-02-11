@extends('adminLayout')

@section('titulo_admin')
	Mensajes <small>administracion de mensajes de los usuarios</small>
@stop

@section('navegacion')
	<li><a href="{{URL::action('AdministracionController@getIndex')}}"><i class="fa fa-cog"></i> Panel</a></li>
    <li class="active"><i class="fa fa-envelope"></i> Mensajes</li>
@stop

@section('contenido')
 <form method="POST">
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Ok!</strong> {{Session::get('mensaje')}}.
</div>


@endif 	
<table class="table">
	<thead>
		<tr>
			<th>#</th><th>Nombre</th><th>Asunto</th><th>Fecha</th><th></th>
		</tr>
	</thead>
	<tbody>
		
		@foreach($mensajes  as $i => $mensaje)
		<tr>
			<td>{{$i+1}}</td>
			<td>{{$mensaje->nombre}}</td>
			<td>{{$mensaje->asunto}}</td>
			<td>{{$mensaje->created_at}}</td>
			<td >
				<button type="submit" class="btn btn-default btn-sm  pull-right" name="usuario" value="">
					<span class="glyphicon glyphicon-trash"></span>
				</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</form>
@stop