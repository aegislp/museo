 <style type="text/css">

     .modal-content{
         background-color: #2d2d2d;
    }
 </style>
<div class="modal fade" id="modal_audio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
          <div class="modal-footer   mod_audio">
                <div class="col-md-2 icono">
                      <i class="fa fa-bullhorn"></i>   
                </div>
               
                <div class="col-md-10 player">
                    <div id="jquery_jplayer_1" class="jp-jplayer" rel="{{asset('assets/audio/'.$audio.'.mp3')}}"></div>
                    <div id="jp_container_1" class="jp-audio">
                        <div class="jp-type-single">
                            <div class="jp-gui jp-interface">
                                <ul class="jp-controls">
                                    <li><a href="javascript:;" class="jp-play btn btn-primary" tabindex="1"><i class="fa fa-play botonera"></i></a></li>
                                    <li><a href="javascript:;" class="jp-pause btn btn-primary" tabindex="1"><i class="fa fa-pause botonera"></i></a></li>
                                </ul>
                                <div class="jp-current-time"></div>
                                <div class="jp-duration"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            
            
                
                <button type="button" class="btn btn-primary" id="btn_cerrar_guia">Cerrar</button>
            </div>
        </div>
    </div>
</div>
 
     
<script>
   $(document).ready(function(){

        $("#jquery_jplayer_1").jPlayer({
            ready: function (event) {
            $(this).jPlayer("setMedia", {
                mp3:$(this).attr('rel') 
                
            });
        },
        swfPath: "../js",
        supplied: "mp3",
        wmode: "window",
        smoothPlayBar: true,
        keyEnabled: true,
        
  });
 
});
    </script>