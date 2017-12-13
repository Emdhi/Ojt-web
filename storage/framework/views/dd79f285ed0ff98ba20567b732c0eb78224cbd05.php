    <?php $__env->startSection('navContent'); ?>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>           
            <li><a href="\gallery">Gallery</a></li>
            <li><a href="#">Apply Now</a></li>
        </ul>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('bgphoto'); ?>
        <img src=<?php echo asset("img/mini_careers.jpg")?>>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $responsibilities = explode("\n", $entity['responsibilities']);
                $requirements = explode("\n", $entity['requirements']);
                $advantages = explode("\n", $entity['advantages']);
                $general_qualifications = explode("\n", $entity['general_qualifications']);
            ?>
            
            <div class="section white container">                        
                <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active">
                            <i class="material-icons">filter_drama</i><?php echo e($entity->job_title); ?>

                        </div>
                        <div class="collapsible-body">
                            <span>
                                <?php echo e($entity->job_description); ?>

                            </span>   
                            <br><br>
                            
                        <?php echo("
                            <a href=\"#modal_".$entity->job_id."\" class=\"waves-effect waves-light btn indigo darken-4 btn modal-trigger\">
                        "); ?>
                                Explore
                            </a>
                            <a href="#" class="waves-effect waves-light btn teal darken-3 btn modal-trigger">
                                Apply Now
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            
        <?php echo("
            <div id=\"modal_".$entity->job_id."\" class=\"modal modal-fixed-footer\">
        "); ?>
                <div class="modal-content">
                    
                    <h4><?php echo e($entity->job_title); ?></h4>
                    <hr style="color:#101755;">
                    
                     
                    <?php if($entity['responsibilities'] != ""): ?>
                        <h5>Responsibilities</h5>
                        <ul>
                            <?php $__currentLoopData = $responsibilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $responsibility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                
                                <div class="valign-center"> 
                                <i class="tiny material-icons indigo-text text-darken-4">check_circle</i>
                                <span><?php echo $responsibility; ?></span><br>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        
                    <?php endif; ?>
                    
                    
                    <?php if($entity['requirements'] != ""): ?>
                    <br>
                    <h5>Requirements</h5>
                        <ul>
                            <?php $__currentLoopData = $requirements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requirement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="valign-center"> 
                                <i class="tiny material-icons indigo-text text-darken-4">check_circle</i>
                                <span><?php echo $requirement; ?></span><br>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>

                    
                    <?php if($entity['advantages'] != ""): ?>
                    <br>
                    <h5>Advantages</h5>
                        <ul>
                            <?php $__currentLoopData = $advantages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advantage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo(chr(7));?> 
                                    <?php echo $advantage; ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>

                    
                    <?php if($entity['general_qualifications'] != ""): ?>
                    <br>
                    <h5>General Qualifications</h5>
                        <ul>
                            <?php $__currentLoopData = $general_qualifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qualification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo(chr(7));?> 
                                    <?php echo $qualification; ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>


                </div>
                <div class="modal-footer">
                <a href="#!" class=" waves-effect waves-green btn teal darken-3">Apply Now</a>
                <a href="#!" class="modal-action modal-close waves-effect red btn">Close</a>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.opportunities', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>