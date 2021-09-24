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
    @include('vacante.create')
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalVacante()">Nueva
            Vacante
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_vacantes">
                    <thead>
                    <tr>
                        <th>Area</th>
                        <th>Nombres</th>
                        <th>Cantidad</th>
                        <th>Fecha limite</th>
                        <th>Requisitos</th>
                        <th>Responsabilidades</th>
                        <th>Beneficios</th>
                        <th>Tipo de Puesto</th>
                        
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vacantes as $empleado)
                        <tr>
                            <td>{{$empleado->area->nombre}}</td>
                            <td>{{$empleado->nombre}}</td>
                            <td>{{$empleado->cantidad}}</td>
                            <td>{{$empleado->fecha_limite}}</td>
                            <td>{{$empleado->requisitos}}</td>
                            <td>{{$empleado->responsabilidades}}</td>
                            <td>{{$empleado->beneficios}}</td>
                            <td>{{$empleado->tipo_puesto}}</td>
                            <td>
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarVacante('{{$vacante->id}}')"><i
                                        class="fa fa-trash-o text-danger"></i></button>
                                <button class="btn btn-default p-1"><i class="fa fa-edit text-dark"></i></button>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/vacante.js')}}"></script>
@endsection
