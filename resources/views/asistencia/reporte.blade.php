@extends('plantilla.index')
@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-sm" id="tabla_empleados" style="border: #1b7e5a solid 1px">
                    <thead>
                        <tr  class="table-success">
                            <th></th>
                            @foreach($listaPersonas as $persona)
                                <th>{{$persona->nombre . ' ' . $persona->apellido}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($asistencias as $asistencia)
                            <tr>
                                <td>{{$asistencia->dia}}</td>
                                @foreach($listaPersonas as $persona)
                                    @php $status = false @endphp
                                    @foreach($asistencia->personas as $item)
                                        @if($persona->id == $item->id)
                                        @php $status = true @endphp
                                            @break
                                        @endif
                                    @endforeach 
                                    @if($status)
                                        <td>
                                            <i class="fa fa-check text-success"></i>
                                        </td>
                                    @else
                                        <td>
                                            <i class="fa fa-times text-danger"></i>
                                        </td>
                                    @endif
                                @endforeach    
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
