<?php $__env->startSection('navbartitle'); ?>
Panel Produk
<?php $__env->stopSection(); ?>

	<?php $__env->startSection('content'); ?>
<br><br>
<div class="row">
	<div class="container">
		<form action="<?php echo e(url('save/produk')); ?>" method="POST">
		<div class="form-group">
			<label for="aa1">Nama Produk</label>
			<input type="text" class="form-control" id="aa1" name="namaproduk" placeholder="Nama Produk" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
		</div>
		<div class="form-group">
			<label for="summary-ckeditor">Isian produk</label>
			<textarea class="form-control" name="isian" id="summary-ckeditor" 
			class="summary-ckeditor" required>
			</textarea>
		</div>
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<button class="btn btn-primary" type="submit">Submit</button>
		</form>
	</div>
</div>
<script>
	CKEDITOR.replace( 'summary-ckeditor' );
</script>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>