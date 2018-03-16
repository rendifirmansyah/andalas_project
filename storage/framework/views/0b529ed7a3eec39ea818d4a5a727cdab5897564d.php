<?php $__env->startSection('navbartitle'); ?>
Tambah Produk
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<br><br>
<div class="row">
	<div class="container">
		<form action="<?php echo e(url('save/update/produk')); ?>" method="POST">
			<div class="form-group">
			<label for="aa1">Nama Produk</label>
			<input type="text" class="form-control" id="aa1" name="namaproduk" placeholder="Nama Produk" value="<?php echo e($produk->nama_produk); ?>">
		</div>

		<div class="form-group">
			<label for="summary-ckeditor">Isian produk</label>
			<textarea class="form-control" name="isian" id="summary-ckeditor" required><?php echo e($produk->isi_produk); ?></textarea>
		</div>
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<input type="hidden" name="id" value="<?php echo e($produk->id); ?>">
		<button class="btn btn-primary" type="submit">Edit</button>
		</form>
	</div>
</div>
<script>
	CKEDITOR.replace( 'summary-ckeditor' );
</script>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>