<?php
# SYNOPSIS: Test for Maritime Module
#
# Maritime_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:44:45 PM PST
# Last Update: 2022-03-05: 19:20
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
$maritime = $cats["Maritime Measurements"];
$test = new TestSuite();

function Maritime_test($test, $class){
    $pass = 0;
    $fail = 0;
    if ( $class->function_list[$class->function_strings[1]](234) !== array(234*6, "Feet")){
        $test->set_fail($class->function_strings[1]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[1]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[2]](234) !== array(234*101.26859, "Fathoms")){
        $test->set_fail($class->function_strings[2]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[2]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[3]](234) !== array(234*6076.1155, "Feet")){
        $test->set_fail($class->function_strings[3]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[3]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[4]](234) !== array(234*1.8288, "Meters")){
        $test->set_fail($class->function_strings[4]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[4]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[5]](234) !== array(234*10, "Cables")){
        $test->set_fail($class->function_strings[5]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[5]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[6]](234) !== array(234*1852, "Meters")){
        $test->set_fail($class->function_strings[6]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[6]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[7]](234) !== array(234*1.1507794, "Statute Miles")){
        $test->set_fail($class->function_strings[7]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[7]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[8]](234) !== array(234*1, "Nautical Miles/Hr")){
        $test->set_fail($class->function_strings[8]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[8]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[9]](234) !== array(234*0.54680665, "Fathoms")){
        $test->set_fail($class->function_strings[9]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[9]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[10]](234) !== array(234*1.852, "Kilometers")){
        $test->set_fail($class->function_strings[10]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[10]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[11]](234) !== array(234*0.5399568, "Nautical Miles")){
        $test->set_fail($class->function_strings[11]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[11]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[12]](234) !== array(234*0.86897624, "Nautical Miles")){
        $test->set_fail($class->function_strings[12]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[12]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[13]](234) !== array(234*1.852, "Kilometers/Hr")){
        $test->set_fail($class->function_strings[13]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[13]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[14]](234) !== array(234*0.5399568, "Knots")){
        $test->set_fail($class->function_strings[14]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[14]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[15]](234) !== array(234*1.1507794, "Miles/Hr")){
        $test->set_fail($class->function_strings[15]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[15]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[16]](234) !== array(234*0.86897624, "Knots")){
        $test->set_fail($class->function_strings[16]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[16]);
        $pass++;
    }
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
}

echo "Praparing Maritime...
---------------------------------\n";
sleep(1);
$test->pass_fail($maritime, Maritime_test($test, $maritime));
