<?php $__env->startSection('navbartitle'); ?>
Panel About Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="section">
  <?php $__currentLoopData = $tester; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div><h5><center>About Us / ABOUT OUR COMPANY</center></h5></div>
</div>

<div class="row">
	<div class="container">
    <p><?php echo $datas->isi; ?></p>
  </div>

      <center><a href="<?php echo e(url('add_about', $datas->id)); ?>"><button class="btn btn-primary">Update</button></a></center>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>