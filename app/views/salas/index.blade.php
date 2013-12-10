@extends('base')

@section('contenido')
 <div class="salas">
	@foreach ($salas as $sala)
  <a href="/salas/{{$sala->id}}">
  	<div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
    	{{HTML::image('img/salas/'.$sala->id.'.png','salas')}}
          <div class="caption">
            <h3>{{$sala->nombre}}</h3>
            <p>{{$sala->descripcion}}</p>
            
          </div>
        </div>
      </div>
  </div>
</a>
	@endforeach
</div>
@stop