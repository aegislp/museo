@extends('base')

 
  
@section('contenido')
  
<style type="text/css">
 
    .barra{
        background-color: white;
    }
    .barra > div{
        padding: 0.5em;
    }
    .barra p{
        font-size: 2em;
        font-family: 'serif'
    }
    
    .panel-heading{
        border-bottom:solid 5px #2BE8CE !important;
        color: #2BE8CE !important;
        font-weight: bold;
        font-size: 1.5em;
    }
    .panel-body{
        background-color: #F2F2F2;
    }
    .salas_index{
        border-bottom: solid 1px #F2F2F2;
        color: #666666 !important;
        display: inline-block;
        width: 100%;
        margin-bottom: 1em;
    }
    .salas_index > img{
        float: left;
        margin-right: 1em;
    } 
</style>
 

<div class="rows barra clearfix" style="margin-top:2em">
  
    <div class="col-lg-6">
  
      <p>Museo de Ciencia Naturales </p>
       
         
    </div>
    <div class="col-lg-6">
        {{Form::open(array('method'=>'post','role'=>'search','class'=>'form-search clearfix'))}}
        <div class="" id="busqueda_objeto" >
            <input class="form-control" type="text" placeholder="codigo de objeto" name="codigo" />
           <button type="submit" class="btn btn-default btn-sm">
              <i class="fa fa-search"></i> <span id="span_busqueda"> Buscar</span>
            </button>
        </div>
        {{Form::close()}}
    </div>
</div>

<div class="rows clearfix" style="margin-top:2em">
    <div class="col-lg-6">
          <div class="panel panel-default">
              <div class="panel-heading">Salas</div>
              <div class="panel-body">
                 <a  href="{{URL::action('SalasController@getIndex')}}" class="salas_index">
                    <img class="img-rounded" src="assets/img/pic1.jpg" width="140" alt="">
                    <h4>Salas</h4>
                    <p>
                      Más de veinte salas de exhibición situadas . Posee además la única colección de arte egipcio en Latinoamérica.
                    </p>
                    <p><i class="glyphicon glyphicon-plus">mas...</i> </p>
                  </a>
                    <a  href="{{URL::action('SalasController@getIndex')}}" class="salas_index">
                    <img class="img-rounded" src="assets/img/pic1.jpg" width="140" alt="">
                    <h4>Salas</h4>
                    <p>
                      Más de veinte salas de exhibición situadas . Posee además la única colección de arte egipcio en Latinoamérica.
                    </p>
                    <p><i class="glyphicon glyphicon-plus">mas...</i> </p>
                  </a>
              </div>
            </div>
    </div>
    <div class="col-lg-6">
         <div class="panel panel-default">
              <div class="panel-heading">Objetos Destacados</div>
              <div class="panel-body">
                  <a  href="{{URL::action('SalasController@getIndex')}}" class="salas_index">
                    <img class="img-circle" src="assets/img/pic1.jpg" width="140" alt="">
                    <h4>Salas</h4>
                    <p>
                      Más de veinte salas de exhibición situadas . Posee además la única colección de arte egipcio en Latinoamérica.
                    </p>
                    <p><i class="glyphicon glyphicon-plus">mas...</i> </p>
                  </a>
                    <a  href="{{URL::action('SalasController@getIndex')}}" class="salas_index">
                    <img class="img-circle" src="assets/img/pic1.jpg" width="140" alt="">
                    <h4>Salas</h4>
                    <p>
                      Más de veinte salas de exhibición situadas . Posee además la única colección de arte egipcio en Latinoamérica.
                    </p>
                    <p><i class="glyphicon glyphicon-plus">mas...</i> </p>
                  </a>
              </div>
            </div>
    </div>
</div>


<div class="container">
<hr>
    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3">
        
        <h3>Los museos de verdad son los sitios en los que el tiempo se transforma en espacio.<br>
            <strong>Orhan Pamuk</strong>
        </h3>
      </div>
    </div><!-- /row -->
    
    <div class="row mt centered">
      <a  href="{{URL::action('SalasController@getIndex')}}" class="col-lg-4 salas_home">
        <img class="img-circle" src="assets/img/pic1.jpg" width="140" alt="">
        <h4>Salas</h4>
        <p>
          Más de veinte salas de exhibición situadas . Posee además la única colección de arte egipcio en Latinoamérica.
        </p>
        <p><i class="glyphicon glyphicon-plus">mas...</i> </p>
      </a><!--/col-lg-4 -->

      <a href="{{URL::action('ObjetosController@getIndex')}}" class="col-lg-4 salas_home">

        <img class="img-circle" src="assets/img/pic2.jpg" width="140" alt="">
        <h4>Objetos</h4>
        <p>
          El museo posee alrededor de 3.000.000 objetos en su colección, y sólo una pequeña parte de los mismos se encuentran en exhibición.
        </p>
        <p><i class="glyphicon glyphicon-plus">mas...</i> </p>
      </a><!--/col-lg-4 -->
      
      <a class="col-lg-4 salas_home">
         
        <img class="img-circle" src="assets/img/pic3.jpg" width="140" alt="">
        <h4>Recorrido</h4>
        <p>El recorrido de nuestras  salas en espiral  permite comprender la evolución de la vida en la Tierra desde sus orígenes hasta la aparición del ser humano</p>
        <p><i class="glyphicon glyphicon-plus">mas...</i> </p>
       
      </a><!--/col-lg-4 -->
    </div><!-- /row -->
  </div><!-- /container -->
 

@stop
 