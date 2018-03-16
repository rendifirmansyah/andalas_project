<?php $__env->startSection('navbartitle'); ?>
Panel Footer
<?php $__env->stopSection(); ?>

	<?php $__env->startSection('content'); ?>
<br><br>
<div class="row">
	<div class="container">
		<form action="<?php echo e(url('save/footer')); ?>" method="POST">
		<div class="form-group">
			<label for="summary-ckeditor">Isian Footer</label>
			<textarea class="form-control" name="namaproduk" id="summary-ckeditor" 
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