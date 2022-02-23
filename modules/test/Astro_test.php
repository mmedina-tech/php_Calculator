<?php
# SYNOPSIS: Test for Astronomic_Units module
#
# Astro_test.php
#
# Author: Marcus Medina
# Date: Sun 05 Dec 2021 03:45:39 PM PST
# Last Update: 2022-02-23: 15:26
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

function test_Astro($test, $class){
    $pass = 0;
    $fail = 0;
    #{{{
    if ( $class->function_list[$class->function_strings[1]](234) !== array(504, "Kelvin")){
        $test->set_fail($class->function_strings[1]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[1]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[2]](234) !== array(((234 - 32) * 5/9) + 270, "Kelvin")){
        $test->set_fail($class->function_strings[2]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[2]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[3]](234) !== array(234 * 63239.726, "Astronomic Units")){
        $test->set_fail($class->function_strings[3]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[3]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[4]](234) !== array(234*0.000015812845, "Light Year")){
        $test->set_fail($class->function_strings[4]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[4]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[5]](234) !== array(234*0.30659485, "Parsecs")){
        $test->set_fail($class->function_strings[5]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[5]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[6]](234) !== array(234*3.2616334, "Light Years")){
        $test->set_fail($class->function_strings[6]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[6]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[7]](234) !== array(421.2, "Rankine")){
        $test->set_fail($class->function_strings[7]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[7]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[8]](234) !== array(234*0.55555556, "Celsius")){
        $test->set_fail($class->function_strings[8]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[8]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[9]](234) !== array(234*0.55555556, "Kelvin")){
        $test->set_fail($class->function_strings[9]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[9]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[10]](234) !== array(421.2, "Rankine")){
        $test->set_fail($class->function_strings[10]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[10]);
        $pass++;
    }
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
    #}}}
}

echo "Preparing Astronomic Units
-----------------------------------\n";
sleep(1);
$test->pass_fail($astro, test_Astro($test, $astro));
