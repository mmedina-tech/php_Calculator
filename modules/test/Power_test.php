<?php
# SYNOPSIS: Test for Power Module
#
# Power_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:47:31 PM PST
# Last Update: 2022-02-23: 15:28
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

require_once( 'pass_fail.php' );
require_once( 'imports.inc.php' );

$test = new TestSuite();

function Power_test($test, $class){
    $pass = 0;
    $fail = 0;

    if ( $class->function_list[$class->function_strings[1]](234) !== array(234*0.29307107, "Watts")){
        $test->set_fail($class->function_strings[1]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[1]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[2]](234) !== array(234*33000, "Foot/Pounds per Minute")){
        $test->set_fail($class->function_strings[2]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[2]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[3]](234) !== array(234*550, "Foot/Pounds per Second")){
        $test->set_fail($class->function_strings[3]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[3]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[4]](234) !== array(234*745.69987, "Watts")){
        $test->set_fail($class->function_strings[4]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[4]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[5]](234) !== array(234*1.3410221, "Horsepower")){
        $test->set_fail($class->function_strings[5]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[5]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[6]](234) !== array(234*0.022596966, "Watts")){
        $test->set_fail($class->function_strings[6]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[6]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[7]](234) !== array(234*44.253729, "Foot/Pounds per Minute")){
        $test->set_fail($class->function_strings[7]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[7]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[8]](234) !== array(234*0.0013410221, "Horsepower")){
        $test->set_fail($class->function_strings[8]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[8]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[9]](234) !== array(234*0.022596966, "Watts")){
        $test->set_fail($class->function_strings[9]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[9]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[10]](234) !== array(234*0.73756215, "Foot/Pounds per Second")){
        $test->set_fail($class->function_strings[10]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[10]);
        $pass++;
    }
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
}


echo "Preparing Power Test
-----------------------------\n";
sleep(1);
$test->pass_fail($power, Power_test($test, $power));

