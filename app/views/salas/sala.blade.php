@extends('base')

@section('contenido')
 
<div class="row">
	 
 
	<div class="col-md-12">
		
		<select class="form-control input-lg" id="select_sala">
			@foreach ($salas as $sala)	
			<option value="{{$sala->id}}">{{$sala->nombre}}</option>
			 @endforeach
		</select>
		<br>
		<br>
			
		 <!-- tabs left -->
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs" id="ul_menu">
        	@foreach ($salas as $sala)	
          <li class="@if($sala->id == $seleccion->id)active@endif">
          	<a  class="link_sala" alt="{{$sala->id}}" data-toggle="tab" >
          	{{$sala->nombre}}</a>
          </li>
          
          @endforeach	
        </ul>
        <div class="tab-content col-md-offset-2">
         <div class="tab-pane active" id="contenedor_sala">
         <h1>{{$sala->nombre}}</h1> 	
      			<hr>
            {{$seleccion->descripcion}}
        	  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <hr>
             
            @foreach ($seleccion->objetos as $objeto)
             <div class="col-xs-6 col-md-3">
            <a href="/salas/objetos/{{$objeto->id}}" class="thumbnail">
              {{HTML::image('assets/img/objetos/'.$objeto->id.'/thumbnail.png')}}
            </a>
            </div>
            @endforeach
 
  

      	
         	
         
        </div>
        
      </div>
      <!-- /tabs -->
      
	</div>

</div>
@stop

@section('script')
	 {{ HTML::script('assets/js/funciones.js') }}
@stop