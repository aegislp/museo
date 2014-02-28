 <div class="row-fluid clearfix">
		 
	        <div id="reproductor" rel="audio/inicio.mp3"></div>
	        <div id="reproductor" rel="{{URL::asset('objetos/'.$objeto->sala->id.'/audio.mp3')}}"></div>
	        <div id="r_contenedor">
	         	
	            <div class="col-xs-12">
	            	<span class="jp-current-time"></span>
	                 <span class="jp-duration pull-right"></span>           
	            	<div class="progress">
					  <div class="barra_p">
					    
					  </div>
					</div>
					

	            </div>
	            <div class="col-xs-12">
	 				<button class="btn btn-default" id="b_play">
		        		<span class="glyphicon glyphicon-play"></span>
		        	</button>
		        	<button class="btn btn-default" id="b_pause">
		        		<span class="glyphicon glyphicon-pause"></span>
		        	</button>
		        	<button class="btn btn-default" id="b_stop">
		        		<span class="glyphicon glyphicon-stop" ></span>
		        	</button>
	         	</div>
	      	</div>
		</div>
	
		 <div class="row-fluid">
		 	{{HTML::image('assets/img/salas/'.$objeto->sala->id.'/objetos/'.$objeto->id.'_b.jpg','',array('class'=>"img-responsive col-lg-12" ,'id'=>"img-portada"))}}
				 
			 
		</div>
		<div class="row-fluid descripcion">
			<h2>{{$objeto->nombre}}</h2>
			<p>{{$objeto->nombre_cientifico}}</p>
			<p>Datos 1</p>
			<p>Dato 2 1</p>
		</div>
		<div class="row-fluid descripcion">
			{{$objeto->descripcion}}
		</div>
		<div class="row-fluid">
			<div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
		      	<ol class="carousel-indicators">
		        	<li class="" data-slide-to="0" data-target="#carousel-example-generic"></li>
		        	<li data-slide-to="1" data-target="#carousel-example-generic" class=""></li>
		        	<li data-slide-to="2" data-target="#carousel-example-generic" class=""></li>
		      	</ol>
		      	<div class="carousel-inner">
		        	<div class="item next left">
		        		{{HTML::image('assets/objetos/'.$objeto->id.'/1.jpg','',array('data-src'=>"holder.js/900x500/auto/#555:#333/text:Third slide" ))}}
			
		        		 
		        	</div>
		        	<div class="item">
		        		{{HTML::image('assets/objetos/'.$objeto->id.'/2.jpg','',array('data-src'=>"holder.js/900x500/auto/#555:#333/text:Third slide" ))}}
			
		        	</div>
		        	<div class="item active left">
		          		{{HTML::image('assets/objetos/'.$objeto->id.'/3.jpg','',array('data-src'=>"holder.js/900x500/auto/#555:#333/text:Third slide" ))}}
			
		        	</div>
		      	</div>
		      	<a data-slide="prev" href="#carousel-example-generic" class="left carousel-control">
		        	<span class="glyphicon glyphicon-chevron-left"></span>
		      	</a>
		      	<a data-slide="next" href="#carousel-example-generic" class="right carousel-control">
		        	<span class="glyphicon glyphicon-chevron-right"></span>
		      	</a>
		   </div>
		</div>