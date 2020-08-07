<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

require_once 'scssphp/scss.inc.php';

use ScssPhp\ScssPhp\Compiler;

$scss = new Compiler();

$result = $scss->compile('@import"sass/30.scss"');

file_put_contents("css/30.css", $result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 30</title>
    <link href="./css/contact-form-style.css" rel="stylesheet" />
    <link href="./css/featherlight.min.css" rel="stylesheet" />
    <link href="./css/spsimpleportfolio.css" rel="stylesheet" />

    <script src="./js/jquery.min.js?1e174b993e3211aa87f92270aed62e25"></script>
    <script src="./js/jquery-noconflict.js?1e174b993e3211aa87f92270aed62e25"></script>

    <script src="./js/jquery.shuffle.modernizr.min.js"></script>
    <script src="./js/featherlight.min.js"></script>
    <script src="./js/spsimpleportfolio.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOswald:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="./css/30.css" />

    <style>
        #wrap-contact-form98 .sscf-popup,
        #wrap-contact-form98 .rf_submit {
            border-radius: 25px;
        }

        #wrap-contact-form98 .rf_submit {
            background: #c5a47e;
        }

        #wrap-contact-form98 .rf_submit:hover {
            background: #cc9f6b;
        }

        #wrap-contact-form98 .sscf-popup {
            background: #c5a47e;
        }

        #wrap-contact-form98 .sscf-popup:hover {
            background: #cc9f6b;
        }

        #wrap-contact-form98 .success {
            color: #cc9f6b !important;
        }
    </style>

</head>

<body>
    <?php include '30-content.php' ?>

    <!-- SCRIPTS -->
    <script src="./js/jquery.min.js" type="text/javascript"></script>
    <script src="./js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./js/smoothscroll.js" type="text/javascript"></script>
    <script src="./js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="./js/wow.min.js" type="text/javascript"></script>
    <script src="./js/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="./js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script src="./js/owl.carousel.min.js" type="text/javascript"></script>

    <!-- SLIDER REVOLUTION -->
    <script src="./js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="./js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
    <script src="./js/revolution.extension.actions.min.js" type="text/javascript"></script>
    <script src="./js/revolution.extension.carousel.min.js" type="text/javascript"></script>
    <script src="./js/revolution.extension.kenburn.min.js" type="text/javascript"></script>
    <script src="./js/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
    <script src="./js/revolution.extension.migration.min.js" type="text/javascript"></script>
    <script src="./js/revolution.extension.navigation.min.js" type="text/javascript"></script>
    <script src="./js/revolution.extension.parallax.min.js" type="text/javascript"></script>
    <script src="./js/revolution.extension.slideanims.min.js" type="text/javascript"></script>
    <script src="./js/revolution.extension.video.min.js" type="text/javascript"></script>
    <script src="./js/interface.js" type="text/javascript"></script>

</body>

</html>