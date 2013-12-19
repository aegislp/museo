<ol class="breadcrumb">
	
	@foreach($nav as $nombre => $url)
	

		@if($url != '')
			
			<li><a href="{{ URL::route($url) }}">{{ ucfirst($nombre) }}</a></li>
		@else
			<li class="active">{{ ucfirst($nombre) }} </li>	
		@endif
		
	@endforeach
	
	
</ol>
