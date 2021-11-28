<div class="modal fade" id="carrito-compras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 1000px">
        <div class="modal-content">
            <div class="modal-header bg-primary pb-1 pt-1">
                <h5 class="modal-title text-light" style="font-size: 25px" id="modalplatotitulo"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form id="formulario_plato">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nombre:</label>
                        <input type="text" class="form-control border-primary" name="nombre" id="nombre">
                        <label>Descripcion:</label>
                        <input type="text" class="form-control border-primary" name="descripcion" id="descripcion">

                    </div>
                    <div class="col-md-6">
                        <label>Precio</label>
                        <input type="number" class="form-control border-primary" name="precio" id="precio">
                        <label>Imagen:</label>
                        <input type="file" class="form-control border-primary" name="imagen" id="imagen">
                    </div>

                </div>
               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn_crear_plato_mensaje"></button>
                <button type="button" class="btn btn-success" id="btn_crear_plato"></button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\proyectosistemasinformacion\app-rrhh\resources\views/web/create_modal.blade.php ENDPATH**/ ?>