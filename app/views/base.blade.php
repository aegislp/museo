@extends('layout')
 
 @section('contenedor')
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>Museo</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="{{URL::route('home')}}">Inicio</a></li>
                <li><a href="{{ URL::action('SalasController@getIndex')}}">Salas</a></li>
                <li><a href="{{ URL::action('ObjetosController@getIndex')}}">Objetos</a></li>
                <li><a href="#">Recorrido</a></li>
                <li><a href="#">El Museo</a></li>
                <li><a href="{{ URL::action('MensajesController@index')}}">Contacto</a></li>
            </ul>
            @if(Auth::check()) 
            <ul class="nav navbar-nav navbar-right">
                 
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span>
                    {{Auth::user()->usuario}} <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{URL::action('UsersController@logout')}}">Salir</a></li>
                     
                  </ul>
                </li>
            </ul>
            @endif
        </div>
      </div>
</div>


@yield('contenido')

@stop
 
 
