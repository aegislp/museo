
<h1>{{$seleccion->nombre}}</h1> 	
<hr>
{{$seleccion->descripcion}}
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<hr>
 
@foreach ($seleccion->objetos as $objeto)
 <div class="col-xs-6 col-md-3">
<a href="/salas/objetos/{{$objeto->id}}" class="thumbnail">
  {{HTML::image('assets/img/objetos/'.$objeto->id.'/thumbnail.png')}}
</a>
</div>
@endforeach
 
  

      	
         	
         
