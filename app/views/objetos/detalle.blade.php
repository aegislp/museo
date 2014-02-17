
<div class="modal fade" id="modal_detalle_objeto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
		    <div class="modal-header">
		       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		       <h4 class="modal-title"> </h4>
		    </div>
		    <div class="modal-body" id="body-objeto">
			
				  {{HTML::image('assets/img/salas/'.$objeto->sala->id.'/objetos/'.$objeto->id.'_b.jpg')}}
				    	 
				 <div class="cabecera_objeto">
					<h3>Nombre:{{$objeto->nombre}}</h3>
				 	<h3>Nombre Cientifico:{{$objeto->nombre_cientifico}}</h3>
				</div>
				<hr>
				<div>
					{{$objeto->descripcion}}
				</div>
				 
	    
	          
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
	      	</div>
	    </div>
    </div>
</div>
 


