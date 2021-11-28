
<?php $__env->startSection('contenido'); ?>
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
    
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalPedido()">Nuevo
            Pedidos
        </button>
    </div>
    <div class="text-center">
        <input type="date" class="form-control-sm" id="fechaInicio">
        <input type="date" class="form-control-sm" id="fechaFin">
        <button class="btn btn-success">Buscar</button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_pedidos">
                    <thead>
                    <tr>
                        <th>Area</th>
                        <th>Nombres</th>
                        <th>DNI</th>
                        <th>Nro. Celular</th>
                        <th>Correo</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $pedido; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($pedido->persona->nombre); ?></td>
                            <td><?php echo e($pedido->monto); ?></td>
                            <td><?php echo e($pedido->hora_entrega); ?></td>
                            
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarPedido('<?php echo e($pedido->id); ?>')"><i
                                        class="fa fa-trash-o text-danger"></i></button>
                                <button class="btn btn-default p-1"><i class="fa fa-edit text-dark"></i></button>
                                
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectosistemasinformacion\app-rrhh\resources\views/pedidos/index.blade.php ENDPATH**/ ?>