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
    @include('areas.create')
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalFuncion()">Nuevo Área</button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_area">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ÁREA</th>
                            <th>DESCRIPCIÓN</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $item=1 @endphp
                    @foreach($areas as $area)
                        <tr>
                            <td><small class="badge badge-success">{{$item++}}</small></td>
                            <td><small class="badge badge-dark">{{$area->nombre}}</small></td>
                            <td>{{$area->descripcion}}</td>
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarArea('{{$area->id}}')"><i
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
    <script src="{{asset('js/area.js')}}"></script>
@endsection
