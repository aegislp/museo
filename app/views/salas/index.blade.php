@extends('base')

@section('title')  
   Museo: Salas   
@stop

@section('contenido')

  @include('nav',array('nav'=> array('home'=>'home','salas'=>'')))
<div class="container salas">
  @foreach ($salas as $sala)    
    
       <a class="col-lg-12" href="{{ URL::action('SalasController@getShow',$sala->id) }}">
         
        {{HTML::image('assets/img/salas/'.$sala->id.'/portada.png','salas',array('class'=>'img-rounded'))}}
        <h3>{{$sala->nombre}}</h3>
        <p>{{$sala->descripcion}}</p>
        <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
      </a> 
      <br>
      <hr>
  @endforeach
 
 
</div>
@stop

 
