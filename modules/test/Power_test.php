<?php
# SYNOPSIS: Test for Power Module
# 
# Power_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:47:31 PM PST
# Last Update: 2021-12-25: 16:43
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
	if ( $class->function_list[$class->function_strings[1]](234) !== array(234*0.29307107, "Watts")){
		$test->set_fail($class->function_strings[1]);
	} else {
		$test->set_pass($class->function_strings[1]);
	}
	if ( $class->function_list[$class->function_strings[2]](234) !== array(234*33000, "Foot/Pounds per Minute")){
		$test->set_fail($class->function_strings[2]);
	} else {
		$test->set_pass($class->function_strings[2]);
	}
	if ( $class->function_list[$class->function_strings[3]](234) !== array(234*550, "Foot/Pounds per Second")){
		$test->set_fail($class->function_strings[3]);
	} else {
		$test->set_pass($class->function_strings[3]);
	}
	if ( $class->function_list[$class->function_strings[4]](234) !== array(234*745.69987, "Watts")){
		$test->set_fail($class->function_strings[4]);
	} else {
		$test->set_pass($class->function_strings[4]);
	}
	if ( $class->function_list[$class->function_strings[5]](234) !== array(234*1.3410221, "Horsepower")){
		$test->set_fail($class->function_strings[5]);
	} else {
		$test->set_pass($class->function_strings[5]);
	}
	if ( $class->function_list[$class->function_strings[6]](234) !== array(234*0.022596966, "Watts")){
		$test->set_fail($class->function_strings[6]);
	} else {
		$test->set_pass($class->function_strings[6]);
	}
	if ( $class->function_list[$class->function_strings[7]](234) !== array(234*44.253729, "Foot/Pounds per Minute")){
		$test->set_fail($class->function_strings[7]);
	} else {
		$test->set_pass($class->function_strings[7]);
	}
	if ( $class->function_list[$class->function_strings[8]](234) !== array(234*0.0013410221, "Horsepower")){
		$test->set_fail($class->function_strings[8]);
	} else {
		$test->set_pass($class->function_strings[8]);
	}
	if ( $class->function_list[$class->function_strings[9]](234) !== array(234*0.022596966, "Watts")){
		$test->set_fail($class->function_strings[9]);
	} else {
		$test->set_pass($class->function_strings[9]);
	}
	if ( $class->function_list[$class->function_strings[10]](234) !== array(234*0.73756215, "Foot/Pounds per Second")){
		$test->set_fail($class->function_strings[10]);
	} else {
		$test->set_pass($class->function_strings[10]);
	}
}


echo "Preparing Power Test
-----------------------------\n";
sleep(1);
$test->pass_fail($power, Power_test($test, $power));

