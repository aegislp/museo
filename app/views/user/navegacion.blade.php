@extends('base')

@section('title')  
   Museo: Navegacion   
@stop

@section('script')
    {{ HTML::script('assets/js/jplayer/jquery.jplayer.min.js') }}
@stop
<style type="text/css">
  
  .btn_sonido{
    
    border-radius: 30px !important;
   
  }
   .btn_map{
    border-radius: 30px !important;
    
    
  }
.botonera{
  font-weight: bold;
  font-size: 2em;
}
.popover{
  position: relative !important;
  width: 100% !important;
  height: 15%;
  margin-left: 1em !important;
}
 
.reyeno{

    width: 50% !important;
    height: 15% !important;
    position: relative;

}
.salas_nav{
  border-left: 5px solid green;
  padding-left: 0px !important;

}
.titulo{
  width: 100% !important;
   
  clear: right !important;  
}
.titulo span{
  background-color: green;
  width: 50% !important;
  display: block;
}
</style> 
@section('contenido')

	
<div class="row">
    <div class="col-lg-6 col-lg-offset-3 mark">
        <h3>Inicio  
          <a class="btn_audio.btn_sonido btn_sonido btn  pull-right" rel="{{URL::action('UsersController@getAudio','inicio')}}">
              <i class="fa fa-volume-up botonera"></i></a >
          <a class="btn   pull-right btn_map" >
            <i class="fa fa-map-marker botonera"></i>
          </a >
        </h3>
        <div class="indicator-down color-two-d"></div>

    </div>
</div>

 

 

@foreach(Punto::salas() as $i => $sala)
 <div class="row">
    <div class="col-lg-6 col-lg-offset-3 salas_nav">
        <h3 class="pull-left titulo  "><span>{{$sala->nombre}}</span></h3>

        @foreach($sala->puntos as $i => $punto )
        <div class="col-lg-6 col-xs-6">
          <div class="popover @if ($i % 2 == 0)  left @else right @endif show pull-left">
            <div class="arrow"></div>
             <div class="popover-content principal">{{ }}
               <a class="btn_audio btn_sonido   btn   pull-right" rel="{{URL::action('UsersController@getAudio','inicio')}}">
                    <i class="fa fa-volume-up botonera"></i></a >
                <a class="btn pull-right btn_map" >
                  <i class="fa fa-map-marker botonera"></i>
                </a >
            </div>
         
          </div>
        </div>
        @if($i % 2 == 0)
             <div class="col-lg-6 col-xs-6 reyeno"></div>
            <div class="col-lg-6 col-xs-6 reyeno"></div>
        @endif
        @endforeach

       
      </div>
 </div>
 @endforeach
<div id="cont_audio"></div> 
@stop