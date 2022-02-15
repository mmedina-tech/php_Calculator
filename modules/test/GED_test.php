<?php
# SYNOPSIS: Test for GED_Practice Module
# 
# GED_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:42:34 PM PST
# Last Update: 2022-02-15: 12:38
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

function test_GED($test, $class){
    $pass = 0;
    $fail = 0;
	#{{{
	if ( $class->function_list[$class->function_strings[1]](234, 234) !== array(27378.0, "Triangle Area")){
		$test->set_fail($class->function_strings[1]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[1]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[2]](234) !== array(733, "Circle Area")){
		$test->set_fail($class->function_strings[2]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[2]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[3]](234, 234) !== array(54756, "Rectangle Area")){
		$test->set_fail($class->function_strings[3]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[3]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[4]](234, 234) !== array(54756, "Parallelogram Area")){
		$test->set_fail($class->function_strings[4]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[4]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[5]](234, 234, 234) !== array(54756.0, "Trapezoid Area")){
		$test->set_fail($class->function_strings[5]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[5]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[6]](234, 234, 234) !== array(55224, "Surface Area")){
		$test->set_fail($class->function_strings[6]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[6]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[7]](234, 234) !== array(54756, "Rectangle/Right Prism Volumes")){
		$test->set_fail($class->function_strings[7]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[7]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[8]](234, 234) !== array((2*pi()*234*234)+(2*pi()*234^2), "Cylinder Surface Area")){
		$test->set_fail($class->function_strings[8]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[8]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[9]](234, 234) !== array(779, "Cylinder Volume")){
		$test->set_fail($class->function_strings[9]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[9]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[10]](234, 234, 234) !== array(27612.0, "Pyramid Surface Area")){
		$test->set_fail($class->function_strings[10]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[10]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[11]](234, 234) !== array(0.333333333333*234*234, "Pyramid Volume")){
		$test->set_fail($class->function_strings[11]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[11]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[12]](234, 234) !== array((pi()*234*234)+(pi()*234), "Cone Surface Area")){
		$test->set_fail($class->function_strings[12]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[12]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[13]](234, 234) !== array(409, "Cone Volume")){
		$test->set_fail($class->function_strings[13]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[13]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[14]](234) !== array(4*pi()*234, "Sphere Surface Area")){
		$test->set_fail($class->function_strings[14]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[14]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[15]](234) !== array(1.333333333333*pi()*234, "Sphere Volume")){
		$test->set_fail($class->function_strings[15]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[15]);
        $pass++;
	}
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
}


echo "Preparing GED Practice...\n";
sleep(1);
$test->pass_fail($ged, test_GED($test, $ged));
