@extends('base')

@section('contenido')
 
	@foreach ($salas as $sala)
	<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
	{{HTML::image('img/salas.png','salas')}}
      <div class="caption">
        <h3>{{$sala->nombre}}</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

	@endforeach
@stop