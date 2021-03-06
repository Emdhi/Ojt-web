<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo asset('css/materialize.min.css')?>" type="text/css">
        
        <link rel="stylesheet" href="<?php echo asset('css/adminonly/adminpage.css')?>" type="text/css">
        
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
        <script type="text/javascript" src="<?php echo asset('js/adminonly/adminpage.js')?>"></script>
        
        
        <div id="load">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>

        <div id="contents">

            <div class="row">
                <form class="col s12 m12 l12">
                    <br>
                    <div class="input-field col s12 m6 l6">
                        <input placeholder="Job Title" id="jobtitle" type="text" class="validate">
                        <label for="JobTitle">Job Title</label>
                    </div>

                    <div class="input-field col s12 m8 l8">
                        <textarea id="jobdesc" class="materialize-textarea"></textarea>
                        <label for="JobDesc">Job Description</label>
                    </div>

                    <div class="input-field col s12 m4 l4">
                        <textarea id="adv" class="materialize-textarea"></textarea>
                        <label for="Advantages">Advantages</label>
                    </div>

                    <div class="input-field col s12 m8 l8">
                        <textarea id="respon" class="materialize-textarea"></textarea>
                        <label for="Responsibilities">Responsibilities</label>
                    </div>

                    <div class="input-field col s12 m4 l4">
                        <textarea id="genQ" class="materialize-textarea"></textarea>
                        <label for="GenQ">General Qualifications</label>
                    </div>

                    <div class="input-field col s12 m8 l8">
                        <textarea id="req" class="materialize-textarea"></textarea>
                        <label for="Requirements">Requirements</label>
                    </div>

                </form>
            </div>

        </div>
    </body>
</html>
