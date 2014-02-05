@extends('base')

@section('title')
    Museo: {{$sala->nombre}} - Objetos
@stop 


@section('contenido')
   @include('nav',array('nav'=> array('home'=>URL::route('home'),'salas'=>URL::action('SalasController@getIndex'),$sala->nombre =>URL::action('SalasController@getShow',$sala->id),'Objetos' =>'')))

<div class="col-lg-2">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Categorias</a></li>
        @foreach($sala->categorias as $categoria)
        <li><a href="#categoria_{{$categoria->id}}">{{$categoria->nombre}}</a></li>
         @endforeach
    </ul>

</div>


<div class="col-lg-10">
    @foreach($sala->categorias as $categoria)
    <div class="panel panel-default" id="categoria_{{$categoria->id}}">
        <div class="panel-heading">{{$categoria->nombre}}</div>
        <div class="panel-body">
            @foreach($categoria->objetos as $objeto) 
                 <div class="col-xs-6 col-md-3">
                    <a   rel="{{URL::action('ObjetosController@getDetalle',$objeto->id)}}"  class="btn_objetos thumbnail">
                         {{HTML::image('assets/img/salas/'.$objeto->sala->id.'/objetos/'.$objeto->id.'_s.jpg')}}
                     </a>
                </div>

            @endforeach 

        </div>
    </div>
    @endforeach
</div>

<div id="detalle_objeto"></div>  
@stop