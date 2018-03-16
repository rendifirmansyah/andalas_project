<?php $__env->startSection('navbartitle'); ?>
About | Andalas Media
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
<div class="container">
		
		<a href="<?php echo e(url('/panel_footer')); ?>"><button type="button" class="btn btn-primary">Tambah</button></a>
		
		<table class="table">
			<thead>
				<tr>
					<th>Isi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td id="summary-ckeditor"><?php echo $pro->isi; ?></td>
					<td>
						<a href="<?php echo e(url('footer/delete/'.$pro->id)); ?>" class="btn btn-link btn-sm">Hapus</a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>