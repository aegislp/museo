@extends('base')

@section('contenido')

@include('nav',array('nav'=> array('Inicio'=>URL::route('home'),'Objetos' =>'')))

{{Form::open(array('method'=>'post','role'=>'search','class'=>'form-search clearfix'))}}
<div class="col-lg-6 col-lg-offset-3" id="busqueda_objeto">
    <input class="form-control" type="text" placeholder="codigo de objeto" name="codigo" />
   <button type="submit" class="btn btn-default btn-sm">
      <i class="fa fa-search"></i> <span id="span_busqueda"> Buscar</span>
    </button>
</div>
 
 
{{Form::close()}}

<style type="text/css">
    #desc_detalle img{
        width: 50%;
    }

</style> 
@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>No se encontraron resultados para el codigo:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
 
 <div class="rows">
@if(!is_null($objeto))

<div class="panel panel-default   col-lg-5 col-lg-offset-1" style="clear:both;margin-top: 1em"  >
    <div class="panel-heading">Codigo: {{$objeto->getCodigo()}}</div>
    <div class="panel-body" id="desc_detalle" >
                 
        {{HTML::image('assets/img/salas/'.$objeto->sala->id.'/objetos/'.$objeto->id.'_b.jpg')}}


   
        <div class="cabecera_objeto">
            <h4>Nombre:{{$objeto->nombre}}</h4>
            <h4>Nombre Cientifico:{{$objeto->nombre_cientifico}}</h4>
        </div>
        <hr>
        <div>
            {{$objeto->descripcion}}
        </div>
       
      
    </div>
</div>
@endif


<div class="panel panel-default   {{ is_null($objeto) ? '' : 'col-lg-4 col-lg-offset-1' }}" style="  margin-top: 1em">
    <div class="panel-heading">  Destacados</div>
    <div class="panel-body">
        @foreach($destacados as $destacado) 
             <div class="{{   is_null($objeto) ? 'col-lg-3' : 'col-xs-6' }} img-obj" >
                <a   rel="{{URL::action('ObjetosController@getDetalle',$destacado->id)}}"  class="btn_objetos thumbnail">
                     {{HTML::image('assets/img/salas/'.$destacado->sala->id.'/objetos/'.$destacado->id.'_s.jpg')}}
                 </a>
            </div>

        @endforeach 

    </div>
</div>

</div>
<div id="detalle_objeto"></div>  
@stop