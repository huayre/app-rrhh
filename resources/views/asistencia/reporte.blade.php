@extends('plantilla.index')
@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-sm" id="tabla_empleados" style="border: #1b7e5a solid 1px">
                    <thead>
                    @php $numasistencia = count($asistencia) @endphp
                    <tr  class="table-success">
                        <th>EMPLEADO</th>
                        @foreach($asistencia as $asistencia)
                            <th>{{$asistencia->dia}}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($empleados as $empleados)
                        <tr>
                            <td>{{$empleados->nombre.' '.$empleados->apellido}}</td>
                            @for($i=1;$i<=$numasistencia;$i++)
                                @php $num = rand(0,1) @endphp
                                @if($num == 1)
                                    <td><i class="fa fa-check text-success"></i></td>
                                @else
                                    <td>
                                        <i class="fa fa-times text-danger"></i>
                                    </td>
                                @endif
                            @endfor
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
