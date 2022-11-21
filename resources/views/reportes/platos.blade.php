@extends('plantilla.index')
@section('contenido')
    <style>
     .caja{
         border-left: #03a9f3 solid 5px;
         border-radius: 10px;
         background-color:#D2E3F3
     }
    </style>
    <p class="text-center text-primary" style="font-size: 25px" >RESUMEN DE PLATOS</p>
    <input type="text" id="daterange" class="form-control text-center" />
    <button class="btn btn-success" onclick="generarReporte()">GENERAR</button>

    <div class="embed-responsive">
        <div class="card caja mt-5">
            <div class="card-body">
                <h4 class="card-title">PLATOS VENDIDOS</h4>
                <div class="float-chart-container">
                    <div id="column-chart" class="float-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="{{json_encode($reportePlatos)}}" id="platos">
    <p style="text-align: center;margin-top: 20px;color: #0c85d0;font-size: 30px">LINEA DEL TIEMPO</p>
    <div class="row">
        <select class="form-control col-md-6 border-primary">
            @foreach($reportePlatos as $plato)
                <option >{{$plato['nombre']}}</option>
            @endforeach
        </select>
        <button class="btn btn-success text-center col-md-6"  onclick="generarReporte()">GENERAR</button>
    </div>

    <div class="caja" style="margin-top: 20px">
        <canvas id="myChart"></canvas>
    </div>
@endsection
@section('scripts')
    <script>
        let myChart;
        $(document).ready(function (){
            grafica2();
        });
        function  generarReporte(){
            $('#myChart').hide();
            myChart.destroy();
            grafica2();
            setTimeout(function(){
                $('#myChart').show();
            }, 2000);
        }
        function getRandomArbitrary(min, max) {
            return Math.random() * (max - min) + min;
        }
        function grafica2 (){
            const labels = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
            array = [];
            for (let i=0;i<=10;i++) {
                array.push(getRandomArbitrary(20, 300))
            }
            const data = {
                labels: labels,
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data:array,
                }]
            };
            const config = {
                type: 'line',
                data: data,
                options: {}
            };
             myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        }
        (function($) {
            'use strict';
            let platos = JSON.parse( document.getElementById('platos').value);
            var data = [];
            for (const elemento of platos){
                let item = [elemento.nombre, elemento.cantidad];
                data.push(item);
            }

            if($("#column-chart").length) {
                $.plot("#column-chart", [data], {
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
        })(jQuery);
    </script>
@endsection

