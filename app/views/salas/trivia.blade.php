<div class="modal fade" id="modal_juego" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">{{$trivia->pregunta}}</h4>
      </div>
      <div class="modal-body" id="body-trivia">
          <div id="btn_trivia">
             <button type="button" rel="1" class="btn-respuesta btn btn-default btn-lg btn-block">1 - {{$trivia->opcion1}}
          
          </button>
          <button type="button"  rel="2" class="btn-respuesta btn btn-default btn-lg btn-block">2 - {{$trivia->opcion2}}
              
          </button>
          <button type="button"  rel="3"  class="btn-respuesta btn btn-default btn-lg btn-block">3 - {{$trivia->opcion3}}
             
          </button> 
          <input  type="hidden" value="{{$trivia->respuesta}}" id="rsp"/>
          </div>
          <div id="correcta" class="hidden">
            <i class="fa fa-trophy "></i>
            <h4>Respuesta correcta</h4>
            
             <button type="button" class="btn-trivia-sig btn btn-default" rel="{{URL::action('SalasController@getTrivia',$trivia->sala->id)}}">
                Siguiente
              </button>
 
          </div>
          <div id="incorrecta" class="hidden">
            <i class="fa fa-frown-o"></i>
            <h4>Respuesta Incorrecta</h4>
            <p class="r_correcta"></p>
             <button type="button" class="btn-trivia-sig btn btn-default" rel="{{URL::action('SalasController@getTrivia',$trivia->sala->id)}}">
                Siguiente
             </button>
          </div>
    
          
      </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 


