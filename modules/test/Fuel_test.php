<?php
# SYNOPSIS: Test for Fuel_Economy Module
# 
# Fuel_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:41:16 PM PST
# Last Update: 2021-12-23: 19:07
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

function test_Fuel(){
	global $fuel;
	global $test;
	echo "\nFuel Economy
-------------------------------\n";
	if ( $fuel->function_list[$fuel->function_strings[1]](234) !== array(234*0.42514371, "Kilometers/Liter")){
		$test->set_fail($fuel->function_strings[1]);
	} else {
		$test->set_pass($fuel->function_strings[1]);
	}
	if ( $fuel->function_list[$fuel->function_strings[2]](234) !== array(234*2.3521458, "Miles/Gallon")){
		$test->set_fail($fuel->function_strings[2]);
	} else {
		$test->set_pass($fuel->function_strings[2]);
	}
}

echo "Preparing Fuel Economy...";
sleep(1);
$test->pass_fail($fuel, test_Fuel());
