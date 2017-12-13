    <?php $__env->startSection('modals'); ?>
        <div id="modal" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Job Title</h4>
                <hr style="color:#101755;">
            </div>
            <div class="modal-footer">
            <a href="#!" class=" waves-effect waves-green btn teal darken-3">Apply Now</a>
            <a href="#!" class="modal-action modal-close waves-effect red btn">Close</a>
            </div>
        </div>
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>
        <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="section white container">                        
                <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active">
                            <i class="material-icons">attach_money</i><?php echo e($entity->job_title); ?>

                        </div>
                        <div class="collapsible-body">
                            <span>
                                <?php echo e($entity->job_description); ?>

                            </span>   
                            <br><br>
                            <a href="#modal1" class="waves-effect waves-light btn indigo darken-4 btn modal-trigger">
                                Explore
                            </a>
                            <a href="#!" class="waves-effect waves-light btn teal darken-3">
                                Apply Now
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.opportunities', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>