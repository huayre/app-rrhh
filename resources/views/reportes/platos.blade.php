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
    <div class="row">
        <div class="col-md-6 ">
            <div class="card caja">
                <div class="card-body">
                    <h6 class="card-title mb-0">Número de personales</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-lg-flex">
                                <h2 class="mb-0"></h2>
                                <div class="d-flex align-items-center ml-lg-2">
                                    <i class="mdi mdi-clock text-muted"></i>
                                    <small class="ml-1 mb-0">Updated: 9:10am</small>
                                </div>
                            </div>
                            <small class="text-gray">Raised from 89 orders.</small>
                        </div>
                        <div class="d-inline-block">
                            <div class="bg-success px-3 px-md-4 py-2 rounded">
                                <i class="icon-people text-white icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="card caja mt-5">
        <div class="card-body">
            <h4 class="card-title text-center">ÁREAS</h4>
            <div class="float-chart-container">
                <div id="pie-chart" class="float-chart"></div>
            </div>
        </div>
    </div>
{{--    <input type="hidden" value="{{$areas}}" id="areas">--}}
{{--    <input type="hidden" value="{{$vacantes}}" id="vacantes">--}}
{{--    <input type="hidden" value="{{$empleados}}" id="empleados">--}}
@endsection
@section('scripts')
    <script>
        $('#daterange').daterangepicker(
            {
                "locale": {
                    "format": "MM-DD-YYYY",
                    "separator": " - ",
            }}
        );
        function  generarReporte() {
            let daterange = document.getElementById('daterange').value;
            console.log(daterange);
        }

    </script>


    <script>

        (function($) {
            'use strict';
            let areas = JSON.parse( document.getElementById('areas').value);
            var data = [];
            for (const elemento of areas){
                let item = {
                    data: 20000,
                    color: colorHEX(),
                    label: elemento.nombre
                }
                data.push(item);
            }

            if($("#pie-chart").length) {
                $.plot("#pie-chart", data, {
                    series: {
                        pie: {
                            show: true,
                            radius: 1,
                            label: {
                                show: true,
                                radius: 3 / 4,
                                formatter: labelFormatter,
                                background: {
                                    opacity: 0.5
                                }
                            }
                        }
                    },
                    legend: {
                        show: false
                    }
                });
            }

            function labelFormatter(label, series) {
                return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/></div>";
            }
            function generarLetra(){
                var letras = ["a","b","c","d","e","f","0","1","2","3","4","5","6","7","8","9"];
                var numero = (Math.random()*15).toFixed(0);
                return letras[numero];
            }

            function colorHEX(){
                var coolor = "";
                for(var i=0;i<6;i++){
                    coolor = coolor + generarLetra() ;
                }
                return "#" + coolor;
            }
        })(jQuery);
    </script>
@endsection

