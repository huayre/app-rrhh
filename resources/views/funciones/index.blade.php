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
    @include('funciones.create')
    <div>

        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalFuncion()">Nueva

            Funcion
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_funciones">
                    <thead>
                    <tr>

                      
                        <th>Nombres</th>

                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($funciones as $funcion)
                        <tr>
                            
                            <td>{{$funcion->nombre}}</td>
                            
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarFuncion('{{$funcion->id}}')"><i
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
    <script src="{{asset('js/funcion.js')}}"></script>
@endsection
