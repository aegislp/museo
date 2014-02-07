@extends('layout')

@section('css')
  {{ HTML::style('assets/css/sb-admin.css', array('media' => 'screen')) }}
@stop 

@section('script')
   {{ HTML::script('assets/js/administracion.js' )}}
 
@stop 

 
@section('contenedor')
 
  <div id="wrapper">
  <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL::action('AdministracionController@getIndex')}}">Panel de Control</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> Estadisticas</a></li>
            <li><a href="{{URL::action('AdminSalasController@getIndex')}}"><i class="fa fa-picture-o"></i>Salas</a></li>
            <li><a href="{{URL::action('AdministracionController@getUsuarios')}}"><i class="fa fa-group"></i> Usuarios</a></li>
            <li><a href="typography.html"><i class="fa fa-envelope"></i>Mensajes</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-sitemap"></i> Secciones <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">El Museo</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
           <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i> {{Auth::user()->usuario}} <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav> 

       <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>@yield('titulo_admin')</h1>
            <ol class="breadcrumb">
                @yield('navegacion')
            </ol>
            
          </div>
        </div><!-- /.row -->
        @yield('contenido')
      </div>

       </div>
@stop
