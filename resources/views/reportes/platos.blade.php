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
@endsection
@section('scripts')
{{--    <script>--}}
{{--        $('#daterange').daterangepicker(--}}
{{--            {--}}
{{--                "locale": {--}}
{{--                    "format": "MM-DD-YYYY",--}}
{{--                    "separator": " - ",--}}
{{--            }}--}}
{{--        );--}}
{{--        function  generarReporte() {--}}
{{--            let daterange = document.getElementById('daterange').value;--}}
{{--            console.log(daterange);--}}
{{--        }--}}

{{--    </script>--}}


    <script>
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

