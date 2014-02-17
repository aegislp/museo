@extends('base')
@section('css')
  {{HTML::style('assets/fancy/jquery.fancybox.css')}}
@stop
@section('contenido')
   @include('nav',array('nav'=> array('home'=>'home','salas'=>URL::action('SalasController@getIndex'),$seleccion->nombre=>'')))


<div class="row"  style="padding:1em;">
	 
 
	<div class="col-md-12">
		
		<select class="form-control input-lg" id="select_sala">
			@foreach ($salas as $sala)	
			<option value="{{$sala->id}}">{{$sala->nombre}}</option>
			 @endforeach
		</select>
    
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
            <div class="heder_sala">
              <h1> {{$seleccion->nombre}}</h1>
              <div class="btn-salas btn-group" style="float:right">
                <a href="{{URL::action('SalasController@getObjetos',$seleccion->id)}}" type="button" class="btn btn-default"> 
                  <i class="fa fa-bars"></i> Objetos
                </a>
                <button type="button" class="btn-trivia btn btn-default" rel="{{URL::action('SalasController@getTrivia',$seleccion->id)}}">
                  <i class="fa fa-question"></i> Trivia
                </button>
                <button  rel="{{URL::action('SalasController@getBuscarObjeto',$seleccion->id)}}" type="button" class="btn-juego btn btn-default">
                  <i class="fa fa-gamepad"></i> Juegos
                </button>
                <button rel="{{URL::action('SalasController@getMeGusta',$seleccion->id)}}" type="button" class="btn_like btn btn-default"> <i class="fa fa-thumbs-o-up"></i> like</button>
              </div>
              
            </div>
      			<br>
            <hr style="display:block:clear:both;">
            {{$seleccion->descripcion}} 
            <hr>
            
            <p> 
            @foreach( glob('assets/img/salas/'.$seleccion->id.'/galeria/*_s.jpg')  as $imagen)
              <a class="fancybox" href="/museo/public/{{str_replace('_s','_b',$imagen)}}" data-fancybox-group="gallery"  >{{HTML::image($imagen)}}</a>
            @endforeach
            </p>
            
 
        </div>
        
      </div>
      <!-- /tabs -->
      
	</div>

</div>
<div id="juegos">

</div>
 

@stop


@section('script')
 
<script type="text/javascript">
    
$(document).ready(function(){

    $('.fancybox').fancybox();


     
})  

</script>
 
 
@stop