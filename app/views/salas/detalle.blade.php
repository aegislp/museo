
<div class="heder_sala">
    <h1> {{$sala->nombre}}</h1>
    <div class="btn-salas btn-group" style="float:right">
        <a href="{{URL::action('SalasController@getObjetos',$sala->id)}}" type="button" class="btn btn-default"> 
            <i class="fa fa-bars"></i> Objetos
        </a>
        <button type="button" class="btn-trivia btn btn-default" rel="{{URL::action('SalasController@getTrivia',$sala->id)}}">
            <i class="fa fa-question"></i> Trivia
        </button>
        <button  rel="{{URL::action('SalasController@getBuscarObjeto',$sala->id)}}" type="button" class="btn-juego btn btn-default">
            <i class="fa fa-gamepad"></i> Juegos
        </button>
         <button rel="{{URL::action('SalasController@getMeGusta',$sala->id)}}" type="button" class="btn_like btn btn-default"> <i class="fa fa-thumbs-o-up"></i> like</button>
            
    </div>

</div>
<br>
<hr>
  {{$sala->descripcion}}
<hr>

<p> 
  @foreach( glob('assets/img/salas/'.$sala->id.'/galeria/*_s.jpg')  as $imagen)
  <a class="fancybox" href=" {{asset(str_replace('_s','_b',$imagen))}}" data-fancybox-group="gallery" >{{HTML::image($imagen)}}</a>
  @endforeach
</p>
