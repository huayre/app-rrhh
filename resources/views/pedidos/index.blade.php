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
    
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalPedido()">Nuevo
            Pedidos
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
                <table class="table table-bordered" id="tabla_pedidos">
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
                    @foreach($pedido as $pedido)
                        <tr>
                            <td>{{$pedido->persona->nombre}}</td>
                            <td>{{$pedido->monto}}</td>
                            <td>{{$pedido->hora_entrega}}</td>
                            
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarPedido('{{$pedido->id}}')"><i
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
