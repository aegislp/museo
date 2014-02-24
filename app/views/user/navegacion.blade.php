@extends('base')

@section('title')  
   Museo: Navegacion   
@stop

@section('script')
    {{ HTML::script('assets/js/jplayer/jquery.jplayer.min.js') }}
@stop
 
@section('contenido')

	
<div class="row">
    <div class="col-lg-6 col-lg-offset-3 mark">
        <h3>Inicio  
          <a class="btn_audio  btn_sonido btn  pull-right" rel="{{URL::action('UsersController@getAudio','inicio')}}">
              <i class="fa fa-volume-up btn_inicio"></i></a >
          <a class="btn   pull-right btn_map" >
            <i class="fa fa-map-marker btn_inicio"></i>
          </a >
        </h3>
        <div class="indicator-down color-two-d"></div>

    </div>
</div>

 

 

@foreach(Punto::salas() as $k => $sala)
 <div class="row linea">
    <div class="col-lg-6 col-lg-offset-3 sala_nav ">
        <h3 class="pull-left titulo nav{{$k}} "><span class="title">{{$sala->nombre}}</span></h3>

        @foreach($sala->puntos as $i => $punto )
        <div class="col-lg-12 col-xs-12" style="clear: @if ($i % 2 == 0)  left @else right @endif">
          <div class="popover @if ($i % 2 == 0)  left pull-left @else right pull-right @endif show  nav{{$k}} @if(Session::has('nav-'.$punto->id))visitado@endif{{$k}} ">
              <div class="arrow"></div>
             <div class="popover-content principal"> 
            
                <span class="col-lg-12 col-xs-12">{{$punto->titulo}}</span>
               <a class="btn_audio btn_sonido   btn   pull-right" rel="{{URL::action('UsersController@getAudio',$punto->id)}}">
                    <i class="fa fa-volume-up botonera"></i></a >
                <a class="btn pull-right btn_map" >
                  <i class="fa fa-map-marker botonera"></i>
                </a >
            </div>
         
          </div>
        </div>
        
        @endforeach

       
      </div>
 </div>
 @endforeach
<div id="cont_audio"></div> 
@stop