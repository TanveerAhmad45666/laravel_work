<?php $__env->startSection("banner"); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("side_nav"); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("body-content"); ?>

	<div class="container">
		<div class="row">
			<table class="table table-hover">
			    <thead>
			        <tr>
			            <th>First Name</th>
			            <th>Last Name</th>
			            <th>Email</th>
			            <th>Address</th>
			            <th>City</th>
			            <th>Country</th>
			            <th>Zip_Code</th>
			            <th>Phone Number</th>      
			        </tr>
			    </thead>
			    <tbody>
			    	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    	 
			    		<tr >
				            <td><?php echo e($data->first_name); ?></td>
				            <td><?php echo e($data->last_name); ?></td>
				            <td><?php echo e($data->email); ?></td>
				            <td><?php echo e($data->address); ?></td>
				            <td><?php echo e($data->city); ?></td>
				            <td><?php echo e($data->country); ?></td>
				            <td><?php echo e($data->zip_code); ?></td>
				            <td><?php echo e($data->telephone); ?></td>
				            <td><button type="button"> Edit</button></td>
				            <td><button type="button">Delete</button></td>
			        </tr>

			    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			    </tbody>
			</table>
		</div>
	</div>	


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('../Layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laravel for work\Ecommerce_project\resources\views/Colorlib/register_list.blade.php ENDPATH**/ ?>