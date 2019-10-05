<?php $__env->startSection("banner"); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("side_nav"); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("body-content"); ?>


<!-- BREADCRUMB -->
<div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->
<!--       <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?> -->
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <form id="checkout-form" class="clearfix" method="POST" action="<?php echo e(url('register_add')); ?>" role="form">

                 <?php echo csrf_field(); ?>
             


                    <div class="col-md-6">
                        <div class="billing-details">
                            <!-- <p>Already a customer ? <a href="#">Login</a></p> -->
                            <div class="section-title">
                                <h3 class="title">Register User</h3>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="first_name" placeholder="First Name">
                                 <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?>
                                 <div class="alert alert-danger"><?php echo e($message); ?></div>
                                 <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="last_name" placeholder="Last Name">
                                 <?php if ($errors->has('Last Name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Last Name'); ?>
                                 <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> 
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" name="email" placeholder="Email">
                                <?php if ($errors->has('Email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Email'); ?>
                                 <div class="alert alert-danger"><?php echo e($message); ?></div>
                                 <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> 
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="city" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="country" placeholder="Country">
                            </div>
                            <div class="form-group">
                            
                                <input class="input" type="text" name="zip_code" placeholder="ZIP Code">
                            </div>
                            <div class="form-group">
                                <input class="input" type="tel" name="telephone" placeholder="Telephone">
                                 <?php if ($errors->has('Telephone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Telephone'); ?>
                                 <div class="alert alert-danger"><?php echo e($message); ?></div>
                                  <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="password" placeholder="password">
                            </div>
                            <div class="form-group">
                                <div class="input-checkbox">
                                    <input type="checkbox" id="register">
                                    <label class="font-weak" for="register">Create Account?</label>
                                    <div class="caption">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            <p>
                                                <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right">
                                <button type="submit" class="primary-btn">Register</button>
                                 
                            </div>
                    </div>


                    
                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->







   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../Layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laravel for work\Ecommerce_project\resources\views/Colorlib/register_user.blade.php ENDPATH**/ ?>