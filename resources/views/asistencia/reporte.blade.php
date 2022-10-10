@extends('plantilla.index')
@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table id="tabla-reposte-asistencia" class="table table-sm"  style="border-radius: 15px; border: 3px solid #03a9f3;">
                    <thead>
                        <tr  class="table-success">
                            <th style="width: 500px;" style="border: 3px solid #03a9f3;">ASISTENCIA - FECHA</th>
                            @foreach($listaPersonas as $persona)
                                <th>{{$persona->nombre . ' ' . $persona->apellido}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($asistencias as $asistencia)
                            <tr>
                                <td style="width: 500px;" class="table-success">{{$asistencia->dia}}</td>
                                @foreach($listaPersonas as $persona)
                                    @php $status = false @endphp
                                    @foreach($asistencia->personas as $item)
                                        @if($persona->id == $item->id)
                                        @php $status = true @endphp
                                            @break
                                        @endif
                                    @endforeach 
                                    @if($status)
                                        <td>
                                            <i class="fa fa-check" style="color: red;"></i>
                                        </td>
                                    @else
                                        <td>
                                            <i class="fa fa-times" style="color: green;"></i>
                                        </td>
                                    @endif
                                @endforeach    
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <div class="card caja">
        <div class="card-body">
            <h6 class="card-title mb-0">NIVEL DE ASISTENCIA 2018 - 2022</h6>
            <div class="d-flex justify-content-between align-items-center">
                <canvas id="nivel-de-asistencia-por-area"></canvas>
            </div>
        </div>
    </div>
    <br>
    <div class="card caja">
        <div class="card-body">
            <h6 class="card-title mb-0">NIVEL DE ASISTENCIA 2018 - 2022 POR ÁREA</h6>
            <div class="d-flex justify-content-between align-items-center">
                <canvas id="nivel-de-asistencia"></canvas>
            </div>
        </div>
    </div>
    <div class="card caja mt-5">
        <div class="card-body">
            <h4 class="card-title">10 PERSONALES PUNTUALES</h4>
            <div class="float-chart-container">
                <div id="column-chart1" class="float-chart"></div>
            </div>
        </div>
    </div>
    <div class="card caja mt-5">
        <div class="card-body">
            <h4 class="card-title">10 PERSONALES IMPUNTUALES</h4>
            <div class="float-chart-container">
                <div id="column-chart2" class="float-chart"></div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
        const labels = [
        'Enero 2018',
        'junio 2018',
        'enero 2019',
        'junio 2019',
        'enero 2020',
        'junio 2020',
        'enero 2021',
        'junio 2021',
        'enero 2022',
        'Junio 2022',
      ];
    
      const data = {
        labels: labels,
        datasets: [{
          label: 'VENTAS',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: [90, 50, 40, 50, 70, 45, 70, 100, 50, 60],
        },
        {
          label: 'COMPRAS',
          backgroundColor: 'rgb(100, 225, 87)',
          borderColor: 'rgb(100, 225, 87)',
          data: [50, 50, 30, 60, 70, 40, 60, 100, 40, 60],
        },
        {
          label: 'COCINA',
          backgroundColor: 'rgb(42, 231, 180)',
          borderColor: 'rgb(42, 231, 180)',
          data: [10, 50, 30, 20, 20, 35, 20, 90, 40, 30],
        },
        {
          label: 'ATENCIÓN',
          backgroundColor: 'rgb(231, 50, 42)',
          borderColor: 'rgb(231, 50, 42)',
          data: [40, 40, 40, 20, 60, 85, 90, 100, 30, 60],
        },
        {
          label: 'RECURSO HUMANOS',
          backgroundColor: 'rgb(93, 42, 231)',
          borderColor: 'rgb(93, 42, 231)',
          data: [30, 80, 50, 50, 50, 55, 90, 100, 40, 10],
        },
        {
          label: 'LIMPIEZA',
          backgroundColor: 'rgb(243, 23, 171)',
          borderColor: 'rgb(243, 23, 171)',
          data: [100, 90, 80, 100, 90, 90, 100, 80, 90, 100],
        },
        {
          label: 'ADMINISTRACIÓN',
          backgroundColor: 'rgb(3, 5, 5)',
          borderColor: 'rgb(3, 5, 5)',
          data: [10, 10, 10, 10, 20, 20, 20, 10, 5, 10],
        }]
      };
    
      const config = {
        type: 'line',
        data: data,
        options: {}
      };

    new Chart(
        document.getElementById('nivel-de-asistencia'),
        config
      );

      const labels_1 = [
        'Enero 2018',
        'Marzo 2018',
        'Octubre 2018',
        'Abril 2019',
        'Agosto 2019',
        'Setiembre 2019',
        'Mayo 2020',
        'Diciembre 2020',
        'Mayo 2021',
        'Junio 2022',
      ];
    
      const data_1 = {
        labels: labels_1,
        datasets: [{
            label: 'Asistencia General',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [90, 50, 40, 50, 70, 45, 70, 100, 50, 60],
            pointStyle: 'circle',
            pointRadius: 10,
            pointHoverRadius: 15,
            fill: false,
            cubicInterpolationMode: 'monotone',
            tension: 0.4
        }]
      };
    
      const config_1 = {
        type: 'line',
        data: data_1,
        options: {}
      };

    new Chart(
        document.getElementById('nivel-de-asistencia-por-area'),
        config_1
      );

  /////
  var data1 = [
    ['juan', 300],
    ['martin', 295],
    ['rogelio', 280],
    ['dunas', 275],
    ['federico', 270],
    ['wilson', 265],
    ['claudia', 260],
    ['maria', 255],
    ['rosas', 254],
    ['mertina', 240],
  ];
    if($("#column-chart1").length) {
        $.plot("#column-chart1", [data1], {
            series: {
                bars: {
                    show: true,
                    barWidth: 0.6,
                    align: "center"
                }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            },
            grid: {
                borderWidth: 0,
                labelMargin: 10,
                hoverable: true,
                clickable: true,
                mouseActiveRadius: 6,
            }

        });
    }  
    
    var data2 = [
    ['lino', 10],
    ['mera', 12],
    ['mauro', 14],
    ['rojas', 16],
    ['luna', 18],
    ['braulio', 22],
    ['zosa', 23],
    ['yonel', 25],
    ['martel', 27],
    ['feder', 30],
  ];
    if($("#column-chart2").length) {
        $.plot("#column-chart2", [data2], {
            series: {
                bars: {
                    show: true,
                    barWidth: 0.6,
                    align: "center"
                }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            },
            grid: {
                borderWidth: 0,
                labelMargin: 10,
                hoverable: true,
                clickable: true,
                mouseActiveRadius: 6,
            }

        });
    } 
    </script>
    <script src="{{asset('js/reporte.js')}}"></script>
@endsection
