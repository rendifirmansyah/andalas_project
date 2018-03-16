<?php $__env->startSection('content'); ?>


<div class="row">
		<div class="container">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">

					<form action="<?php echo e(url('post/berita')); ?>" method="POST" 
					enctype="multipart/form-data">
						<?php echo e(csrf_field()); ?>

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul</label>
									<input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Isi</label>
							<textarea class="form-control" name="isi" rows="3" id="exampleInputPassword1" placeholder="Isian Berita"></textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputFile">File input</label>
							<input type="file" name="sampul" id="exampleInputFile">
							<p class="help-block">select images to upload in the news</p>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>