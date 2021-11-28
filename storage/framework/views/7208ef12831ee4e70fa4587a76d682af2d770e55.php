<div class="modal fade" id="modalfuncion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary pb-1 pt-1">

                <h5 class="modal-title text-light" style="font-size: 25px" id="modalempleadotitulo"></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

               <form id="formulario_area">
                   <label>Nombre:</label>
                   <input type="text" class="form-control border-primary" name="nombre" id="nombre">
                   <label>Descripción:</label>
                   <textarea class="form-control border-primary" rows="5" id="descripcion" name="descripcion"></textarea>
               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn_crear_cliente_mensaje"></button>
                <button type="button" class="btn btn-success" id="btn_crear_cliente"></button>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/resources/views/areas/create.blade.php ENDPATH**/ ?>