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
    @include('cliente.create')
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalCliente()">Nuevo
            Cliente
        </button>
    </div>
    <div class="text-center">
        <input type="date" class="form-control-sm" id="fechaInicio">
        <input type="date" class="form-control-sm" id="fechaFin">
        <button class="btn btn-success">Buscar</button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_clientes">
                    <thead>
                    <tr>
                        
                        <th>Nombres</th>
                        <th>dirección</th>
                        <th>Nro. Celular</th>
                        <th>Referencias</th>
                       
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cliente as $cliente)
                        <tr>
                            
                            <td>{{$cliente->nombre . ' '. $cliente->apellido}}</td>
                            <td>{{$cliente->direccion}}</td>
                            <td>{{$cliente->num_celular}}</td>
                            <td>{{$cliente->referencia}}</td>
                            
                            
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarCliente('{{$cliente->id}}')"><i
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
    <script src="{{asset('js/cliente.js')}}"></script>
@endsection
