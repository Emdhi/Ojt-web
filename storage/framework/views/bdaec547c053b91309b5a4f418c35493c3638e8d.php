<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo asset('css/materialize.min.css')?>" type="text/css">
        
        <link rel="stylesheet" href="<?php echo asset('css/customhome/home.css')?>" type="text/css">
        
        <link rel="stylesheet" href="<?php echo asset('css/loader.css')?>" type="text/css"> 
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">      
        <title><?php echo e(config('app.name','PBO Global')); ?></title>
    </head>
    <body>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo asset('js/customgal.js')?>"></script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpFIMwuKFSuEr-HQYMvEUqOCzCJt9CCu8&callback=initMap">
            // API Key for Google Map :)
        </script>

        
        <div id="load">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>

        <div id="contents">
            <div class="fixed-action-btn">
                <a href="#scroll" id="upbutton" class="btn-floating btn-large indigo darken-4">
                <i class="large material-icons">arrow_upward</i>
                </a>
            </div>

            <!-- Tap Target Structure -->
            <div style="z-index: -1;" class="tap-target indigo lighten-4" data-activates="upbutton">
                <div class="tap-target-content">
                <h5>Toggle Me</h5>
                <p>If you want to auto scroll up </p>
                </div>
            </div>

            <div id="fadeeffect" class="preload">

                    <div class="parallax-container hide-on-small-only">
                        <div class="parallax">
                            <h3 id="scroll">Gallery</h3>
                            <img style="z-index: -1;" src=<?php echo asset("img/Pbo1.jpg")?>>
                        </div>
                    </div>

                    <div class="section white">
                        <div class="row container">
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    </div>

                    <div class="parallax-container hide-on-small-only">
                        <div class="parallax"><img style="z-index: -1;" src=<?php echo asset("img/PBO.jpg")?>></div>
                        <h3>BE A REAL PRO! BE ONE OF US!</h3>
                    </div>

                    <!-- Footer -->
                    <footer class="page-footer">
                        <div class="footer-copyright">
                            <div class="container">
                                <center>
                                    <p>PBO Global © 2017 All Rights Reserved</p>
                                    <a href="#" class="fa fa-facebook  tooltipped" data-position="top" data-delay="50" data-tooltip="Facebook"></a>
                                    <a href="#" class="fa fa-twitter  tooltipped" data-position="top" data-delay="50" data-tooltip="Twitter"></a>
                                    <a href="#" class="fa fa-linkedin  tooltipped" data-position="top" data-delay="50" data-tooltip="LinkedIn"></a>
                                </center> 
                            </div>
                        </div>       
                    </footer>
            </div>
        </div>
    </body>
</html>
