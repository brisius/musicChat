<?php $__env->startSection('content'); ?>
<div class="container container-max">
    <div class="row">
        <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <?php $__empty_1 = true; $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
         <div class="col-md-4 grid">
           <div class="card text-white mb-3 grid-lower" style="max-width: 18rem; background-color: #aa89bc;">
            <div class="card-header"><a class="no-decoration" href="/channels/<?php echo e($channel->id); ?>"><?php echo e($channel->name); ?></a></div>
            <div class="card-body">
              <h5 class="card-title" style="color:black;">Information</h5>
              <p class="card-text"><?php echo e($channel->info); ?></p>
              <h5 class="card-title" style="color:black;">Created by</h5>
              <p class="card-text"><?php echo e(Auth::user()->name); ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="center-content">
          <?php echo e($channels->links()); ?>

        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>