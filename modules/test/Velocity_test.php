<?php
# SYNOPSIS: Test for Velocity Module
# 
# Velocity_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:52:30 PM PST
# Last Update: 2021-12-27: 16:41
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


function Velocity_test($test, $class){
	if ( $class->function_list[$class->function_strings[1]](234) !== array(234*1.609344, "Kilometers/Hr")){
		$test->set_fail($class->function_strings[1]);
	} else {
		$test->set_pass($class->function_strings[1]);
	}
	if ( $class->function_list[$class->function_strings[2]](234) !== array(234*0.62137119, "Miles/Hr")){
		$test->set_fail($class->function_strings[2]);
	} else {
		$test->set_pass($class->function_strings[2]);
	}
	if ( $class->function_list[$class->function_strings[3]](234) !== array(234*0.3048, "Meters/Sec")){
		$test->set_fail($class->function_strings[3]);
	} else {
		$test->set_pass($class->function_strings[3]);
	}
	if ( $class->function_list[$class->function_strings[4]](234) !== array(234*3.2808399, "Feet/Sec")){
		$test->set_fail($class->function_strings[4]);
	} else {
		$test->set_pass($class->function_strings[4]);
	}
	if ( $class->function_list[$class->function_strings[5]](234) !== array(234*1000, "Meters/Sec")){
		$test->set_fail($class->function_strings[5]);
	} else {
		$test->set_pass($class->function_strings[5]);
	}
	if ( $class->function_list[$class->function_strings[6]](234) !== array(234*0.001, "Kilometer/Sec")){
		$test->set_fail($class->function_strings[6]);
	} else {
		$test->set_pass($class->function_strings[6]);
	}
	if ( $class->function_list[$class->function_strings[7]](234) !== array(234*0.44704, "Meters/Sec")){
		$test->set_fail($class->function_strings[7]);
	} else {
		$test->set_pass($class->function_strings[7]);
	}
	if ( $class->function_list[$class->function_strings[8]](234) !== array(234*2.2369363, "Miles/Hr")){
		$test->set_fail($class->function_strings[8]);
	} else {
		$test->set_pass($class->function_strings[8]);
	}
}

echo "Preparing Velocity Test
----------------------------------\n";
sleep(1);
$test->pass_fail($vel, Velocity_test($test, $vel));
