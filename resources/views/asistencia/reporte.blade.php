@extends('plantilla.index')
@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table id="tabla-reposte-asistencia" class="table table-bordered table-sm"  style="border: #1b7e5a solid 1px">
                    <thead>
                        <tr  class="table-success">
                            <th style="width: 500px;">ASISTENCIA - FECHA</th>
                            @foreach($listaPersonas as $persona)
                                <th>{{$persona->nombre . ' ' . $persona->apellido}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($asistencias as $asistencia)
                            <tr>
                                <td style="width: 500px;" class="table-success">{{$asistencia->dia}}</td>
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
                                            <i class="fa fa-check" style="color: red;"></i>
                                        </td>
                                    @else
                                        <td>
                                            <i class="fa fa-times" style="color: green;"></i>
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
    <script src="{{asset('js/reporte.js')}}"></script>
@endsection
