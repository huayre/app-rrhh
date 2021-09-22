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
        <div class="col-md-6 caja">

        </div>
    </div>
@endsection

