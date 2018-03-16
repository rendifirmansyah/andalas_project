<?php $__env->startSection('content'); ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <?php echo $map['js']; ?>

    </head>
    
    <body>
        <?php echo $map['html']; ?>

        <strong><h5>Contact Information</h5></strong>
        <strong><h6>Working Hours: </h6></strong>
        <strong><h6>9:00AM - 5:00PM everyday</h6></strong>
    </body><br><br><br><br>








</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>