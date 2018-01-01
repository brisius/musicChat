<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row loginbg">
    <div class="col-md-8 offset-md-2">
      <h1>Account settings</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 loginbg">
      <form class="" action="settings/<?php echo e($id); ?>" method="post">
         <?php echo e(csrf_field()); ?>

         <h3>Change password</h3>
         <hr style="background-color:white;">
         <div class="form-group<?php echo e($errors->has('oldpassword') ? ' has-error' : ''); ?>">
           <?php if(session()->has('pass_message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('pass_message')); ?>

            </div>
          <?php endif; ?>
           <label for="password">Old password</label>
           <input id="password" type="password" class="form-control" name="oldpassword" required>

             <?php if($errors->has('oldpassword')): ?>
                 <span class="help-block">
                     <strong><?php echo e($errors->first('oldpassword')); ?></strong>
                 </span>
             <?php endif; ?>
         </div>
         <div class="form-group<?php echo e($errors->has('newpassword') ? ' has-error' : ''); ?>">
            <label for="password">New password</label>
            <input id="password" type="password" class="form-control" name="newpassword" required>

             <?php if($errors->has('newpassword')): ?>
                 <span class="help-block">
                     <strong><?php echo e($errors->first('newpassword')); ?></strong>
                 </span>
             <?php endif; ?>
         </div>
        <div class="button-height">
          <button type="submit" class="btn btn-outline-success float-right">Confirm</button>
        </div>
      </form>
    </div>
    <div class="col-md-4 loginbg">
      <form class="" action="/settings/<?php echo e($id); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <h3>Change E-mail</h3>
        <hr style="background-color:white;">
          <?php if(session()->has('mail_message')): ?>
           <div class="alert alert-success">
               <?php echo e(session()->get('mail_message')); ?>

           </div>
         <?php endif; ?>
        <div class="form-group">
          <label for="information">New e-mail</label>
          <input id="info" type="email" class="form-control" name="email" autofocus required>
        </div>
        <div class="button-height">
          <button type="submit" class="btn btn-outline-success float-right">Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>