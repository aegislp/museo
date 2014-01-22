@extends('layout')
 

@section('nav')
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
      <li class=""><a href="{{URL::action('AdministracionController@getIndex')}}">Inicio</a></li>
      <li><a href="{{URL::action('AdministracionController@getSalas')}}">Salas</a></li>
      <li><a href="#">Objetos</a></li>
 
      <li><a href="{{URL::action('AdministracionController@getUsuarios')}}">Usuarios</a></li>
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Secciones <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Museo</a></li>
           
        </ul>
      </li> 
    </ul>
   
     
  </div><!-- /.navbar-collapse -->

</nav>
    

@stop