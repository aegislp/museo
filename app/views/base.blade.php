@extends('layout')
 
 @section('css')
  {{ HTML::style('assets/css/estilo.css', array('media' => 'screen')) }}
@stop 

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
    
         <ul class="nav navbar-nav navbar-right" style="margin-right:1em" >
                 
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    @if(Auth::check()) 
                         <span class="glyphicon glyphicon-user user_auth"></span>
                         {{Auth::user()->usuario}} 
                    @else
                        <span class="glyphicon glyphicon-user"></span>
                    @endif 
                    
                     <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     @if(Auth::check()) 

                      
                        <li><a href="{{URL::action('UsersController@logout')}}">Salir</a></li>
                    @else
                        
                        <li><a class="btn_login" rel="{{URL::action('UsersController@getFormLogin')}}" href="#">Ingresar</a></li>
                        <li><a href="{{URL::action('UsersController@getRegistro')}}">Registrase</a></li>
                      @endif
                  </ul>
                </li>
            </ul>   
           
    </div><!-- /.navbar-collapse -->
 
  <div class="row clearfix">
 

  <div class="col-lg-6 collapse busqueda" id="collapseOne" >
        {{Form::open(array('method'=>'post','url'=>URL::action('ObjetosController@postIndex'),'role'=>'search','class'=>'form-search clearfix'))}}
       
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


