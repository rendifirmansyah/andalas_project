<?php $__env->startSection('navbartitle'); ?>
Panel About Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="section">
	<div class="card-panel purple darken-3 white-text"><h3><center><font color="#2579A9">Footer</font></center></h3></div>
</div>

<div class="section">
	<form action="<?php echo e(url('/update/footer')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="form-control" name="isi" id="textarea1" style="height:500px; width: 1000px; margin-left: 150px;background-color: #DCDCDC;"><?php echo e($tampil->isi); ?></textarea>
        </div>
      </div>
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <input type="hidden" name="id" value="<?php echo e($tampil->id); ?>">
      <center/><button type="submit" class="btn btn-default" style="margin-top:10px;">Submit</button>
</div>

<script>
  CKEDITOR.replace( 'textarea1' );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>