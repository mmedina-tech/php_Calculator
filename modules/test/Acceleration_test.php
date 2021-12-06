<?php
# SYNOPSIS: Main Test Harness for Modules
# 
# module_tests.php
#
# Author: Marcus Medina
# Date: Tue 12 Oct 2021 09:31:45 PM PDT
# Last Update: 2021-12-05: 16:20
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
	global $accel;
	if ( $accel->function_list[$accel->function_strings[1]](234) !== array(7.13232, "Meters/Sec<sup>2</sup>")){
		set_fail($accel->function_strings[1]);
	} else {
		set_pass($accel->function_strings[1]);	
	}
	if ( $accel->function_list[$accel->function_strings[2]](234) !== array(5.9436, "Meters/Sec<sup>2</sup>")){
		set_fail($accel->function_strings[2]);
	} else {
		set_pass($accel->function_strings[2]);	
	}
	if ( $accel->function_list[$accel->function_strings[3]](234) !== array(767.754, "Feet/Sec<sup>2</sup>") ) {
		set_fail($accel->function_strings[3]);
	} else {
		set_pass($accel->function_strings[3]);	
	}
	if ( $accel->function_list[$accel->function_strings[4]](234) !== array(9212.58, "Inches/Sec<sup>2</sup>") ) {
		set_fail($accel->function_strings[4]);
	} else {
		set_pass($accel->function_strings[4]);	
	}
	
	#}}}
}


pass_fail($accel, test_Acceleration());
