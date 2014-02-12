@extends('base')

@section('title')  
   Museo: Salas   
@stop

@section('contenido')

  @include('nav',array('nav'=> array('home'=>URL::route('home'),'salas'=>'')))
<div class="container salas">
  @foreach ($salas as $sala)    
    
       <a class="col-lg-12" href="{{ URL::action('SalasController@getShow',$sala->id) }}">
         
        {{HTML::image('assets/img/salas/'.$sala->id.'/portada.jpg','salas',array('class'=>'img-circle'))}}
        <h3>{{$sala->nombre}}</h3>
        <p>{{$sala->descripcion}}</p>
        <p><i class="glyphicon glyphicon-plus">mas...</i> </p>
      </a> 
      <br>
      <hr>
  @endforeach
 
  
</div>
@stop

 
