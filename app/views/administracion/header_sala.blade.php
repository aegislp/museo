<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Informacion de la sala</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-3">
	       <a href="#" class="thumbnail">
	           {{HTML::image('assets/img/salas/'.$sala->id.'/galeria/portada.jpg')}}
	       </a>
	    </div>
    	<div class="caption col-md-9">
            <h3>Sala {{$sala->numero}} : {{$sala->nombre}}  </h3>
            <h3>Objetos :{{count($sala->objetos)}}</h3>
            <h3>Puntos : 0  </h3>
        </div> 
    </div>
</div>