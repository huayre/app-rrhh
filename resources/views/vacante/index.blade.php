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
                        <th>Vacante</th>
                        <th>Cantidad</th>
                        <th>Fecha limite</th>
                        <th>Tipo de Puesto</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($vacantes as $vacante)
                        <tr>
                            <td>{{$vacante->area->nombre}}</td>
                            <td class="badge badge-warning">{{$vacante->nombre}}</td>
                            <td>{{$vacante->cantidad}}</td>
                            <td>{{$vacante->fecha_limite}}</td>
                            <td>{{$vacante->tipo_puesto}}</td>
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
