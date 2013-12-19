   	
         	
         
 <h1>{{$seleccion->nombre}}</h1> 	
      			<hr>
            {{$seleccion->descripcion}}
        	  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <hr>
            
            <p> 
            @foreach( glob('assets/img/salas/'.$seleccion->id.'/*_s.jpg')  as $imagen)
              <a class="fancybox" href=" {{asset(str_replace('_s','_b',$imagen))}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">{{HTML::image($imagen)}}</a>
            @endforeach
            </p>
            