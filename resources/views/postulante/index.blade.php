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
    @include('postulante.create_modal')
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalEmpleado()">Nuevo
            Postulante
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_empleados">
                    <thead>
                    <tr>
                        <th>Vacante</th>
                        <th>Nombres</th>
                        <th>DNI</th>
                        <th>Nro. Celular</th>
                        <th>Correo</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($postulantes as $postulante)
                        <tr>
                            <td class="badge badge-warning">{{$postulante->vacante->nombre}}</td>
                            <td>{{$postulante->nombre . ' '. $postulante->apellido}}</td>
                            <td>{{$postulante->num_dni}}</td>
                            <td>{{$postulante->num_celular}}</td>
                            <td>{{$postulante->correo}}</td>
                            <td>
                                @if(!$postulante->status_vacante)
                                    <span class="badge badge-info">en proceso</span>
                                @else
                                    <span class="badge badge-success">seleccionado</span>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarEmpleado('{{$postulante->id}}')"><i
                                        class="fa fa-trash-o text-danger"></i></button>
                                <button class="btn btn-default p-1"><i class="fa fa-edit text-dark"></i></button>
                                <a href="{{$postulante->url_copia_dni}}" target="_blank" class="btn btn-default p-1"><i class="fa fa-address-card text-primary"></i></a>
                                <button class="btn btn-default p-1" onclick="aprobarSeleccionPersonal('{{$postulante->id}}')"><i class="fa fa-check text-success"></i></button>
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
    <script src="{{asset('js/postulante.js')}}"></script>
@endsection
