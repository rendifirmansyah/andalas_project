<?php $__env->startSection('navbartitle'); ?>
Gambar Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="container">
		
<form action="<?php echo e(url('/save/gambar_home')); ?>" method="POST" enctype="multipart/form-data">
						<?php echo e(csrf_field()); ?>

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul</label>
									<input type="text" name="judul" class="form-control" placeholder="Judul" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Text 1</label>
									<input type="text" name="text1" class="form-control"placeholder="Judul" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Text 2</label>
									<input type="text" name="text2" class="form-control"placeholder="Judul" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputFile">Gambar Home (Background)</label>
							<input type="file" name="home">
							<p class="help-block">INPUT GAMBAR HOME<p>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>