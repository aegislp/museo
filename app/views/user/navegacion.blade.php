@extends('base')

@section('title')  
   Museo: Registro de Usuario   
@stop
 <style type="text/css">
.progress.vertical {
    position: relative;
    width: 20px;
    min-height: 240px;
    float: left;
    margin-right: 20px;
    background: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border: none;
}
 </style>
@section('contenido')

	
<div class="progress vertical">
  <div class="progress-bar progress-bar-success" style="width: 35%">
    <span class="sr-only">35% Complete (success)</span>
  </div>
  <div class="progress-bar progress-bar-warning" style="width: 20%">
    <span class="sr-only">20% Complete (warning)</span>
  </div>
  <div class="progress-bar progress-bar-danger" style="width: 10%">
    <span class="sr-only">10% Complete (danger)</span>
  </div>
</div>



@stop