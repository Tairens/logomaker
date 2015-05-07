<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="myContainer">
            <div class="header">
                <h2>Projektowanie bannera facebook</h2>
            </div>
            <div class="optionsMenu">
                <div class="boxHeader uppercase">
                    Zaprojektuj banner:
                </div>
                <div class="separator"></div>
                <div class="buttons uppercase">
                    <a href="#" data-toPosition="backgroundOption" class="changeScreen" data-toggle="tooltip" title="Tło">tło</a>
                    <a href="#" data-toPosition="textOption" class="changeScreen" data-toggle="tooltip" title="Napisy">napisy</a>
                    <a href="#" data-toPosition="logoOption" class="changeScreen" data-toggle="tooltip" title="Logo">logo</a>
                    <a href="#" class="changeScreen" id="saveOption" data-toggle="tooltip" title="Zapisz">zapisz</a>
                </div>
                <div id="optionsScreen"></div>
            </div>
            <div class="boxHeader uppercase">
                Podgląd:
            </div>
            <div class="separator"></div>
            <div id="logoCreator">
    
            </div>
            
            <div class="saveButton uppercase" id="save1">zapisz</div>
            <div class="saveButton uppercase" id="save2">zapisz wzór</div>
            <div class="clearfix"></div>
            
            <?php include_once('js/templates/options.template.php'); ?>

            <script src="js/lib/jquery.min.js"></script>
            <script src="js/lib/jquery-ui.min.js"></script>
            <script src="js/lib/underscore.min.js"></script>
            <script src="js/lib/backbone.min.js"></script>
            <script src="js/lib/bootstrap.min.js"></script>
            <script src="js/core/app.js"></script> 
            <script src="js/core/app.config.js"></script> 
            <script src="js/views/options.view.js"></script>
            <script src="js/views/creator.view.js"></script>

            <script type="text/javascript">
                var router = new APP.Router();
                Backbone.history.start();
            </script>            
        </div>


    </body>
</html>
