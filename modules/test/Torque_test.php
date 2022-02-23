<?php
# SYNOPSIS: Test for Torque Module
#
# Torque_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:52:13 PM PST
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

$test = new Testsuite();

function Torque_test($test, $class){
    $pass = 0;
    $fail = 0;

	if ( $class->function_list[$class->function_strings[1]](234) !== array(234*0.089595863, "Ounce/Inches")){
		$test->set_fail($class->function_strings[1]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[1]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[2]](234) !== array(234*0.068521766, "Pound/Feet")){
		$test->set_fail($class->function_strings[2]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[2]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[3]](234) !== array(234*0.0057101472, "Pound/Inches")){
		$test->set_fail($class->function_strings[3]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[3]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[4]](234) !== array(234*11.16123, "Gram/Centimeters")){
		$test->set_fail($class->function_strings[4]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[4]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[5]](234) !== array(234*14.593903, "Newton/Meters")){
		$test->set_fail($class->function_strings[5]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[5]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[6]](234) !== array(234*175.12684, "Newton/Meters")){
		$test->set_fail($class->function_strings[6]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[6]);
        $pass++;
	}
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
}

echo "Preparing Torque Test
-------------------------------\n";
sleep(1);
$test->pass_fail($tor, Torque_test($test, $tor));
