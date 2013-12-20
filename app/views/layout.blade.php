<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Aprendiendo Laravel')</title>
   <meta charset="utf8"/>
    <!-- Bootstrap -->
    {{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
    {{ HTML::style('assets/css/estilo.css', array('media' => 'screen')) }}
    @yield('css')
    {{ HTML::script('assets/js/jquery-1.10.1.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
   
    @yield('script')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     
    @yield('nav')

    <div class="container">

      <!-- Example row of columns -->
      <div class="row" style="margin-top:5em;">
      

        @yield('contenido') 
         
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    </div> <!-- /container -->
   
    
  </body>
</html>