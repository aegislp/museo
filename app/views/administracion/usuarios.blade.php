@extends('adminLayout')
@section('contenido')
 <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#solicitud" data-toggle="tab">Solicitudes</a></li>
        <li class=""><a href="#usuarios" data-toggle="tab">Usuarios</a></li>
       
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="solicitud">
          	<table class="table table-striped">
	 			<thead>
  	 			<tr>
  	 				<th>#</th><th>Nombre</th><th>Email</th><th></th>
  	 			</tr>
	 			</thead>
	 			<tbody>
	 				
	 				@foreach($solicitudes  as $i => $solicitud)
	 				<tr>
	 					<td>{{$i+1}}</td>
	 					<td>{{$solicitud->usuario}}</td>
	 					<td>{{$solicitud->email}}</td>
          				<td><button type="button" class="btn btn-success btn-sm">Aceptar</button></td>
	 				</tr>
	 				@endforeach
	 			</tbody>
	 		</table>
        </div>
        <div class="tab-pane fade" id="usuarios">
        	<table class="table table-striped">
	 			<thead>
  	 			<tr>
  	 				<th>#</th><th>Nombre</th><th>Email</th><th></th>
  	 			</tr>
	 			</thead>
	 			<tbody>
	 				
	 				@foreach($usuarios  as $i => $usuario)
	 				<tr>
	 					<td>{{$i+1}}</td>
	 					<td>{{$usuario->usuario}}</td>
	 					<td>{{$usuario->email}}</td>
          				<td><button type="button" class="btn btn-success btn-sm">Aceptar</button></td>
	 				</tr>
	 				@endforeach
	 			</tbody>
	 		</table>
        </div>
         
      </div>

@stop