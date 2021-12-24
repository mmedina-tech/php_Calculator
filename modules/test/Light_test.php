<?php
# SYNOPSIS: Test for Light Module
# 
# Light_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:44:11 PM PST
# Last Update: 2021-12-23: 19:15
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

function test_Light(){
	global $light;
	global $test;
	echo "\nLight
----------------------\n";
	if ( $light->function_list[$light->function_strings[1]](234) !== array(234*10.76391, "Lumens/Meter<sup>2</sup>")){
		$test->set_fail($light->function_strings[1]);
	} else {
		$test->set_pass($light->function_strings[1]);
	}
	if ( $light->function_list[$light->function_strings[2]](234) !== array(234*0.0929, "Foot Candles")){
		$test->set_fail($light->function_strings[2]);
	} else {
		$test->set_pass($light->function_strings[2]);
	}
}

echo "Preparing for Light...";
sleep(1);
$test->pass_fail($light, test_Light());
