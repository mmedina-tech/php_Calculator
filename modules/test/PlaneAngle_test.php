<?php
# SYNOPSIS: Test for PlaneAngle Module
# 
# PlaneAngle_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:47:16 PM PST
# Last Update: 2021-12-25: 16:30
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

function Plane_test($test, $class){
	if ( $class->function_list[$class->function_strings[1]](234) !== array(234*0.017453293, "Radians")){
		$test->set_fail($class->function_strings[1]);
	} else {
		$test->set_pass($class->function_strings[1]);
	}
	if ( $class->function_list[$class->function_strings[2]](234) !== array(234*0.16666667, "Degrees")){
		$test->set_fail($class->function_strings[2]);
	} else {
		$test->set_pass($class->function_strings[2]);
	}
	if ( $class->function_list[$class->function_strings[3]](234) !== array(234*90, "Degrees")){
		$test->set_fail($class->function_strings[3]);
	} else {
		$test->set_pass($class->function_strings[3]);
	}
	if ( $class->function_list[$class->function_strings[4]](234) !== array(234*1.5707963, "Radians")){
		$test->set_fail($class->function_strings[4]);
	} else {
		$test->set_pass($class->function_strings[4]);
	}
	if ( $class->function_list[$class->function_strings[5]](234) !== array(234*57.29578, "Degrees")){
		$test->set_fail($class->function_strings[5]);
	} else {
		$test->set_pass($class->function_strings[5]);
	}
	if ( $class->function_list[$class->function_strings[6]](234) !== array(234*0.00029088821, "Radian")){
		$test->set_fail($class->function_strings[6]);
	} else {
		$test->set_pass($class->function_strings[6]);
	}
	if ( $class->function_list[$class->function_strings[7]](234) !== array(234*60, "Minutes")){
		$test->set_fail($class->function_strings[7]);
	} else {
		$test->set_pass($class->function_strings[7]);
	}
	if ( $class->function_list[$class->function_strings[8]](234) !== array(234*0.00018518519, "Quadrant")){
		$test->set_fail($class->function_strings[8]);
	} else {
		$test->set_pass($class->function_strings[8]);
	}
	if ( $class->function_list[$class->function_strings[9]](234) !== array(234*5400, "Minutes")){
		$test->set_fail($class->function_strings[9]);
	} else {
		$test->set_pass($class->function_strings[9]);
	}
	if ( $class->function_list[$class->function_strings[10]](234) !== array(234*3437.7468, "Minutes")){
		$test->set_fail($class->function_strings[10]);
	} else {
		$test->set_pass($class->function_strings[10]);
	}
	if ( $class->function_list[$class->function_strings[11]](234) !== array(234*0.63661977, "Quadrants")){
		$test->set_fail($class->function_strings[11]);
	} else {
		$test->set_pass($class->function_strings[11]);
	}
	if ( $class->function_list[$class->function_strings[12]](234) !== array(234*0.011111111, "Quadrants")){
		$test->set_fail($class->function_strings[12]);
	} else {
		$test->set_pass($class->function_strings[12]);
	}
	
}


echo"Preparing Plane Angle Test
------------------------------------\n";
sleep(1);
$test->pass_fail($plane, Plane_test($test, $plane));

