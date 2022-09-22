<div class="modal fade" id="modalempleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header pb-1 pt-1">
                <h5 class="modal-title text-light" style="font-size: 25px" id="modalempleadotitulo"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form id="formulario_empleado" method="post" action="{{route('asistencia.create')}}">
                   @csrf
                   <div class="bg-primary text-center">
                   <label>Dia</label>
                   <input type="date" class="text-center form-control form-control-sm border-primary" name="dia">
                   </div>
                   <div class="table table-responsive" style="max-height: 500px; overflow-y: auto;">
                       <table class="table table-sm">
                           <tbody>
                           @foreach($empleados as $empleado)
                               <tr>
                                   <td>{{$empleado->nombre.' '.$empleado->apellido }}</td>
                                   <td>
                                       <input type="checkbox" name="check[]" value="{{$empleado->id}}">
                                   </td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>
                   <div class="modal-footer">
                       <button type="submit" class="btn btn-success">CREAR</button>
                   </div>
               </form>
            </div>
        </div>
    </div>
</div>
