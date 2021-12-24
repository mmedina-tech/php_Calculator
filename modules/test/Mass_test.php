<?php
# SYNOPSIS: Test for Mass Module
# 
# Mass_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:45:28 PM PST
# Last Update: 2021-12-23: 19:52
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

function Mass_test(){
	global $mass;
	global $test;
	if ( $mass->function_list[$mass->function_strings[1]](234) !== array(234*907.18474, "Kilograms")){
		$test->set_fail($mass->function_strings[1]);
	} else {
		$test->set_pass($mass->function_strings[1]);
	}
	if ( $mass->function_list[$mass->function_strings[2]](234) !== array(234*0.0011023113, "Ton")){
		$test->set_fail($mass->function_strings[2]);
	} else {
		$test->set_pass($mass->function_strings[2]);
	}
	if ( $mass->function_list[$mass->function_strings[3]](234) !== array(234*0.90718474, "Metric Tons")){
		$test->set_fail($mass->function_strings[3]);
	} else {
		$test->set_pass($mass->function_strings[3]);
	}
	if ( $mass->function_list[$mass->function_strings[4]](234) !== array(234*1.1023113, "Tons")){
		$test->set_fail($mass->function_strings[4]);
	} else {
		$test->set_pass($mass->function_strings[4]);
	}
	if ( $mass->function_list[$mass->function_strings[5]](234) !== array(234*0.036571429, "Drams")){
		$test->set_fail($mass->function_strings[5]);
	} else {
		$test->set_pass($mass->function_strings[5]);
	}
	if ( $mass->function_list[$mass->function_strings[6]](234) !== array(234*0.0022857143, "Ounce")){
		$test->set_fail($mass->function_strings[6]);
	} else {
		$test->set_pass($mass->function_strings[6]);
	}
	if ( $mass->function_list[$mass->function_strings[7]](234) !== array(234*0.06479891, "Grams")){
		$test->set_fail($mass->function_strings[7]);
	} else {
		$test->set_pass($mass->function_strings[7]);
	}
}

echo "Preparing Mass...
----------------------------------\n";
sleep(1);
$test->pass_fail($mass, Mass_test());

