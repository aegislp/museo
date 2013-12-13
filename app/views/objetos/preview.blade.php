<div>
	<div style="display:block"> 
      		{{HTML::image('assets/img/objetos/'.$objeto->id.'/thumbnail.png')}}
    	 
 	 </div>
 	 <div class="cabecera_objeto">
 	 	<p>Nombre:{{$objeto->nombre}}</p>
 	 	<p>Nombre Cientifico:{{$objeto->nombre_cientifico}}</p>

 	 </div>

</div>
<hr>
<div  >
	{{$objeto->descripcion}}
</div>
<hr>
 