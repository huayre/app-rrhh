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
               <form id="formulario_empleado" method="post" action="<?php echo e(route('asistencia.create')); ?>">
                   <?php echo csrf_field(); ?>
                   <label>Dia</label>
                   <input type="date" class="text-center form-control form-control-sm border-primary" name="dia">
                   <div class="table table-responsive">
                       <table class="table table-sm">
                           <tbody>
                           <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                   <td><?php echo e($empleado->nombre.' '.$empleado->apellido); ?></td>
                                   <td>
                                       <input type="checkbox" name="check[]" value="<?php echo e($empleado->id); ?>">
                                   </td>
                               </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\xampp\htdocs\proyectosistemasinformacion\app-rrhh\resources\views/asistencia/create_modal.blade.php ENDPATH**/ ?>