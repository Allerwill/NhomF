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

$result = $scss->compile('@import"sass/3.scss"');

file_put_contents("css/3.css", $result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 3</title>



    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOswald:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="./css/3.css" />


</head>

<body>
    <?php include '3-content.php' ?>

    <script src="./js/interface.js" type="text/javascript"></script>

</body>

</html>