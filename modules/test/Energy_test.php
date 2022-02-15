<?php
# SYNOPSIS: Test for Energy_or_Work Module
# 
# Energy_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:40:36 PM PST
# Last Update: 2022-02-15: 12:31
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

function test_Energy($test, $class){
    $pass = 0;
    $fail = 0;
	#{{{
	if ( $class->function_list[$class->function_strings[1]](234) !== array(234*778.2, "Foot/Pounds")){
		$test->set_fail($class->function_strings[1]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[1]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[2]](234) !== array(234*0.27777778, "KiloWatt Hours")){
		$test->set_fail($class->function_strings[2]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[2]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[3]](234) !== array(58968, "Gram/Calories")){
		$test->set_fail($class->function_strings[3]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[3]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[4]](234) !== array(234*1055.0559, "Joules")){
		$test->set_fail($class->function_strings[4]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[4]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[5]](234) !== array(234*0.00027777778, "Watt Hour")){
		$test->set_fail($class->function_strings[5]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[5]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[6]](234) !== array(979.056, "Joules")){
		$test->set_fail($class->function_strings[6]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[6]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[7]](234) !== array(234*1.3558, "Joules")){
		$test->set_fail($class->function_strings[7]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[7]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[8]](234) !== array(234*0.00094781712, "BTU")){
		$test->set_fail($class->function_strings[8]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[8]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[9]](234) !== array(842400, "Joules")){
		$test->set_fail($class->function_strings[9]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[9]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[10]](234) !== array(234*0.23900574, "Calories")){
		$test->set_fail($class->function_strings[10]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[10]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[11]](234) !== array(172.5984, "Foot/Pounds")){
		$test->set_fail($class->function_strings[11]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[11]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[12]](234) !== array(842.4, "Mega Joules")){
		$test->set_fail($class->function_strings[12]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[12]);
        $pass++;
	}

	#}}}
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
}
echo "Preparing Energy or Work...\n";
sleep(1);
$test->pass_fail($energy, test_Energy($test, $energy));
