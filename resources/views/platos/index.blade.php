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
    @include('platos.create_modal')
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalPlato()">Nuevo
            Plato
        </button>
    </div>
{{--    <div class="text-center">--}}
{{--        <input type="date" class="form-control-sm" id="fechaInicio">--}}
{{--        <input type="date" class="form-control-sm" id="fechaFin">--}}
{{--        <button class="btn btn-success">Buscar</button>--}}
{{--    </div>--}}
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_platos">
                    <thead>
                    <tr>
                        <th>Plato</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        <th>Cantidad</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($platos as $plato)
                        <tr>
                            <td>{{$plato->nombre}}</td>
                            <td>{{$plato->descripcion}}</td>
                            <td>{{$plato->precio}}</td>
                            <td>
                                <img src="{{$plato->imagen}}">
                            </td>
                            <td>{{$plato->stock}}</td>
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarPlato('{{$plato->id}}')"><i
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
    <script src="{{asset('js/plato.js')}}"></script>
@endsection
