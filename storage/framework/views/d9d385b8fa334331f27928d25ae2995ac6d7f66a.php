<?php $__env->startSection('navbartitle'); ?>
Tambah Produk
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="row">
		<div class="container">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">

					<form action="#" method="POST" 
					enctype="multipart/form-data">
						<!-- <?php echo e(csrf_field()); ?> -->

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Jenis Produk</label>
									<input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul">
								</div>
							</div>
						</div>

<br>
						<div class="form-group">
							<label for="exampleInputFile">INPUT GAMBAR COVER</label>
							<input type="file" name="sampul" id="exampleInputFile">
							<p class="help-block">NOTE : GAMBAR UNTUK COVER PRODUK</p>
						</div>
<br>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul Produk</label>
									<input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Isi</label>
							<textarea class="form-control" name="isi" rows="3" id="exampleInputPassword1" placeholder="Isian Berita"></textarea>
						</div>

<br>

						<div class="form-group">
							<label for="exampleInputFile">INPUT GAMBAR ISIAN PRODUK</label>
							<input type="file" name="sampul" id="exampleInputFile">
							<p class="help-block">NOTE : GAMBAR UNTUK ISIAN PRODUK</p>
						</div>
<br>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>