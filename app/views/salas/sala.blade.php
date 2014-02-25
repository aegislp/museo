@extends('base')

 
@section('contenido')
   @include('nav',array('nav'=> array('home'=>'home','salas'=>URL::action('SalasController@getIndex'),$seleccion->nombre=>'')))


<div class="row">
	
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
          	         {{$sala->nombre}}
                </a>
            </li>
            @endforeach	
        </ul>
        
        <div class="tab-content col-md-offset-2">
          <div class="tab-pane active" id="contenedor_sala">
            <div class="row header_sala">
                <div class="col-lg-6 col-md-12">
                  <h4>{{$seleccion->nombre}}</h4>
                </div>
                <div class="col-lg-6 col-md-12">
                    <ul>
                        <li> 
                            <a href="{{URL::action('SalasController@getObjetos',$seleccion->id)}}"> 
                                <i class="fa fa-bars"></i>  
                            </a>
                        </li>  
                        <li> 
                            <a class="btn-trivia" rel="{{URL::action('SalasController@getTrivia',$seleccion->id)}}">
                                <i class="fa fa-question"></i> 
                            </a>
                        </li>  
                        <li>
                            <a  rel="{{URL::action('SalasController@getBuscarObjeto',$seleccion->id)}}" class="btn-juego">
                                <i class="fa fa-gamepad"></i>  
                            </a>
                        </li>  
                        <li><a rel="{{URL::action('SalasController@getMeGusta',$seleccion->id)}}"   class="btn_like"> 
                                <i class="fa fa-thumbs-o-up"></i>  
                            </a>
                        </li>  
                    </ul>
                </div>

             
            </div>
      			 
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
<div id="juegos"></div>
 

@stop


@section('script')
 
<script type="text/javascript">
    
$(document).ready(function(){

    $('.fancybox').fancybox();


     
})  

</script>
 
 
@stop