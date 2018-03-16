<?php $__env->startSection('navbartitle'); ?>
Panel Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
					<div class="container">
				<div class="row">
				<div role="tabpanel" class="tab-pane" id="profile">
					<form action="<?php echo e(url('tambah_admin/update')); ?>" method="POST">
					<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama</label>
									<input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Nama" value="<?php echo e($admin->name); ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">E-Mail</label>
									<input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="E-Mail" value="<?php echo e($admin->email); ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Password</label>
									<input type="Password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Password" value="********">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Nomor Telpeon</label>
									<input type="text" class="form-control" name="no_telp" id="exampleInputEmail1" placeholder="Nomor telepon" value="<?php echo e($admin->no_telp); ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Alamat</label>
							<textarea class="form-control" name="alamat" rows="3" id="exampleInputPassword1" placeholder="Alamat"><?php echo e($admin->alamat); ?></textarea>
						</div>
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						<input type="hidden" name="id" value="<?php echo e($admin->id); ?>">
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				
				</div>
			</div>
		</div>


				<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>