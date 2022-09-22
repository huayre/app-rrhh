@extends('plantilla.index')
@section('contenido')
    @include('asistencia.create_modal')
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalEmpleado()">Nueva Asistencia
        </button>
    </div>
    <!-- <div class="text-center">
        <input type="date" class="form-control-sm" id="fechaInicio">
        <input type="date" class="form-control-sm" id="fechaFin">
        <button class="btn btn-success">Buscar</button>
    </div> -->
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_empleados">
                    <thead>
                    <tr>
                        <th></th>
                        <th>DIA</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $contado = 1 @endphp
                        @foreach($asistencia as $asistencia)
                            <tr>
                                <td><small class="badge badge-info">{{$contado++}}</small></td>
                                <td>{{$asistencia->dia}}</td>
                                <td>
                                    <button class="btn btn-default p-1"><i
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
    <script src="{{asset('js/asistencia.js')}}"></script>
@endsection
