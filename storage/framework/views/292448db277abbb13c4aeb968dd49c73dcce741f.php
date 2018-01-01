<?php $__env->startSection('content'); ?>
<?php if(isset($error_msg)): ?>
 <div class="container">
   <div class="col-md-4 loginbg">
     <h1>Create channel</h1>
     <div class="alert alert-danger">
         <?php echo e($error_msg); ?>

     </div>
     <form class="" action="" method="">
       <div class="form-group">
         <label for="name">Channel name</label>
         <input id="name" type="text" class="form-control" name="name" required autofocus readonly>
       </div>
       <div class="form-group">
         <label for="information">Channel informaton</label>
         <input id="info" type="text" class="form-control" name="info" required autofocus readonly>
       </div>
       <div class="button-height">
         <button type="button" class="btn btn-outline-success float-right" readonly>Create</button>
       </div>
     </form>
   </div>
 </div>
<?php else: ?>
<div class="container">
  <div class="col-md-4 loginbg">
    <h1>Create channel</h1>
    <?php if(session()->has('error_msg')): ?>
     <div class="alert alert-success">
         <?php echo e(session()->get('error_msg')); ?>

     </div>
   <?php endif; ?>
    <form class="" action="/channels" method="post">
      <div class="form-group">
        <label for="name">Channel name</label>
        <input id="name" type="text" class="form-control" name="name" required autofocus>
      </div>
      <div class="form-group">
        <label for="information">Channel informaton</label>
        <input id="info" type="text" class="form-control" name="info" required autofocus>
      </div>
      <div class="button-height">
        <button type="submit" class="btn btn-outline-success float-right">Create</button>
      </div>
    </form>
  </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>