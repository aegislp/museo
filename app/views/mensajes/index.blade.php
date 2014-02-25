@extends('base')

@section('title')  
   Museo: Contacto   
@stop
@section('/menu/contacto')
m_activo
@stop


@section('contenido')
@include('nav',array('nav'=> array('Inicio'=>URL::route('home'),'Contacto' =>'')))

<div class="row mark">
        <h3><i class="fa fa-envelope"></i>  CONTACTOS</h3>
    </div>

<div class="rows container">
   <h1>Contacto</h1> 
   @if(Session::has('mensaje'))
  <div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Ok!</strong> {{Session::get('mensaje')}}.
</div>

@endif
  <div class="col-lg-5 col-lg-offset-1 clearfix" style="border-right:solid 1px #CCC">

    <div class="col-lg-12">
     {{ Form::open(array( 'method' => 'POST') ) }}
  <div class="form-group">
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', null,array('class' => 'required form-control')) }}
  </div>
  <div class="form-group">
    {{ Form::label('asunto', 'Asunto') }}
    {{ Form::text('asunto', null,array('class' => 'form-control')) }}
  </div>
    <div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', null,array('class' => 'form-control')) }}
  </div>

  <div class="form-group2">
    {{ Form::label('mensaje', 'Descripcion') }}
    {{ Form::textarea('mensaje', null,array('class' => 'form-control','rows'=>6)) }}
  </div>
  <br>
  <div class="form-group2">
   
    {{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-lg pull-right clearfix')) }}
  </div>

 {{Form::close()}}

  </div>
  </div>
  <div class="col-lg-6" >
    <p><i class="fa fa-phone fa-5"></i> Telefonos </p>
    <ul>
     
      <li>(54-221) 425-7744 </li>
      <li>(54-221) 425-9161 </li>
      <li>(54-221) 425-9638 </li>
      
    </ul>  
     <p><i class="fa fa-globe fa-5"></i> Web</p>
       <ul>
      <li>http://www.fcnym.unlp.edu.ar/</li>
     
    </ul>  
  </div>
</div>
 

@stop

 
