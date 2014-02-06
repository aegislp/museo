@extends('base')

@section('contenido')
 
@if(!Auth::check()) 
<div id="headerwrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Para una mejor experiencia te invitamos a Ingresar.</h1>
                <form role="form" id="form-login" method="post" action="{{ URL::action('UsersController@login') }}" class="col-lg-12">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                    <button type="submit" class="btn btn-default btn-warning">
                        Ingresar
                    </button>
                </form>  
                <br>
                <p id="form-login-registro"> ¿No tenes usuario? <a href="">Registrate!!</a><p>      
            </div> 
            <div class="col-lg-6">
                <img class="img-responsive" src="assets/img/ipad-hand.png" alt="">
            </div> 
        </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /headerwrap -->

@endif


<div id="baner_museo">
    {{HTML::image('assets/img/banner.jpg','Museo')}}
</div>

<div class="container">
    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3">
        <h1>Museo de Ciencia Naturales <br> La Plata</h1>
        <h3>Los museos de verdad son los sitios en los que el tiempo se transforma en espacio.<br>
            <strong>Orhan Pamuk</strong>
        </h3>
      </div>
    </div><!-- /row -->
    
    <div class="row mt centered">
      <div class="col-lg-4">
        <img class="img-circle" src="assets/img/pic1.jpg" width="140" alt="">
        <h4>Salas</h4>
        <p>
          Más de veinte salas de exhibición situadas . Posee además la única colección de arte egipcio en Latinoamérica, la cual fue obtenida por científicos argentinos tras realizar excavaciones en Sudán.
        </p>
        <p><i class="glyphicon glyphicon-plus">mas...</i> </p>
      </div><!--/col-lg-4 -->

      <div class="col-lg-4">
        <img class="img-circle" src="assets/img/pic2.jpg" width="140" alt="">
        <h4>Objetos</h4>
        <p>
          El museo posee alrededor de 3.000.000 objetos en su colección, y sólo una pequeña parte de los mismos se encuentran en exhibición.
        </p>
        <p><i class="glyphicon glyphicon-plus">mas...</i> </p>
      </div><!--/col-lg-4 -->

      <div class="col-lg-4">
        <img class="img-circle" src="assets/img/pic3.jpg" width="140" alt="">
        <h4>Recorrido</h4>
        <p>Descubre los distintos recorridos que posee el museo a travez de sus salas en espiral que al recorrerlas permiten comprender la evolución de la vida en la Tierra desde sus orígenes hasta la aparición del ser humano</p>
        <p><i class="glyphicon glyphicon-plus">mas...</i> </p>
      </div><!--/col-lg-4 -->
    </div><!-- /row -->
  </div><!-- /container -->
 

@stop

@section('script')
<script type="text/javascript">
	
	$(document).ready(function(){
		$('.carousel').carousel()

	})
</script>
@stop