<?php $__env->startSection('title'); ?>
About Us | Andalas Media
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="section">
	<div class="card-panel orange darken-2 white-text center"><h5>About Us
/ ABOUT OUR COMPANY</h5></div>
</div>

 <?php $__currentLoopData = $tester; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="row">
	<div class="container">
    <p><?php echo $datas->isi; ?></p>
  </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>







<?php $__currentLoopData = $footer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<footer class="page-footer" style="background-color: #ef6c00">
		<div class="container">
			<div class="row">
				<p><?php echo $q->isi; ?></p>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2018 Copyright Andalas Media
<!--             <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
-->            </div>
</div>
</footer>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>