@extends('base')

 
  
@section('contenido')
<div class="row" >
    <div class="col-xs-12 mark">
        <h3><i class="fa fa-star"></i> SALAS DESTACADAS </h3>
        <div class="indicator-down color-two-d"></div>
    </div>

</div>

<div class="row" style="padding:1em">
  
    @foreach(Sala::destacadas() as $sala)
    <div class="col-xs-6 col-md-3">
        <div class="thumbnail">
            {{HTML::image('assets/img/salas/'.$sala->id.'/galeria/0_b.jpg')}}
            <div class="caption"><h4>{{$sala->nombre}}</h4></div>
        </div>
    </div>
    @endforeach

</div>


 
<div class="row" >


</div>

 <div class="row" style=" background-color:white !important">
      <div class="col-xs-12 mark">

        <h3><i class="fa fa-eye"></i> OBJETOS MAS VISTOS </h3>
        <div class="indicator-down color-two-d"></div>
  </div>
     @foreach(Objeto::mas_vistos() as $objeto)
  <div class="col-xs-6 col-md-3">
    <div class="thumbnail">
      {{HTML::image('assets/img/salas/'.$objeto->sala->id.'/objetos/'.$objeto->id.'_b.jpg')}}

      <div class="caption"><h4>{{$objeto->nombre}}</h4></div>
    </div>
  </div>
     @endforeach

 </div>
  

@stop
 