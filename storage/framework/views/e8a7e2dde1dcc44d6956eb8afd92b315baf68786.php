<?php $__env->startSection('navbartitle'); ?>
Produk | Andalas Media
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
<div class="container">
		<a href="<?php echo e(url('/panel_produk')); ?>"><button type="button" class="btn btn-primary">Tambah</button></a>
		<table class="table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Isi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($pro->nama_produk); ?></td>
					<td id="summary-ckeditor"><?php echo $pro->isi_produk; ?></td>
					<td>
						<a href="<?php echo e(url('produk/edit/'.$pro->id)); ?>" class="btn btn-link btn-sm">Edit</a><br>
						<a href="<?php echo e(url('produk/delete/'.$pro->id)); ?>" class="btn btn-link btn-sm">Hapus</a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>
<!-- <script>
	READ.replace( 'summary-ckeditor' );
</script> -->
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>