<?php
# SYNOPSIS: Test for Imperial_to_Imperial Module
# 
# Imperial_Imp_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:43:09 PM PST
# Last Update: 2022-02-15: 12:42
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

function test_Imp_to_Imp($test, $class){
    $pass = 0;
    $fail = 0;
	#{{{
	echo "\nImperial to Imperial
--------------------------------------\n";
	if ( $class->function_list[$class->function_strings[1]](234) !== array(234*0.00018939394, "Mile")){
		$test->set_fail($class->function_strings[1]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[1]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[2]](234) !== array(234*5280, "Feet")){
		$test->set_fail($class->function_strings[2]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[2]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[3]](234) !== array(234*0.0625, "Pounds")){
		$test->set_fail($class->function_strings[3]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[3]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[4]](234) !== array(234*16, "Ounces")){
		$test->set_fail($class->function_strings[4]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[4]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[5]](234) !== array(234*2000, "Pounds")){
		$test->set_fail($class->function_strings[5]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[5]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[6]](234) !== array(234*0.00056818182, "Mile")){
		$test->set_fail($class->function_strings[6]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[6]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[7]](234) !== array(234*0.333333333333, "Yards")){
		$test->set_fail($class->function_strings[7]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[7]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[8]](234) !== array(234*12, "Inches")){
		$test->set_fail($class->function_strings[8]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[8]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[9]](234) !== array(234*0.0833333333333, "Feet")){
		$test->set_fail($class->function_strings[9]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[9]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[10]](234) !== array(234*0.027777778, "Yards")){
		$test->set_fail($class->function_strings[10]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[10]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[11]](234) !== array(234*0.0000015782828, "Mile")){
		$test->set_fail($class->function_strings[11]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[11]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[12]](234) !== array(234*3, "Feet")){
		$test->set_fail($class->function_strings[12]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[12]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[13]](234) !== array(234*36, "Inches")){
		$test->set_fail($class->function_strings[13]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[13]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[14]](234) !== array(234*0.000003125, "Ton")){
		$test->set_fail($class->function_strings[14]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[14]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[15]](234) !== array(234*32000, "Ounces")){
		$test->set_fail($class->function_strings[15]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[15]);
        $pass++;
	}
	#}}}
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
}

echo "Preparing Imperial to Imperial...\n";
sleep(1);
$test->pass_fail($imp, test_Imp_to_Imp($test, $imp));
