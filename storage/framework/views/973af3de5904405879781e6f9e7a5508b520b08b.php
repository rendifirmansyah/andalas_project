<?php $__env->startSection('navbartitle'); ?>
Gambar Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="container">

		<a href="<?php echo e(url('/panel_gambar')); ?>"><button type="button" class="btn btn-primary">Tambah</button></a>
		<table class="table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Isi</th>
					<th>Gambar Background</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($pro->judul); ?></td>
					<td><?php echo e($pro->teks1); ?></td>
					<td><img src="<?php echo e(url('home/'.$pro->gambar_home)); ?>" style="width: 550px;height: 100px;"></td>
					<td>
						<a href="<?php echo e(url('gambar/delete/'.$pro->id)); ?>" class="btn btn-danger btn-sm">Hapus</a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>

		
		
	</div>
</div>










<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>