@extends('base')

@section('title')  
   Museo: Salas   
@stop
@section('/menu/salas')
m_activo
@stop
@section('contenido')

    @include('nav',array('nav'=> array('Inicio'=>URL::route('home'),'salas'=>'')))

   
    <div class="row mark">
        <h3>Salas Disponibles</h3>
    </div>

    <div class="row salas">
    @foreach ($salas as $sala)    
    
    <a class="col-xs-6 col-md-4" href="{{ URL::action('SalasController@getShow',$sala->id) }}">
        
        <div class="thumbnail">
            {{HTML::image('assets/img/salas/'.$sala->id.'/galeria/0_b.jpg')}}
            <div class="caption">
                <h4>{{$sala->nombre}}</h4>
                <p class="descripcion_salas">{{$sala->descripcion}}</p>
            </div>
        </div>
    </a>

    
    @endforeach
 
  
</div>
@stop

 
