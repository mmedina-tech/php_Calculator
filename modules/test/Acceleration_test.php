<?php
# SYNOPSIS: Test for Acceleration Module
# 
# Acceleration_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:35:28 PM PST
# Last Update: 2021-12-23: 09:19
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

function test_Acceleration(){
	#{{{
	global $test;
	global $accel;
	echo "\nAccleration
----------------------------\n";
	if ( $accel->function_list[$accel->function_strings[1]](234) !== array(7.13232, "Meters/Sec<sup>2</sup>")){
		$test->set_fail($accel->function_strings[1]);
	} else {
		$test->set_pass($accel->function_strings[1]);	
	}
	if ( $accel->function_list[$accel->function_strings[2]](234) !== array(5.9436, "Meters/Sec<sup>2</sup>")){
		$test->set_fail($accel->function_strings[2]);
	} else {
		$test->set_pass($accel->function_strings[2]);	
	}
	if ( $accel->function_list[$accel->function_strings[3]](234) !== array(767.754, "Feet/Sec<sup>2</sup>") ) {
		$test->set_fail($accel->function_strings[3]);
	} else {
		$test->set_pass($accel->function_strings[3]);	
	}
	if ( $accel->function_list[$accel->function_strings[4]](234) !== array(9212.58, "Inches/Sec<sup>2</sup>") ) {
		$test->set_fail($accel->function_strings[4]);
	} else {
		$test->set_pass($accel->function_strings[4]);	
	}
	#}}}
}

echo "Preparing Acceleration...";
sleep(1);
$test = new TestSuite();
$test->pass_fail($accel, test_Acceleration());
