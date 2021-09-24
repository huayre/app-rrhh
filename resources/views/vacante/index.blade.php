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
<<<<<<< HEAD
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalVacante()">Nueva
=======
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalVacante()">Nuevo
>>>>>>> 8fd9b68c4c9791919994bdd3032bb708bd86c3f3
            Vacante
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_vacantes">
                    <thead>
                    <tr>
<<<<<<< HEAD
                        <th>Area</th>
                        <th>Nombres</th>
=======
                    <th>Area</th>
                        <th>Nombre</th>
>>>>>>> 8fd9b68c4c9791919994bdd3032bb708bd86c3f3
                        <th>Cantidad</th>
                        <th>Fecha limite</th>
                        <th>Requisitos</th>
                        <th>Responsabilidades</th>
                        <th>Beneficios</th>
<<<<<<< HEAD
                        <th>Tipo de Puesto</th>
                        
=======
                        <th>Tipo puesto</th>
                        <th>Area</th>

>>>>>>> 8fd9b68c4c9791919994bdd3032bb708bd86c3f3
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
<<<<<<< HEAD
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
=======
                    @foreach($vacantes as $vacante)
                        <tr>
                           <td>{{$vacante->area->nombre}}</td>
                            <td>{{$vacante->nombre}}</td>
                            <td>{{$vacante->cantidad}}</td>
                            <td>{{$vacante->fecha_limite}}</td>
                            <td>{{$vacante->requisitos}}</td>
                            <td>{{$vacante->responsabilidades}}</td>
                            <td>{{$vacante->beneficios}}</td>
                            <td>{{$vacante->tipo_puesto}}</td>
>>>>>>> 8fd9b68c4c9791919994bdd3032bb708bd86c3f3
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarVacante('{{$vacante->id}}')"><i
                                        class="fa fa-trash-o text-danger"></i></button>
                                <button class="btn btn-default p-1"><i class="fa fa-edit text-dark"></i></button>
<<<<<<< HEAD
                                
=======
                                <a href="{{$empleado->url_copia_dni}}" target="_blank" class="btn btn-default p-1"><i class="fa fa-address-card text-primary"></i></a>
>>>>>>> 8fd9b68c4c9791919994bdd3032bb708bd86c3f3
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
    <script src="{{asset('js/vacante.js')}}"></script>
>>>>>>> 8fd9b68c4c9791919994bdd3032bb708bd86c3f3
@endsection
@section('scripts')
    <script src="{{asset('js/vacante.js')}}"></script>
@endsection
