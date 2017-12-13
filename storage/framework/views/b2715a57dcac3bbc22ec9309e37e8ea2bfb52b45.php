    <?php $__env->startSection('imagefile'); ?>
        <img src=<?php echo asset("img/Lawyer.jpg")?>>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('HeaderTitle'); ?>
        <h1><?php echo e($title); ?></h1>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.jobs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>