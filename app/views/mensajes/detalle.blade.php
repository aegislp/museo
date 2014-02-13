

<div class="modal fade" id="modal_msj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-envelope"></i> Mensaje de:{{$mensaje->nombre}}</h4>
      </div>
      <div class="modal-body">
        
          <div class="rows">
            <h1>Asunto:{{$mensaje->asunto}}</h1>
          
            <p>
              {{$mensaje->mensaje}}
            </p>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 