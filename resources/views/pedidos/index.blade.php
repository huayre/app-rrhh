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
    
    
    <div class="text-center">
        <input type="date" class="form-control-sm" id="fechaInicio">
        <input type="date" class="form-control-sm" id="fechaFin">
        <button class="btn btn-success">Buscar</button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_pedido">
                    <thead>
                    <tr>
                       
                        <th>Nombres</th>
                        <th>monto</th>
                        <th>hora entrega</th>
                       
                       
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pedido as $pedido)
                        <tr>
                            <td>{{$pedido->persona->nombre}}</td>
                            <td>{{$pedido->monto}}</td>
                            <td>{{$pedido->hora_entrega}}</td>
                            
                           
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/pedido.js')}}"></script>
@endsection