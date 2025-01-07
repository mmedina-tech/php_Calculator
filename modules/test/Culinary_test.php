<?php
# SYNOPSIS: Test for Culinary Module
#
# Culinary_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:39:28 PM PST
# Last Update: 2022-03-05: 19:07
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This Program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABLILITY of FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
#
# You Should have recieved a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
# MA 02110-1301, USA.
#
#
#

require_once("pass_fail.php");
require_once("imports.inc.php");
$cook = $cats["Culinary"];
$test = new TestSuite();

function test_Culinary($test, $class){
    $pass = 0;
    $fail = 0;
    #{{{
    echo "\nCulinary
---------------------------\n";
    if ( $class->function_list[$class->function_strings[1]](234) !== array(234*0.23658824, "Liters")){
        $test->set_fail($class->function_strings[1]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[1]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[2]](234) !== array(117.0, "Pints")){
        $test->set_fail($class->function_strings[2]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[2]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[3]](234) !== array(29.25, "Teaspoons")){
        $test->set_fail($class->function_strings[3]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[3]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[4]](234) !== array(234*29.57353, "Milliliters")){
        $test->set_fail($class->function_strings[4]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[4]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[5]](234) !== array(234*3.7854118, "Liters")){
        $test->set_fail($class->function_strings[5]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[5]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[6]](234) !== array(234*0.4296835, "Pecks")){
        $test->set_fail($class->function_strings[6]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[6]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[7]](234) !== array(234*0.035273962, "Ounces")){
        $test->set_fail($class->function_strings[7]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[7]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[8]](234) !== array(234*0.0022046226, "Pound")){
        $test->set_fail($class->function_strings[8]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[8]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[9]](234) !== array(234*2.2046226, "Pounds")){
        $test->set_fail($class->function_strings[9]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[9]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[10]](234) !== array(234*0.26417205, "Gallons")){
        $test->set_fail($class->function_strings[10]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[10]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[11]](234) !== array(234*2.1133764, "Pints")){
        $test->set_fail($class->function_strings[11]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[11]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[12]](234) !== array(234*1.0566882, "Quarts")){
        $test->set_fail($class->function_strings[12]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[12]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[13]](234) !== array(58.5, "Bushels")){
        $test->set_fail($class->function_strings[13]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[13]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[14]](234) !== array(234*0.47317647, "Liters")){
        $test->set_fail($class->function_strings[14]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[14]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[15]](234) !== array(117.0, "Quarts")){
        $test->set_fail($class->function_strings[15]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[15]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[16]](234) !== array(234*0.45359237, "Kilograms")){
        $test->set_fail($class->function_strings[16]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[16]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[17]](234, 234, 234, 234, 234) !== array(234.0, "New Quantity")){
        $test->set_fail($class->function_strings[17]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[17]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[18]](234) !== array(58.5, "Gallons")){
        $test->set_fail($class->function_strings[18]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[18]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[19]](234) !== array(234*0.94635295, "Liters")){
        $test->set_fail($class->function_strings[19]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[19]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[20]](234) !== array(14.625, "Cups")){
        $test->set_fail($class->function_strings[20]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[20]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[21]](234) !== array(117.0, "Fluid Ounces")){
        $test->set_fail($class->function_strings[21]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[21]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[22]](234) !== array(234*14.786765, "Milliliters")){
        $test->set_fail($class->function_strings[22]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[22]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[23]](234) !== array(234*0.33333333, "Tablespoons")){
        $test->set_fail($class->function_strings[23]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[23]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[24]](234) !== array(234*4.9289216, "Milliliters")){
        $test->set_fail($class->function_strings[24]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[24]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[25]](234, 234) !== array("$1.00", "Cost per Unit")){
        $test->set_fail($class->function_strings[25]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[25]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[26]](234, 234) !== array("$1.00", "Cost Per Portion")){
        $test->set_fail($class->function_strings[26]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[26]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[27]](234, 234) !== array("$100.00", "Selling Price")){
        $test->set_fail($class->function_strings[27]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[27]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[28]](234) !== array(234*28.349523, "Grams")){
        $test->set_fail($class->function_strings[28]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[28]);
        $pass++;
    }

    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
    #}}}
}

echo "Preparing Culinary...";
sleep(1);
$test->pass_fail($cook, test_Culinary($test, $cook));
