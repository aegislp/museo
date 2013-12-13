@extends('base')

@section('title')
    Museo: {{$sala->nombre}} - Objetos
@stop 

 
@section('css')
{{HTML::style('assets/fancy/jquery.fancybox.css')}}
@stop


@section('contenido')

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
                    <a href="{{ URL::route('ajax_objetos',$objeto->id)}}"   class="fancybox fancybox.ajax thumbnail">
                         {{HTML::image('assets/img/objetos/'.$objeto->id.'/thumbnail.png')}}
                     </a>
                </div>

            @endforeach 

        </div>
    </div>
    @endforeach
</div>  
 
@stop

@section('script')
{{HTML::script('assets/fancy/jquery.fancybox.js')}}
 
<script type="text/javascript">
    
$(document).ready(function(){
 
 

            $('.fancybox').fancybox();
 

      
  

 
 })  

</script>
@stop