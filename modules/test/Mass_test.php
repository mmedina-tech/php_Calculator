<?php
# SYNOPSIS: Test for Mass Module
#
# Mass_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:45:28 PM PST
# Last Update: 2022-02-23: 15:27
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
$test = new TestSuite();

function Mass_test($test, $class){
    $pass = 0;
    $fail = 0;

    if ( $class->function_list[$class->function_strings[1]](234) !== array(234*907.18474, "Kilograms")){
        $test->set_fail($class->function_strings[1]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[1]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[2]](234) !== array(234*0.0011023113, "Ton")){
        $test->set_fail($class->function_strings[2]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[2]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[3]](234) !== array(234*0.90718474, "Metric Tons")){
        $test->set_fail($class->function_strings[3]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[3]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[4]](234) !== array(234*1.1023113, "Tons")){
        $test->set_fail($class->function_strings[4]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[4]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[5]](234) !== array(234*0.036571429, "Drams")){
        $test->set_fail($class->function_strings[5]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[5]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[6]](234) !== array(234*0.0022857143, "Ounce")){
        $test->set_fail($class->function_strings[6]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[6]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[7]](234) !== array(234*0.06479891, "Grams")){
        $test->set_fail($class->function_strings[7]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[7]);
        $pass++;
    }
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
}

echo "Preparing Mass...
----------------------------------\n";
sleep(1);
$test->pass_fail($mass, Mass_test($test, $mass));

