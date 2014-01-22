@extends('base')

@section('contenido')
 

   <div id="baner_museo">
            {{HTML::image('assets/img/banner.jpg','Museo')}}
      </div>
<a   style="text-decoration:none; color:#333;" href="{{ URL::action('SalasController@index')}}">     
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="glyphicon glyphicon-home"></span>   Salas
    </h3>
  </div>
  <div class="panel-body">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>
</div>
</a>


<a   style="text-decoration:none; color:#333;" href=" ">    
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-search"></span>  Buscador de objetos</h3>
  </div>
  <div class="panel-body">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>
</div>
</a>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-map-marker"></span>  Recorrido</h3>
  </div>
  <div class="panel-body">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>
</div>
 

@stop

@section('script')
<script type="text/javascript">
	
	$(document).ready(function(){
		$('.carousel').carousel()

	})
</script>
@stop