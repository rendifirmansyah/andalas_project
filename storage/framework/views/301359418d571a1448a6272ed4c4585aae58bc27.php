<?php $__env->startSection('title'); ?>
Produk | Andalas Media
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="section">
	<div class="card-panel orange darken-2 white-text center">
		<div  style="margin-right: 975px;">
		<h4><b><?php echo e($pro->nama_produk); ?></b></h4>
		</div>
	</div>
</div>

<div class="row">
	<div class="container">

		<p id="summary-ckeditor"><?php echo $pro->isi_produk; ?></p>

	</div>
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
			</div>
</div>
</footer>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>