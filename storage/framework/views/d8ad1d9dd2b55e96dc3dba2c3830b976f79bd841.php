
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
    <?php echo $__env->make('cliente.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalCliente()">Nuevo
            Cliente
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
                <table class="table table-bordered" id="tabla_clientes">
                    <thead>
                    <tr>
                        
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Nro. Celular</th>
                        <th>Referencias</th>
                       
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $cliente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            
                            <td><?php echo e($cliente->nombre . ' '. $cliente->apellido); ?></td>
                            <td><?php echo e($cliente->direccion); ?></td>
                            <td><?php echo e($cliente->num_celular); ?></td>
                            <td><?php echo e($cliente->referencia); ?></td>
                            
                            
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarCliente('<?php echo e($cliente->id); ?>')"><i
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
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/cliente.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\xampp\Recurso Humanos - SI\app-rrhh\resources\views/cliente/index.blade.php ENDPATH**/ ?>