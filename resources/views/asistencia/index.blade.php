@extends('plantilla.index')
@section('contenido')
    @include('asistencia.create_modal')
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalEmpleadoLista()">Nueva Asistencia
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table" id="tabla-fechas" style="border-radius: 15px; border: 3px solid #03a9f3;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>DIA</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $contado = 1 @endphp
                        @foreach($asistencia as $asistencia)
                            <tr>
                                <td><small class="badge badge-info">{{$contado++}}</small></td>
                                <td>{{$asistencia->dia}}</td>
                                <td>
                                    <button class="btn btn-default p-1"><i
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
<script>
        $(document).ready(function () {
            $('#tabla-fechas').DataTable(
                {
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend:    'copyHtml5',
                            text:      '<i class="fa fa-files-o"></i>',
                            titleAttr: 'Copy'
                        },
                        {
                            extend:    'excelHtml5',
                            text:      '<i class="fa fa-file-excel-o text-success"></i>',
                            titleAttr: 'Excel'
                        },
                        {
                            extend:    'csvHtml5',
                            text:      '<i class="fa fa-file-text-o text-primary"></i>',
                            titleAttr: 'CSV'
                        },
                        {
                            extend:    'pdfHtml5',
                            text:      '<i class="fa fa-file-pdf-o text-danger"></i>',
                            titleAttr: 'PDF'
                        }
                    ]
                });
        });
        function abrirModalEmpleadoLista() {
            $('#modalempleado').modal('show')
        }
    </script>
@endsection
