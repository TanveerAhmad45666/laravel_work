<?php $__env->startSection("banner"); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("side_nav"); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("body-content"); ?>

<div class="container">

    <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="<?php echo e(url('do_login')); ?>" role="form">
        <?php echo csrf_field(); ?>
        <h2>Registration of User With Middleware Validation</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
                <input name="username" type="text" id="Name" placeholder="Username" class="form-control" autofocus>
                <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Password </label>
            <div class="col-sm-9">
                <input type="password" name="password"  id="password" class="form-control"/>
            </div>
             <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
             <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
        <button  type="submit" class="btn btn-primary btn-md">Register User</button>
    </form>
</div>

<hr/>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('../Layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laravel for work\Ecommerce_project\resources\views/Colorlib/login.blade.php ENDPATH**/ ?>