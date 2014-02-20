<div class="modal fade" id="modal_aviso" tabindex="-1" role="dialog"  aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
		    <div class="modal-header">
		 		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		       	<h4 class="modal-title"> Para una mejor experiencia te invitamos a Ingresar.</h4>
		    </div>
		    <div class="modal-body  clearfix" id="body-aviso">
				 
                <form role="form" id="form-login" method="post" action="{{ URL::action('UsersController@login') }}" class="col-lg-9">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                    <button type="submit" class="btn btn-default btn-warning">
                        Ingresar
                    </button>
                    ¿No tenes usuario? 
                    <a id="btn_registro_user" href="{{URL::action('UsersController@getRegistro')}}">Registrate!!</a>
                </form>  
              
                
	      	</div>
	      	<div class="modal-footer">
	      		<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
	      	</div>
	    
    	</div>
    </div>
</div>
 
 <script type="text/javascript">
    
    $(document).ready(function(){
        $('#modal_aviso').modal('show')
    })
</script>