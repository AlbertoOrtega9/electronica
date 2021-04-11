
<?php $__env->startSection('contenido'); ?>

<div class="container">
	<h1>REPORTE DE FACTURAS</h1>
	<br>
	<a href="<?php echo e(route('altafactura')); ?> ">
	<button type="button" class="btn btn-success">Alta Factura</button></a>
	<br>
	<br>
  <?php if(Session::has('mensaje')): ?>
  <div class="alert alert-success"><?php echo e(Session::get('mensaje')); ?></div>
  <?php endif; ?>
  <br>
	
                                <div class="table-responsive table--no-card m-b-100">
                                <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Foto</th> 
                                                <th>Clave</th>
                                                <th>Nombre Completo</th>
                                                <th>Correo</th>
                                                <th>Celular</th>
                                                <th>RFC</th>
                                                <th>Razon Social</th>
                                                <th>Domicilio</th>
                                                <th>Estado</th>
                                                <th>Operaciones</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        	<?php $__currentLoopData = $consulta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><img src="<?php echo e(asset('archivos/'.$c->img)); ?>" height="50" width="50"></td>
                                                <td><?php echo e($c->idf); ?></td>
                                                <td><?php echo e($c->nombre); ?> <?php echo e($c->apellido); ?></td>
                                                <td><?php echo e($c->email); ?></td>
                                                <td><?php echo e($c->celular); ?></td>
                                                <td><?php echo e($c->rfc); ?></td>
                                                <td><?php echo e($c->razon); ?></td>
                                                <td><?php echo e($c->domicilio); ?></td>
                                                <td><?php echo e($c->edo); ?></td>


                                <td>
                                 <a href="<?php echo e(route('modificafactura',['idf'=>$c->idf])); ?> ">                
                                <button type="button" class="btn btn-info">Modificar</button></a>

                                <?php if(Auth::user()->tipo=="admin"): ?>
                                <?php if($c->deleted_at): ?>                	
                                <a href="<?php echo e(route('activafactura',['idf'=>$c->idf])); ?> ">
                               	<button type="button" class="btn btn-warning">Activar</button></a>
                                <a href="<?php echo e(route('borrafactura',['idf'=>$c->idf])); ?> ">
                                <button type="button" class="btn btn-secondary">Borrar</button></a>
                               	<?php else: ?>
                               	 <a href="<?php echo e(route('desactivafactura',['idf'=>$c->idf])); ?> ">
                               	<button type="button" class="btn btn-danger">Desactivar</button></a>
                               	<?php endif; ?>
                                <?php endif; ?>
                               </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practicaslaravel\resources\views/reportefactura.blade.php ENDPATH**/ ?>