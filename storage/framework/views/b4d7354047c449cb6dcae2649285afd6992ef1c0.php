 
    <?php $__env->startSection('content'); ?>
        <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="section white container">                        
                <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active">
                            <i class="fa fa-balance-scale" aria-hidden="true"></i>
                            <h5><?php echo e($entity->job_title); ?></h5>
                        </div>
                        <div class="collapsible-body">
                            <span>
                                <?php echo e($entity->job_description); ?>

                            </span>   
                            <br><br>
                            <a href="#modal" class="waves-effect waves-light btn indigo darken-4 btn modal-trigger">
                                Explore
                            </a>
                            <a href="#!" class="waves-effect waves-light btn teal darken-3 ">
                                Apply Now
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.opportunities', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>