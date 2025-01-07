<!DOCTYPE HTML>
<?php

$license = file_get_contents("license.html");
echo $license;

?>
<html>
    <head>
        <meta lang='en-US'>
        <meta charset='UTF-8'>
        <meta name='author' content='Marcus Medina'>
        <meta name='description' content='A Massive Calculator that centralizes all mathematical formulas'>
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
        <title>The Massive Calculator!</title>
        <link rel="icon" href="/php_Calculator/images/massive.png" type="image/x-icon">
        <link ref="shortcut icon" href="/php_Calculator/images/massive.png" type='image/x-icon'>
        <link rel="stylesheet" type="text/css" href="/php_Calculator/css/calculator.css">
        <link rel="stylesheet" href="/php_Calculator/css/header.css" type="text/css" media="" title="" charset="" />
        <script src="/php_Calculator/js/calculator.js"></script>
    </head>
    <body>
<?php

$header = file_get_contents("header.html");
echo $header;

?>
        <div>
            <h3 class='description'>This Calculator is not like any that you have seen before. This
                calculator centralizes all the mathematical formulas into one
                location, so that you don't have to go looking for a formula.
                You dont have to do any arithmetic yourself. It does it all for you.</h3>
            <form name='category' action='/php_Calculator/form_select.php' method='post'>
                <p class='titles'>Select Category:</p>
<?php
require_once( 'imports.inc.php' );
echo cateSelect($cats, $attrib);
?>
                <input type="submit" name="" value="submit" />
            </form>
        </div><!-- End Main -->
    </body>
</html>

