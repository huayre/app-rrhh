<div class="modal fade" id="modalvacante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 1000px">
        <div class="modal-content">
            <div class="modal-header bg-primary pb-1 pt-1">

                <h5 class="modal-title text-light" style="font-size: 25px" id="modalempleadotitulo"></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

               <form id="formulario_vacante">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nombre:</label>
                        <input type="text" class="form-control border-primary" name="nombre" id="nombre">
                        <label>Cantidad:</label>
                        <input type="text" class="form-control border-primary" name="cantidad" id="cantidad">
                        <label>Fecha limite:</label>
                        <input type="text" class="form-control border-primary" name="fecha_limite" id="num_dni">
                        <label>Requisitos:</label>
                        <input type="text" class="form-control border-primary" name="requisitos" id="requisitos">
                        <label>Responsabilidades:</label>
                        <input type="text" class="form-control border-primary" name="responsabilidades" id="num_celular">
                        <label>Beneficios:</label>
                        <input type="email" class="form-control border-primary" name="beneficios" id="beneficios">
                        <label>Tipo de puesto:</label>
                        <input type="email" class="form-control border-primary" name="beneficios" id="beneficios">
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
