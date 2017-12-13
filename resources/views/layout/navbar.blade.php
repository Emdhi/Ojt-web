<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo asset('css/materialize.min.css')?>" type="text/css">
        
        {{--  Custom CSS designed especially for Home Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('css/customhome/home.css')?>" type="text/css">
        
        {{--  FONT of the Website  --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">     
    </head>
    <body>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo asset('js/customhome.js')?>"></script>
    
    {{--  Navigation Bar  --}}
        <div class="navbar-fixed">
            <nav id="uphere">
                <div class="nav-wrapper"> {{--  Navbar Mobile View  --}}
                    <a href="index.php" class="brand-logo"><img src="img/PBOLogo.png"></a>
                    <a href="\home" data-activates="mobile-demo" class="button-collapse"> <!--Collapsible Menu for Mobile View-->
                        <i class="material-icons">menu</i>
                    </a>
                         
                        @yield('navContent'){{--  fixed Navbar for Desktop  --}} 

                    {{--  Side Navbar Mobile View  --}}
                        <ul class="side-nav" id="mobile-demo">
                            <li>
                                <div class="user-view">
                                    <div class="background" style="opacity: 0.7;">
                                        @yield('bgphoto'){{--  Background Photo Mobile View  --}}
                                    </div>
                                    <a href="#!user"><img class="circle" src=<?php echo asset("img/PBOLogo.png")?>></a>
                                    <a href="#!name"><span class="white-text name">PBO Global</span></a>
                                    <a href="#!email" ><span class="white-text email">careers@pboglobal.com.au</span></a>
                                </div>
                            </li>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="\gallery">Gallery</a></li>

                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li>
                                        <a class="collapsible-header active">
                                        Opportunities<i class="material-icons" style="color: white">arrow_drop_down</i>
                                        </a>
                                        <div class="collapsible-body" id="sidecolbod">
                                            <ul>
                                                <li><a href="\financeaccounting">Finance & Accounting</a></li>
                                                <li><a href="\itservices">IT Services</a></li>
                                                <li><a href="\legalsupport">Legal Service</a></li>
                                                <li><a href="\salesmarketing">Digital Marketing</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                            <li style="background-color:green"><a href="#">Apply Now</a></li>
                        </ul>
                    {{-- End of Side Navbar Mobile View  --}}

                </div>
            </nav>
        </div>
    {{-- End of Navigation Bar  --}}    
</html>
