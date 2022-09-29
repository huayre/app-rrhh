@extends('plantilla.index')
@section('contenido')
    <style>
        .avatar_diseño {
            width: 100px;
            height: 100px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            background: #5cb85c;
        }
        .swal-height{
            height: 350px;
        }
    </style>
    @include('empleado.create_modal')
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalEmpleado()">Nuevo
            Empleado
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_empleados" style="border-radius: 15px; border: 3px solid #03a9f3;">
                    <thead>
                    <tr>
                        <th>Area</th>
                        <th>Nombres</th>
                        <th>DNI</th>
                        <th>Nro. Celular</th>
                        <th>Correo</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{@$empleado->area->nombre}}</td>
                            <td>{{$empleado->nombre . ' '. $empleado->apellido}}</td>
                            <td>{{$empleado->num_dni}}</td>
                            <td>{{$empleado->num_celular}}</td>
                            <td>{{$empleado->correo}}</td>
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarEmpleado('{{$empleado->id}}')"><i
                                        class="fa fa-trash-o text-danger"></i></button>
                                <button class="btn btn-default p-1"><i class="fa fa-edit text-dark"></i></button>
                                <a href="{{$empleado->url_copia_dni}}" target="_blank" class="btn btn-default p-1"><i class="fa fa-address-card text-primary"></i></a>
                            </td>
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
                <h6 class="card-title mb-0">Número de personales por área</h6>
                <div class="d-flex justify-content-between align-items-center">
                    <canvas id="imagen-contratos-por-area"></canvas>
                </div>
            </div>
        </div> 
@endsection
@section('scripts')
    <script src="{{asset('js/empleado.js')}}"></script>
@endsection

