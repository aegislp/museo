@extends('base')

@section('title')  
   Museo: Salas   
@stop

@section('contenido')

  @include('nav',array('nav'=> array('Inicio'=>URL::route('home'),'salas'=>'')))
<div class="container salas">
  @foreach ($salas as $sala)    
    
    <a class="rows" href="{{ URL::action('SalasController@getShow',$sala->id) }}">
       
        {{HTML::image('assets/img/salas/'.$sala->id.'/galeria/portada.jpg','salas',array('class'=>'img-rounded col-lg-3'))}}
   
        <div class="col-lg-8">
          <h3>{{$sala->nombre}}</h3>
          <p>{{$sala->descripcion}}</p>
          <p><i class="glyphicon glyphicon-plus pull-right">mas...</i> </p>
        </div> 
     </a> 
      
  @endforeach
 
  
</div>
@stop

 
