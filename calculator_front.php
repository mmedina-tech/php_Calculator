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
                <select onchange="redir(this)" name='category'>
                    <option value=''>-- Select Category --</option>
                    <option value='Acceleration'>Acceleration</option>
                    <option value='Accounting'>Accounting</option>
                    <option value='Area'>Area</option>
                    <option value='Astronomic Units'>Astronomic Units</option>
                    <option value='Budgeting'>Budgeting</option>
                    <option value='Culinary'>Culinary</option>
                    <option value='Energy or Work'>Energy or Work</option>
                    <option value='Fuel Economy'>Fuel Economy</option>
                    <option value='GED Practice'>GED Practice</option>
                    <option value='Imperial to Imperial'>Imperial to Imperial</option>
                    <option value='Imperial to Metric'>Imperial to Metric</option>
                    <option value='Light'>Light</option>
                    <option value='Maritime Measurements'>Maritime Measurements</option>
                    <option value='Mass'>Mass</option>
                    <option value='Metric to Imperial'>Metric to Imperial</option>
                    <option value='Ohms Law'>Ohms Law</option>
                    <option value='Plane Angle'>Plane Angle</option>
                    <option value='Physical Fitness'>Physical Fitness</option>
                    <option value='Power'>Power</option>
                    <option value='Resistive Capacitance Series'>Resistive Capacitance Series</option>
                    <option value='Resistive Capacitance Parallel'>Resistive Capacitance Parallel</option>
                    <option value='Resistive Inductance Parallel'>Resistive Inductance Parallel</option>
                    <option value='Resistive Inductance Series'>Resistive Inductance Series</option>
                    <option value="Resistive Inductive Capacitive Series">Resistive Inductive Capacitive Series</option>
                    <option value='Torque'>Torque</option>
                    <option value='Velocity'>Velocity</option>
                </select>
                <input type="submit" name="" value="submit" />
            </form>
        </div><!-- End Main -->
    </body>
</html>

