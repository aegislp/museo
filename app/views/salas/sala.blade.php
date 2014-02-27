@extends('base')

 
@section('contenido')
   @include('nav',array('nav'=> array('home'=>'home','salas'=>URL::action('SalasController@getIndex'),$seleccion->nombre=>'')))


<style type="text/css">
    img{
        max-width: 100%;
    }
  
</style>
<div class="row">
    <div class="col-md-6 header_sala clearfix">
        <h1>{{$seleccion->nombre}}</h1>
    </div>
     <div class="col-md-4 col-xs-12 " id="img-sala-chica">
       {{HTML::image('assets/img/salas/'.$seleccion->id.'/galeria/0_b.jpg')}}
       
    </div>
    <div class="col-md-6 col-xs-12  header_sala menu_sala pull-right">  
        <ul class="pull-right">
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
    <div class="col-md-4 col-xs-12 " id="img-grande">
       {{HTML::image('assets/img/salas/'.$seleccion->id.'/galeria/0_b.jpg')}}
       
    </div>
    <div class="col-md-8 col-xs-12">
        <p>
          {{$seleccion->descripcion}} 
        </p>  
    </div>

   
</div> 

<hr>

<div class="row">
     <div class="col-lg-12">
        <p> 
            @foreach( glob('assets/img/salas/'.$seleccion->id.'/galeria/*_s.jpg')  as $imagen)
              <a class="fancybox" href="/museo/public/{{str_replace('_s','_b',$imagen)}}" data-fancybox-group="gallery"  >{{HTML::image($imagen)}}</a>
            @endforeach
            </p>
    </div>
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