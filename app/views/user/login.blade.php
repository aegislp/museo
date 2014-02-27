
<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
		    <div class="modal-header">
		 	 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		       <h4 class="modal-title"> </h4>
		    </div>
		    <div class="modal-body clearfix" >
			{{Form::open(array('url'=> URL::to('login') ,'method'=>'POST'))}} 

				<div class="form-group">
			     	{{Form::email('email','Ingrese su email',array('class'=>'form-control'))}}
			   	</div>
			  	<div class="form-group">
			    	{{Form::password('pass', array('class'=>'form-control'))}}
			    </div>
			  	{{Form::hidden('origen','acceso')}}
			   	<button type="submit" class="btn btn-default">Ingresar</button>
			{{Form::close()}}
			 
	    
	          
	      	</div>
	      	<div class="modal-footer">
	      		 
	        	<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
	      	</div>
	    </div>
    </div>
</div>
 


