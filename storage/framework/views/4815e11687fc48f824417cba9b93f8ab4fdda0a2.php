<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
      <?php $__empty_1 = true; $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">
                <?php echo e($channel->name); ?>

              </div>
              <div class="panel-body">
                <?php echo e($channel->info); ?>

              </div>
          </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

      <?php endif; ?>
      <div class="col-md-8 col-md-offset-2" style="text-align: center;">
        <?php echo e($channels->links()); ?>

      </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>