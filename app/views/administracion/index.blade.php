@extends('adminLayout')
 
 


@section('contenido')

<div class="row">
 	<div class="col-lg-9">
 		
 		<div class="panel panel-default">
  	<div class="panel-heading">
    	<h3 class="panel-title">
    		<span class="glyphicon glyphicon-user"></span>
 			Solicitudes Alta Usuario  <span class="badge pull-right">+{{count($usuarios)}}</span>
 		</h3>
  	</div>
  	<div class="panel-body">
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
      <a href="{{URL::action('AdministracionController@getUsuarios')}}" class="btn btn-default btn-sm" style="float:right">Ver todas</a>
  	</div>
</div>


 		<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-envelope"></span>
 	Mensajes <span class="badge pull-right">+42</span></h3>
  </div>
  <div class="panel-body">
   <table class="table table-striped">
 			<thead>
 			<tr>
 				<th>#</th>
 				 
 				<th>Email</th>
 				<th>Mensaje</th>
 			</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<th>1</th>
 					<th>asdasdasdasd</th>
 					<th>asdasd</th>
 			</tr><tr>
 					<th>1</th>
 					<th>asdasdasdasd</th>
 					<th>asdasd</th>
 			</tr><tr>
 					<th>1</th>
 					<th>asdasdasdasd</th>
 					<th>asdasd</th>
 			</tr><tr>
 					<th>1</th>
 					<th>asdasdasdasd</th>
 					<th>asdasd</th>
 			</tr>
 			</tbody>
 		</table>
  </div>
</div>


 	</div>
 	<div class="col-lg-3">
 		<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Top 5 Salas</h3>
  </div>
  <div class="panel-body">
     <table class="table table-striped">
 			<thead>
 			<tr>
 				 
 				<th>Sala</th>
 				<th><span class="glyphicon glyphicon-star"></th>
 			</tr>
 			</thead>
 			<tbody>
 				<tr>
 					 
 					<th>asdasdasdasd</th>
 					<th> <span class="badge pull-right">+5</span></th>
 			</tr><tr>
 					 
 					<th>asdasdasdasd</th>
 					<th> <span class="badge pull-right">+5</span></th>
 			</tr><tr>
 					 
 					<th>asdasdasdasd</th>
 					<th> <span class="badge pull-right">+5</span></th>
 			</tr><tr>
 					 
 					<th>asdasdasdasd</th>
 					<th> <span class="badge pull-right">+5</span></th>
 			</tr>
 			</tbody>
 		</table>
  </div>
</div>
	<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Top 10 Objetos</h3>
  </div>
  <div class="panel-body">
      <table class="table table-striped">
 			<thead>
 			<tr>
 				 
 				<th>Objeto</th>
 				<th><span class="glyphicon glyphicon-star"></th>
 			</tr>
 			</thead>
 			<tbody>
 				<tr>
 					 
 					<th>asdasdasdasd</th>
 					<th> <span class="badge pull-right">+5</span></th>
 			</tr><tr>
 					 
 					<th>asdasdasdasd</th>
 					<th> <span class="badge pull-right">+5</span></th>
 			</tr><tr>
 					 
 					<th>asdasdasdasd</th>
 					<th> <span class="badge pull-right">+5</span></th>
 			</tr><tr>
 					 
 					<th>asdasdasdasd</th>
 					<th> <span class="badge pull-right">+5</span></th>
 			</tr>
 			</tbody>
 		</table>
  </div>
</div>

 	</div>
</div>
@stop