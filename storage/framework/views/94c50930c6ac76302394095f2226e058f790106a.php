<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo asset('css/materialize.min.css')?>" type="text/css">
        
        <link rel="stylesheet" href="<?php echo asset('css/adminonly/customlogin.css')?>" type="text/css">
        
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
        <script type="text/javascript" src="<?php echo asset('js/adminonly/customlogin.js')?>"></script>

        
        <div id="load">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
        
        <div id="contents">
            <div class="container">
                <div class="row">

                    <div class="col m3"></div>
                    <div class="col s12 m6">
                        <div class="card z-depth-2">
                            <div class="card-content">
                                <span class="card-title"><img src=<?php echo asset("img/PboCol.png")?>></span>
                                <h5>Log In</h5>
                                <br>
                                <p>to continue to Admin's page</p>
                                <form>
                                    <div class="input-field">
                                        <input id="Username" type="text" class="validate">
                                        <label for="last_name" data-error="Incorrect Username or Password">Username</label>
                                    </div>
                                    <div class="input-field">
                                        <input id="password" type="password" class="validate">
                                        <label for="password" data-error="Incorrect Username or Password">Password</label>
                                    </div>
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                            <i class="material-icons right">send</i>
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col m3"></div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
