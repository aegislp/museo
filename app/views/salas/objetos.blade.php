@extends('base')

@section('title')
    Museo: {{$sala->nombre}} - Objetos
@stop 

 
@section('css')
{{HTML::style('assets/fancybox/jquery.fancybox.css')}}
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
                    <a href="#" class="thumbnail">
                         {{HTML::image('assets/img/objetos/'.$objeto->id.'/thumbnail.png')}}
                     </a>
                </div>

            @endforeach 

        </div>
    </div>
    @endforeach
</div>  
<a id="single_image" href="http://127.0.01/museo/public/assets/img/objetos/10/thumbnail.png">
    <img src="http://127.0.01/museo/public/assets/img/objetos/10/thumbnail.png" alt=""/>
</a>

 
@stop

@section('script')
{{HTML::script('assets/fancybox/jquery.fancybox.pack.js')}}
  
<script type="text/javascript">
    
$(document).ready(function(){
    $("#single_image").fancybox();
    
})

</script>
@stop