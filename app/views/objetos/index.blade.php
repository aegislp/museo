@extends('base')
@section('/menu/objetos')
active
@stop

@section('contenido')
    
 
    @include('nav',array('nav'=> array('Inicio'=>URL::route('home'),'Objetos' =>'')))

    <div class="row busqueda_obj">

        {{Form::open(array('method'=>'post','role'=>'search','class'=>'form-search clearfix'))}}
        <div class="col-lg-6 col-lg-offset-3" id="busqueda_objeto">
            <input class="form-control" type="text" placeholder="codigo de objeto" name="codigo" />
           <button type="submit" class="btn btn-default btn-sm btn-obj">
              <i class="fa fa-search"></i> <span id="span_busqueda"> Buscar</span>
            </button>
        </div>
        {{Form::close()}}
        

    </div>

  
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
 
 <div class="row">
    @if(!is_null($objeto))

    <div class="panel panel-default   col-lg-6"  >
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


 

 <div class="{{ is_null($objeto) ? '' : 'col-lg-5 col-lg-offset-1' }}"   style=" background-color:white !important">
    <div class="col-xs-12 mark">
        <h3><i class="fa fa-eye"></i> OBJETOS MAS VISTOS </h3>
        <div class="indicator-down color-two-d"></div>
    </div>

    @foreach($destacados as $destacado) 
    
    <div class=" {{ is_null($objeto) ? 'col-xs-6 col-lg-3' : 'col-lg-6 ' }}  btn_objetos" >
    <div   rel="{{URL::action('ObjetosController@getDetalle',$destacado->id)}}"  class="btn_objetos thumbnail">

      {{HTML::image('assets/img/salas/'.$destacado->sala->id.'/objetos/'.$destacado->id.'_b.jpg')}}

      <div class="caption"><h4>{{$destacado->nombre}}</h4></div>
    </div>
    </div>
     @endforeach

 </div>

</div>
<div id="detalle_objeto"></div>  
@stop