<div class="modal fade" id="modal_juego" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">{{$trivia->pregunta}}</h4>
      </div>
      <div class="modal-body" id="body-trivia">
          <button type="button" class="btn btn-default btn-lg btn-block">1 - {{$trivia->opcion1}}
          
          </button>
          <button type="button" class="btn btn-default btn-lg btn-block">2 - {{$trivia->opcion2}}
              
          </button>
          <button type="button" class="btn btn-default btn-lg btn-block">3 - {{$trivia->opcion3}}
             
          </button>
    
          
      </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 


