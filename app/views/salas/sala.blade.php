@extends('base')
@section('css')
{{HTML::style('assets/fancy/jquery.fancybox.css')}}
@stop
@section('contenido')
   @include('nav',array('nav'=> array('home'=>'home','salas'=>'salas.index',$seleccion->id=>'')))
<div class="row">
	 
 
	<div class="col-md-12">
		
		<select class="form-control input-lg" id="select_sala">
			@foreach ($salas as $sala)	
			<option value="{{$sala->id}}">{{$sala->nombre}}</option>
			 @endforeach
		</select>
	 
			
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
         <h1>{{$seleccion->nombre}}</h1> 	
      			<hr>
            {{$seleccion->descripcion}}
        	  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <hr>
            
            <p> 
            @foreach( glob('assets/img/salas/'.$seleccion->id.'/*_s.jpg')  as $imagen)
              <a class="fancybox" href="/museo/public/{{str_replace('_s','_b',$imagen)}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">{{HTML::image($imagen)}}</a>
            @endforeach
            </p>
            

      	
 
         
        </div>
        
      </div>
      <!-- /tabs -->
      
	</div>

</div>
@stop
@section('script')
{{HTML::script('assets/fancy/jquery.fancybox.js')}}
 
{{ HTML::script('assets/js/funciones.js') }}

<script type="text/javascript">
    
$(document).ready(function(){

    $('.fancybox').fancybox();


     
})  

</script>
 
 
@stop