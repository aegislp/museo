@extends('base')
@section('css')
{{HTML::style('assets/fancy/jquery.fancybox.css')}}
@stop
@section('contenido')
   @include('nav',array('nav'=> array('home'=>'home','salas'=>'salas.index',$seleccion->id=>'')))
<div class="row">
	 
 
	<div class="col-md-12">
		
		<select class="form-control input-lg" id="select_sala">
			@foreach ($salas as $sala)	
			<option value="{{$sala->id}}">{{$sala->nombre}}</option>
			 @endforeach
		</select>
		<br>
		<br>
			
		 <!-- tabs left -->
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs" id="ul_menu">
        	@foreach ($salas as $sala)	
          <li class="@if($sala->id == $seleccion->id)active@endif">
          	<a  class="link_sala" alt="{{$sala->id}}" data-toggle="tab" >
          	{{$sala->nombre}}</a>
          </li>
          
          @endforeach	
        </ul>
        <div class="tab-content col-md-offset-2">
         <div class="tab-pane active" id="contenedor_sala">
         <h1>{{$sala->nombre}}</h1> 	
      			<hr>
            {{$seleccion->descripcion}}
        	  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <hr>
             
           @foreach(glob('assets/img/salas/'.$seleccion->id.'/{$seleccion->*_s.jpg') as $imagen)
             <div class="col-xs-6 col-md-3">
              <a class="fancybox" href="{{asset('img/salas/'.$. ')  }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">{{HTML::image('assets/img/objetos/'.$objeto->id.'/thumbnail.png')}}</a>

            <a href="/salas/objetos/{{$objeto->id}}" class="fancybox thumbnail">


             
            </a>
            </div>
            @endforeach
 
  

      	
         	
  <h3>Simple image gallery</h3>
  <p>
    

    <a class="fancybox" href="/museo/public/img/2_b.jpg" data-fancybox-group="gallery" title="Etiam quis mi eu elit temp"><img src="/museo/public/img/2_s.jpg" alt="" /></a>

    <a class="fancybox" href="/museo/public/img/3_b.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="/museo/public/img/3_s.jpg" alt="" /></a>

    <a class="fancybox" href="/museo/public/img/4_b.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="/museo/public/img/4_s.jpg" alt="" /></a>
  </p>
         
        </div>
        
      </div>
      <!-- /tabs -->
      
	</div>

</div>
@stop
@section('script')
{{HTML::script('assets/fancy/jquery.fancybox.js')}}
 
{{ HTML::script('assets/js/funciones.js') }}

<script type="text/javascript">
    
$(document).ready(function(){

    $('.fancybox').fancybox();


      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'over'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });
})  

</script>
 
 
@stop