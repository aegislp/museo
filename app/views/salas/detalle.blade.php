
<div class="heder_sala">
  <h1> {{$seleccion->nombre}}</h1>
  <div class="btn-group" style="float:right">
    <button type="button" class="btn btn-default"> <i class="fa fa-bars"></i> Objetos</button>
    <button type="button" class="btn-trivia btn btn-default" rel="{{URL::action('SalasController@getTrivia',$seleccion->id)}}">
      <i class="fa fa-question"></i> Trivia
    </button>
    <button type="button" class="btn btn-default"><i class="fa fa-gamepad"></i> Juegos</button>
    <button type="button" class="btn btn-default"> <i class="fa fa-thumbs-o-up"></i> like</button>
  </div>

</div>
<br>
<hr>
  {{$seleccion->descripcion}}
<hr>

<p> 
  @foreach( glob('assets/img/salas/'.$seleccion->id.'/galeria/*_s.jpg')  as $imagen)
  <a class="fancybox" href=" {{asset(str_replace('_s','_b',$imagen))}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">{{HTML::image($imagen)}}</a>
  @endforeach
</p>
