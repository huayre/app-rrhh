<div class="modal fade" id="modalempleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 1000px">
        <div class="modal-content">
            <div class="modal-header bg-primary pb-1 pt-1">
                <h5 class="modal-title text-light" style="font-size: 25px" id="modalempleadotitulo"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form id="formulario_empleado">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nombre:</label>
                        <input type="text" class="form-control border-primary" name="nombre" id="nombre">
                        <label>Apellido:</label>
                        <input type="text" class="form-control border-primary" name="apellido" id="apellido">
                        <label>Nro. DNI:</label>
                        <input type="text" class="form-control border-primary" name="num_dni" id="num_dni">
                        <label>Dirección:</label>
                        <input type="text" class="form-control border-primary" name="direccion" id="direccion">
                        <label>Celular:</label>
                        <input type="text" class="form-control border-primary" name="num_celular" id="num_celular">
                        <label>Correo:</label>
                        <input type="email" class="form-control border-primary" name="correo" id="correo">
                    </div>
                    <div class="col-md-6">
                        <label>Fecha Contrato:</label>
                        <input type="date" class="form-control border-primary" name="fecha_nacimiento" id="fecha_nacimiento">
                        <label>Linkedin:</label>
                        <input type="text" class="form-control border-primary" name="url_linkedin" id="url_linkedin">
                        <label>Copia de DNI:</label>
                        <input type="file" class="form-control border-primary" name="url_copia_dni" id="url_copia_dni">
                        <label>Salario:</label>
                        <input type="number" class="form-control border-primary" name="salario" id="salario">
                        <label>Area de trabajo:</label>
                        <select class="form-control border-primary" name="area_id" id="area_id">
                            <option selected disabled value="0">Selecione el área de trabajo</option>
                            @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn_crear_cliente_mensaje"></button>
                <button type="button" class="btn btn-success" id="btn_crear_cliente"></button>
            </div>
        </div>
    </div>
</div>
