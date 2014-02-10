@extends('adminLayout')



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
                        Highcharts.dateFormat('%e. %b', this.x) +': '+ this.y +' m';
                }
            },
            
            series: [{
                name: 'Visitras de Febrero',
                // Define the data points. All series have a dummy year
                // of 1970/71 in order to be compared on the same x axis. Note
                // that in JavaScript, months start at 0 for January, 1 for February etc.
                data: [
                    [Date.UTC(2014,  1, 1), 0   ],
                    [Date.UTC(2014,  1, 2), 50   ],
                    [Date.UTC(2014,  1, 3), 0   ],
                    [Date.UTC(2014,  1, 4), 60   ],
                    [Date.UTC(2014,  1, 5), 70   ],
                    [Date.UTC(2014,  1, 6), 0   ],
                    [Date.UTC(2014,  1, 7), 0   ],
                    [Date.UTC(2014,  1, 8), 0   ],
                    [Date.UTC(2014,  1, 9), 0   ],
                    [Date.UTC(2014,  1, 10), 1000   ],
                    [Date.UTC(2014,  1, 11), 0   ],
                    [Date.UTC(2014,  1, 12), 0   ],
                    [Date.UTC(2014,  1, 13), 0   ],
                    [Date.UTC(2014,  1, 14), 0   ],
                    [Date.UTC(2014,  1, 15), 0   ],
                    [Date.UTC(2014,  1, 16), 0   ],
                    [Date.UTC(2014,  1, 17), 0   ],
                    [Date.UTC(2014,  1, 18), 0   ],
                    [Date.UTC(2014,  1, 19), 0   ],
                    [Date.UTC(2014,  1, 20), 0   ],
                    [Date.UTC(2014,  1, 21), 20   ],
                    [Date.UTC(2014,  1, 22), 0   ],
                    [Date.UTC(2014,  1, 23), 0   ],
                    [Date.UTC(2014,  1, 24), 0   ],
                    [Date.UTC(2014,  1, 25), 0   ],
                    [Date.UTC(2014,  1, 26), 0   ],
                    [Date.UTC(2014,  1, 27), 0   ],
                    [Date.UTC(2014,  1, 28), 0   ] 
                    
                     
                ]
            },    ]
        });

  });
</script>
 
@stop