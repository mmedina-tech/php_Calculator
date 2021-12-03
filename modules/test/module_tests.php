<?php
# SYNOPSIS: Main Test Harness for Modules
# 
# module_tests.php
#
# Author: Marcus Medina
# Date: Tue 12 Oct 2021 09:31:45 PM PDT
# Last Update: 2021-12-02: 17:06
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
	global $accel;
	$class_name = get_class($accel);
	if (assert($accel->function_list[$accel->function_strings[1]](234), array("7.13", "Meters/Sec<sup>2</sup>"))){
		echo strval($accel->function_strings[1]).": Pass\n";
	} else {
		echo strval($accel->function_strings[1]).": Fail\n";
	}

	if(assert($accel->function_list[$accel->function_strings[2]](234), array("5.94", "Meters/Sec<sup>2</sup>"))){
		print strval($accel->function_strings[2]).": Pass\n";
	} else {
		print strval($accel->function_strings[2]).": Fail\n";
	}
	
	if (assert($accel->function_list[$accel->function_strings[3]](234), array("767.75", "Feet/Sec<sup>2</sup>")) ) {
		print strval($accel->function_strings[3]).": Pass\n";
	} else {
		print strval($accel->function_strings[3]).": Fail\n";
	}
	
	if (assert($accel->function_list[$accel->function_strings[4]](234), array("9212.58", "Inches/Sec<sup>2</sup>")) ) {
		print strval($accel->function_strings[4]).": Pass\n";
	} else{
		print strval($accel->function_strings[4]).": Fail\n";
	}
}
function test_Accounting(){
	global $account;
	if ( assert($account->function_list[$account->function_strings[1]](234, 234), array("1%", "Equity"))){
		echo strval($account->function_strings[1]).": Pass\n";
	} else {
		echo strval($account->function_strings[1]).": Fail\n";
	}
}
pass_fail($accel, test_Acceleration());
pass_fail($account, test_Accounting());
