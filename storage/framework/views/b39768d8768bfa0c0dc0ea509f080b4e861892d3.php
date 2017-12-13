<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo asset('css/materialize.min.css')?>" type="text/css">
        
        <link rel="stylesheet" href="<?php echo asset('css/customjobs/jobs.css')?>" type="text/css">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <title><?php echo e(config('app.name','PBO Global')); ?></title>
    </head>
    <body>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <script src="https://use.fontawesome.com/fa11b82cb0.js"></script>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        
        <script type="text/javascript" src="js/customjobs.js"></script>

        <!-- Floating Button -->
        <div  class="fixed-action-btn horizontal click-to-toggle">
            <a id="menu" class="btn-floating btn-large indigo darken-4">
                <i class="material-icons">menu</i>
            </a>
            <ul>
                <li><a class="btn-floating orange darken-1 tooltipped" data-position ="top" data-delay="50" data-tooltip="Go Back" href="<?php echo e(URL::previous()); ?>"><i class="material-icons">arrow_back</i></a></li>
                <li><a class="btn-floating pink darken-1 tooltipped" data-position ="top" data-delay="50" data-tooltip="Return Home" href="index.php"><i class="material-icons">home</i></a></li>
                <li><a class="btn-floating green darken-1 tooltipped" data-position ="top" data-delay="50" data-tooltip="Apply"><i class="material-icons">publish</i></a></li> 
            </ul>
        </div>

        <!-- Tap Target Structure -->
        <div class="tap-target  indigo darken-4" data-activates="menu">
            <div class="tap-target-content">
                <h5 style="color:white !important;">Click Me!</h5>
                <p>To see more options</p>
            </div>
        </div>
    
        
        <div class="slider fullscreen">
            <ul class="slides">
            <li>
                <?php echo $__env->yieldContent('imagefile'); ?>
                <div class="caption center-align" style="color: white; text-shadow: 1px 1px 2px #000;">
                <center><?php echo $__env->yieldContent('HeaderTitle'); ?></center>
                
                </div>
            </li>
            </ul>
        </div>   

        <div id="content">
            
            <nav>
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo"><img src="img/PBOLogo.png"></a>
                    <a href="\home" data-activates="mobile-demo" class="button-collapse">
                    <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Opportunities</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Apply Now</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Opportunities</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Apply Now</a></li>
                    </ul>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <h5>Job Description</h5>
                        <?php echo $__env->yieldContent('JD'); ?>
                    </div>
                    <br>
                    <div class="col s12 m6">
                        <h5>Responisbilities</h5>  
                        <?php echo $__env->yieldContent('Respon'); ?>   
                    </div>
                    
                    <div class="col s12 m6">
                        <h5>Advantages</h5>
                        <?php echo $__env->yieldContent('Adv'); ?>
                    </div>
                     <div class="col s12 m6">
                        <h5>Requirements</h5>
                        <?php echo $__env->yieldContent('Req'); ?>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="cols s12 m6">
                        <h5>General Qualifications</h5>
                        <?php echo $__env->yieldContent('GenQ'); ?>
                    </div>

                    
                </div>
            </div>
            
            <!-- Footer -->
            <footer class="page-footer">
                <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>

                    <div class="col l4 offset-l2 s12">
                        <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                    PBO Global © 2017 All Rights Reserved
                    </div>
                </div>       
            </footer>

        </div>
   
    </body>
</html>
