@extends('adminLayout')

@section('/menu/inicio')
active
@stop

@section('contenido')
 
 

        <div class="row">
          <div class="col-lg-12">
            <h1>Panel de Control <small>Museo de Ciencias Naturales La Plata</small></h1>
             
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Bienvenido a la <b>Administracion</b> sea cuidadoso!!. Ante cualquier duda consulte al desarrollador .
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-user fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">{{$cant_usuarios}}</p>
                    <p class="announcement-text">Usuarios!</p>
                  </div>
                </div>
              </div>
              <a href="{{ URL::action('AdministracionController@getUsuarios')}}">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Ver Mas
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-home fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">{{$cant_salas}}</p>
                    <p class="announcement-text">Salas</p>
                  </div>
                </div>
              </div>
              <a href="{{URL::action('AdminSalasController@getIndex')}}">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Administrar 
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">{{$cant_objetos}}</p>
                    <p class="announcement-text">Objetos</p>
                  </div>
                </div>
              </div>
              <a href="{{URL::action('AdminSalasController@getIndex')}}">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                       Listar
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6" >
                    <i class="fa fa-comments fa-5x" style="color:#FFF"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">{{$cant_mensajes}}</p>
                    <p class="announcement-text">Nuevos Cometarios!</p>
                  </div>
                </div>
              </div>
              <a href="{{URL::action('AdministracionController@getMensajes')}}">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Ver mas
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i style="color:#FFF" class="fa fa-bar-chart-o"></i>Estadisticas del mes de Febrero</h3>
              </div>
              <div class="panel-body">
                <div id="contenedor_grafico"></div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        
 
 
@stop

@section('script')
 {{ HTML::script('assets/js/highcharts.js' )}}
<script type="text/javascript">
  $(document).ready(function(){
        var estadisticas = [];
        /* lleno las estadostocas */
        @foreach($estadisticas as $i => $estadistica)
          estadisticas[{{$i}}] = [ Date.UTC(2014,  {{ $estadistica->mes() }}, {{$i + 1}}), {{$estadistica->visitas}} ];
        @endforeach
                    
      $('#contenedor_grafico').highcharts({
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Visitas pertenecientes al mes de Febrero'
            },
             
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: { // don't display the dummy year
                    month: '%e. %b',
                    year: '%b'
                }
            },
            yAxis: {
                title: {
                    text: 'Nro de Visitas.'
                },
                min: 0
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        Highcharts.dateFormat('%e. %b', this.x) +': '+ this.y +' visitas';
                }
            },
            
            series: [{
                name: 'Visitras de Febrero',
                // Define the data points. All series have a dummy year
                // of 1970/71 in order to be compared on the same x axis. Note
                // that in JavaScript, months start at 0 for January, 1 for February etc.
                data: estadisticas
            },    ]
        });

  });
</script>
 
@stop