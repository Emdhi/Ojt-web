    <?php $__env->startSection('Finance'); ?>
    <br>
    <h4>Finance & Accounting</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            <?php $__currentLoopData = $jobs_finance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $finance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">filter_drama</i>
                        <?php echo e($finance->job_title); ?>

                    </div>
                    <div class="collapsible-body">
                        <span>
                            <?php echo e($finance->job_description); ?>

                        </span>   
                        <br><br>
                        <a href="#!" class="waves-effect waves-light btn indigo darken-4 btn">
                            Edit Job
                        </a>
                        <a href="#!" class="waves-effect waves-light btn red">
                            Delete Job
                        </a>
                    </div>
                </li>   
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

    <?php $__env->stopSection(); ?>
        
    <?php $__env->startSection('Legal'); ?>
        <br>
        <h4>Legal Support Service</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            <?php $__currentLoopData = $jobs_law; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $law): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">filter_drama</i>
                        <?php echo e($law->job_title); ?>

                    </div>
                    <div class="collapsible-body">
                        <span>
                            <?php echo e($law->job_description); ?>

                        </span>   
                        <br><br>
                        <a href="#!" class="waves-effect waves-light btn indigo darken-4 btn">
                            Edit Job
                        </a>
                        <a href="#!" class="waves-effect waves-light btn red">
                            Delete Job
                        </a>
                    </div>
                </li>   
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('IT'); ?>
        <br>
        <h4>IT and IT-Enabled Services</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            <?php $__currentLoopData = $jobs_it; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $IT): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">filter_drama</i>
                        <?php echo e($IT->job_title); ?>

                    </div>
                    <div class="collapsible-body">
                        <span>
                            <?php echo e($IT->job_description); ?>

                        </span>   
                        <br><br>
                        <a href="#!" class="waves-effect waves-light btn indigo darken-4 btn">
                            Edit Job
                        </a>
                        <a href="#!" class="waves-effect waves-light btn red">
                            Delete Job
                        </a>
                    </div>
                </li>   
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('Sales'); ?>
        <br>
        <h4>Sales and Marketing Support Services</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            <?php $__currentLoopData = $jobs_market; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $market): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">filter_drama</i>
                        <?php echo e($market->job_title); ?>

                    </div>
                    <div class="collapsible-body">
                        <span>
                            <?php echo e($market->job_description); ?>

                        </span>   
                        <br><br>
                        <a href="#!" class="waves-effect waves-light btn indigo darken-4 btn">
                            Edit Job
                        </a>
                        <a href="#!" class="waves-effect waves-light btn red">
                            Delete Job
                        </a>
                    </div>
                </li>   
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php $__env->stopSection(); ?>


    
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>