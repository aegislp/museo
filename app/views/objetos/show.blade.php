@extends('base')

@section('contenido')
<div class="row">
	 <div class="col-xs-6 col-md-3">
    	<a href="#" class="thumbnail">
      		{{HTML::image('assets/img/objetos/'.$objeto->id.'/thumbnail.png')}}
    	</a>
 	 </div>
 	 <div class="cabecera_objeto">
 	 	<p>Nombre:{{$objeto->nombre}}</p>
 	 	<p>Nombre Cientifico:{{$objeto->nombre_cientifico}}</p>

 	 </div>

</div>
<hr>
<div class="row">
	{{$objeto->descripcion}}
</div>
<hr>
<div class="row">
	@foreach(glob('assets/img/objetos/'.$objeto->id.'/galeria/*.jpg') as $imagen)

	<p>{{$imagen}}<p>

	@endforeach
</div>


@stop