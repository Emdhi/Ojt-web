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
        <link rel="stylesheet" href="<?php echo asset('css/customopport/opportunities.css')?>" type="text/css">
        
        {{--  Custom CSS for Loading  --}}
        <link rel="stylesheet" href="<?php echo asset('css/loader.css')?>" type="text/css">
        
        {{--  FONT of the Website  --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        
        {{--  Font Awesome for Icons  --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">      
        
        <title>{{config('app.name','PBO Global')}}</title>
    </head>
    <body>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo asset('js/customopport.js')?>"></script>
        
        <!--  API Key for Google Map :)  -->
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpFIMwuKFSuEr-HQYMvEUqOCzCJt9CCu8&callback=initMap">
        </script>

    {{--  Loading animation  --}}
        <div id="load">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    {{-- End of Loading animation  --}}

        <div id="contents">{{-- This div is for wrapping up the whole content for loading screen   --}}
            <div id="fadeeffect" class="preload">

                {{--  Background Image  --}}
                    <div class="parallax-container hide-on-small-only">
                        <div class="parallax">
                            <center><h3>Start Builidng Your Career</h3></center>
                            <img style="z-index: -1;" src=<?php echo asset("img/careers1.jpg")?>>
                        </div>
                    </div>
                {{-- End of Background Image  --}}

                {{--  Navbar   --}}
                    <nav class="hide-on-small-only">
                        <div class="nav-wrapper">
                            <ul id="nav-mobile" class="hide-on-small-only">
                                <li><a href="\financeaccounting">Finance & Accounting</a></li>
                                <li><a href="\legalsupport">Legal Support Service</a></li>
                                <li><a href="\itservices">IT & IT Enabled-Services</a></li>
                                <li><a href="\salesmarketing">Sales and Marketing Support Services</a></li>
                            </ul>
                        </div>
                    </nav> 
                {{--End of Navbar   --}}

                @yield('content') {{--Job Opportunities--}} 

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
                <!--End of Footer -->
                
            </div>
        </div>
    </body>
</html>
