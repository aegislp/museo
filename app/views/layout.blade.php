<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','Museo - La Plata')</title>
        <meta charset="utf8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

        {{ HTML::style('assets/css/bootstrap.css', array('media' => 'screen')) }}
        {{ HTML::style('assets/css/font-awesome.min.css', array('media' => 'screen')) }}
        {{ HTML::style('assets/css/estilo.css', array('media' => 'screen')) }}
        @yield('css')
    
        {{ HTML::script('assets/js/jquery-1.10.1.min.js') }}
        {{ HTML::script('assets/js/jquery.validate.js') }}
        {{ HTML::script('assets/js/bootstrap.min.js') }}
        {{ HTML::script('assets/js/jquery.blockUI.js') }}
        {{ HTML::script('assets/js/tinymce/tinymce.min.js') }}
        {{ HTML::script('assets/fancy/jquery.fancybox.js')}}
        {{ HTML::script('assets/js/funciones.js') }}
        
   
        @yield('script')

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../../assets/js/html5shiv.js"></script>
          <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
      
            @yield('contenedor') 
             
           
       
    </body>
</html>