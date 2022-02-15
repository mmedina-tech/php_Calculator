<?php
# SYNOPSIS: Test for Metric_to_Imperial Module
# 
# Metric_Imp_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:45:57 PM PST
# Last Update: 2022-02-15: 13:56
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

function Metric_Imp_test($test, $class){
    $pass = 0;
    $fail = 0;

	if ( $class->function_list[$class->function_strings[1]](234) !== array(((234 * 9/5)+32), "Fahrenheit")){
		$test->set_fail($class->function_strings[1]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[1]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[2]](234) !== array(234*0.39370079, "Inches")){
		$test->set_fail($class->function_strings[2]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[2]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[3]](234) !== array(234*0.032808399, "Feet")){
		$test->set_fail($class->function_strings[3]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[3]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[4]](234) !== array(234*35.314667, "Feet<sup>3</sup>")){
		$test->set_fail($class->function_strings[4]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[4]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[5]](234) !== array(234*1.3079506, "Yards<sup>3</sup>")){
		$test->set_fail($class->function_strings[5]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[5]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[6]](234) !== array(234*0.035273962, "Ounces")){
		$test->set_fail($class->function_strings[6]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[6]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[7]](234) !== array(234*2.2046226, "Pounds")){
		$test->set_fail($class->function_strings[7]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[7]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[8]](234) !== array(234*0.26417205, "Gallons")){
		$test->set_fail($class->function_strings[8]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[8]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[9]](234) !== array(234*2.1133764, "Pints")){
		$test->set_fail($class->function_strings[9]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[9]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[10]](234) !== array(234*1.0566882, "Quarts")){
		$test->set_fail($class->function_strings[10]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[10]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[11]](234) !== array(234*3.2808399, "Feet")){
		$test->set_fail($class->function_strings[11]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[11]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[12]](234) !== array(234*0.00062137119, "Mile")){
		$test->set_fail($class->function_strings[12]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[12]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[13]](234) !== array(234*1.0936133, "Yards")){
		$test->set_fail($class->function_strings[13]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[13]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[14]](234) !== array(234*0.039370079, "Inches")){
		$test->set_fail($class->function_strings[14]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[14]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[15]](234) !== array(234*0.38610216, "Miles<sup>2</sup>")){
		$test->set_fail($class->function_strings[15]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[15]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[16]](234) !== array(234*10.76391, "Feet<sup>2</sup>")){
		$test->set_fail($class->function_strings[16]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[16]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[17]](234) !== array(234*1.19599, "Yards<sup>2</sup>")){
		$test->set_fail($class->function_strings[17]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[17]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[18]](234) !== array(234*0.62137119, "Miles")){
		$test->set_fail($class->function_strings[18]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[18]);
        $pass++;
	}
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
}

echo "Preparing Metric To Imperial Test
---------------------------------------------\n";
sleep(1);
$test->pass_fail($mti, Metric_Imp_test($test, $mti));
