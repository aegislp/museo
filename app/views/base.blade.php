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
    <a class="navbar-brand" href="#">Museo</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class=""><a href="{{URL::route('home')}}">Home</a></li>
      <li><a href="{{ URL::action('SalasController@getIndex')}}">Salas</a></li>
      <li><a href="#">Objetos</a></li>
      <li><a href="#">Recorrido</a></li>
      <li><a href="#">El Museo</a></li>
       
    </ul>
    <form class="navbar-form navbar-right" role="search" id="barra_busqueda">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Buscar</button>
    </form>
     
  </div><!-- /.navbar-collapse -->

</nav>
    
@stop

@section('contenido')
 
@stop
