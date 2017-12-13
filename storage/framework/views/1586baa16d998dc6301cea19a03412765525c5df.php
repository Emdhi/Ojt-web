    <?php $__env->startSection('imagefile'); ?>
        <img src=<?php echo asset("img/Accountant.jpg")?>>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('HeaderTitle'); ?>
        <h1><?php echo e($title); ?></h1>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('JD'); ?>
        <p><?php echo e($JD); ?></p>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('Respon'); ?>
         <?php if(count($Respon) > 0): ?>
            <ul>
                <?php $__currentLoopData = $Respon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Respon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <i class="fa fa-check-circle blackiconcolor" aria-hidden="true"></i>
                        <?php echo e($Respon); ?>

                    </li>  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('Adv'); ?>
         <?php if(count($Adv) > 0): ?>
            <ul>
                <?php $__currentLoopData = $Adv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Adv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <i class="fa fa-check-circle blackiconcolor" aria-hidden="true"></i>
                        <?php echo e($Adv); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    <?php $__env->stopSection(); ?>

     <?php $__env->startSection('Req'); ?>
         <?php if(count($Req) > 0): ?>
            <ul>
                <?php $__currentLoopData = $Req; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <i class="fa fa-check-circle blackiconcolor" aria-hidden="true"></i>
                        <?php echo e($Req); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('GenQ'); ?>
        <?php if(count($GenQ) > 0): ?>
            <ul>
                <?php $__currentLoopData = $GenQ; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $GenQ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <i class="fa fa-check-circle blackiconcolor" aria-hidden="true"></i>
                        <?php echo e($GenQ); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.jobs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>