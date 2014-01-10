@extends('layout')
 

@section('nav')
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-cog"></span>
	Panel de control:</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class=""><a href="{{URL::route('home')}}">Inicio</a></li>
      <li><a href="{{ URL::route('salas.index')}}">Salas</a></li>
      <li><a href="#">Objetos</a></li>
      <li><a href="#">Secciones</a></li>
      <li><a href="#">Usuarios</a></li>
       
    </ul>
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Buscar</button>
    </form>
     
  </div><!-- /.navbar-collapse -->

</nav>
    

@stop


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