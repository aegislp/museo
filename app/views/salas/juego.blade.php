

<div class="modal fade" id="modal_juego" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Encuentra el objeto!!!</h4>
      </div>
      <div class="modal-body">
       
        <div class="row">
        <div class="col-lg-12">
          <div class="thumbnail">
            {{HTML::image('assets/img/salas/'.$objeto->sala->id.'/objetos/'.$objeto->id.'_b.jpg')}}
            <div class="caption">
              <h3>{{$objeto->nombre}}</h3>
             
               
            </div>
          </div>
        </div>
      </div>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 