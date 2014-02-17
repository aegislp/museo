@extends('adminLayout')

@section('titulo_admin')
	Estadisticas <small>Estadisticas de : Salas, Objetos, Usuarios, Visitas</small>
@stop

@section('navegacion')
	<li><a href="{{URL::action('AdministracionController@getIndex')}}"><i class="fa fa-cog"></i> Panel</a></li>
    <li class="active"><i class="fa fa-envelope"></i> Estadisticas</li>
@stop

@section('contenido')
 
	@section('/menu/estadisticas')  
	active
	@stop
	 
          


	<div class="rows">
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

    
    <div class="rows">     
        <div class="col-lg-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i style="color:#FFF" class="fa fa-bar-chart-o"></i>Salas mejor valoradas</h3>
              </div>
              <div class="panel-body" id="container">
               
              </div>
            </div>
          </div>
        </div><!-- /.row -->
   <div class="col-lg-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i style="color:#FFF" class="fa fa-bar-chart-o"></i>Objetos Mejor valorados</h3>
              </div>
              <div class="panel-body" id="container2">
               
              </div>
            </div>
          </div>
        </div><!-- /.row -->
		

	</div>


@stop

@section('script')

 	 {{ HTML::script('assets/js/highcharts.js' )}}
	<script type="text/javascript">
		$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Salas',
            align: 'center',
            verticalAlign: 'middle',
            y: 50
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        textShadow: '0px 1px 2px black'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            innerSize: '50%',
            data: [
                ['Esqueletos',   45.0],
                ['Egipsia',       26.8],
                ['Trofeos', 12.8],
                ['INca',    8.5],
                ['Dinosaurios',     6.2],
                ['Otros',   0.7]
            ]
        }]
    });

  $('#container2').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Salas',
            align: 'center',
            verticalAlign: 'middle',
            y: 50
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        textShadow: '0px 1px 2px black'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            innerSize: '50%',
            data: [
                ['Esqueletos',   45.0],
                ['Egipsia',       26.8],
                ['Trofeos', 12.8],
                ['INca',    8.5],
                ['Dinosaurios',     6.2],
                ['Otros',   0.7]
            ]
        }]
    });
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