@extends('layout')
 
@section('contenedor')
  <div class="container" style="padding-top: 50px;">

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        
        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <i class="fa fa-angle-down"></i> 
        </button>
        <button class="navbar-toggle" id="cmdSearchCollapse" type="button" data-toggle="collapse"   href="#collapseOne">
            <i class="fa fa-search icon-search"></i>
        </button>

        <button class="navbar-toggle"  type="button" >
            <a   href="{{URL::action('UsersController@getNavegacion')}}"><i class="fa fa-map-marker"></i></a>
        </button>
        <a href="" class="navbar-brand">Museo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" id="menu_principal">

                <li class="@yield('/menu/inicio')">
                    <a href="{{URL::route('home')}}" style="padding:15px;"><i class="fa fa-home"></i></a>
                </li>
                
                <li class="@yield('/menu/salas')">
                    <a href="{{ URL::action('SalasController@getIndex')}}">Salas</a>
                </li>
                <li class="@yield('/menu/objetos')">
                    <a href="{{ URL::action('ObjetosController@getIndex')}}">Objetos</a>
                </li>
                <li class="@yield('/menu/recorrido')">
                    <a href="{{URL::action('UsersController@getNavegacion')}}">Recorrido</a>
                </li>
                
                <li class="@yield('/menu/contacto')">
                    <a href="{{ URL::action('MensajesController@index')}}">Contacto</a>
                </li>
        </ul>
      <form class="navbar-form navbar-left hide" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
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
    </div><!-- /.navbar-collapse -->
 
  <div class="row clearfix">
 

  <div class="col-lg-6 collapse busqueda" id="collapseOne" >
        {{Form::open(array('method'=>'post','role'=>'search','class'=>'form-search clearfix'))}}
       
            <input class="form-control" type="text" placeholder="codigo de objeto" name="codigo" style="width:75%;float:left" />
           <button type="submit" class="btn btn-default btn-sm">
              <i class="fa fa-search"></i>  
            </button>
      
        {{Form::close()}}
    </div>

</div>  
</nav>
 
     @yield('contenido')
 </div>
  
<div id="detalle_objeto"></div>  
<a  id="btn_nav_grande" class='flotante img-circle' href="{{URL::action('UsersController@getNavegacion')}}"><i class="fa fa-map-marker"></i></a>
@stop


