@extends('plantilla.index')
@section('contenido')
    <style>
     .caja{
         border-left: #03a9f3 solid 5px;
         border-radius: 10px;
         background-color:#D2E3F3
     }
    </style>
    <p class="text-center text-primary" style="font-size: 25px">RESUMEN GENERAL</p>
    <div class="row">
        <div class="col-md-6 ">
            <div class="card caja">
                <div class="card-body">
                    <h6 class="card-title mb-0">Número de personales</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-lg-flex">
                                <h2 class="mb-0">{{$numeroEmpleados}}</h2>
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
        <div class="col-md-6">
            <div class="card caja">
                <div class="card-body">
                    <h6 class="card-title mb-0">Número de postulantes</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-lg-flex">
                                <h2 class="mb-0">{{$numeroPostulantes}}</h2>
                                <div class="d-flex align-items-center ml-lg-2">
                                    <i class="mdi mdi-clock text-muted"></i>
                                    <small class="ml-1 mb-0">Updated: 9:10am</small>
                                </div>
                            </div>
                            <small class="text-gray">Raised from 89 orders.</small>
                        </div>
                        <div class="d-inline-block">
                            <div class="bg-warning px-3 px-md-4 py-2 rounded">
                                <i class=" icon-logout text-white icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card caja mt-5">
                <div class="card-body">
                    <h4 class="card-title">CONVOCATORIAS</h4>
                    <div class="float-chart-container">
                        <div id="column-chart" class="float-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card caja mt-5">
                <div class="card-body">
                    <h4 class="card-title">PERSONALES PUNTUALES</h4>
                    <div class="float-chart-container">
                        <div id="column-chart1" class="float-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card caja mt-5">
        <div class="card-body">
            <h4 class="card-title text-center" style="background-color: #88B8EA;">ÁREAS RECREO TURÍSTICO LA COLPA</h4>
            <div class="float-chart-container">
                <div id="pie-chart" class="float-chart"></div>
            </div>
        </div>
    </div>
    <input type="hidden" value="{{$areas}}" id="areas">
    <input type="hidden" value="{{$vacantes}}" id="vacantes">
    <input type="hidden" value="{{$empleados}}" id="empleados">
@endsection
@section('scripts')
    <script>
        $(function() {
            let empleados = JSON.parse( document.getElementById('empleados').value);
            var data1 = [];
            for (const elemento of empleados){
                let num =  Math.floor(Math.random() * (20 - 17 + 1)) + 17;
                let item = [elemento.nombre, num];
                data1.push(item);
            }
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

            let vacantes = JSON.parse( document.getElementById('vacantes').value);
            var data = [];
            for (const elemento of vacantes){
                let item = [elemento.nombre, elemento.postulantes_count];
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
        });

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

