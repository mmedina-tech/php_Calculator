<?php
# SYNOPSIS: Test for Energy_or_Work Module
# 
# Energy_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:40:36 PM PST
# Last Update: 2021-12-17: 13:04
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

function test_Energy(){
	#{{{
	global $energy;
	echo "\nEnergy or Work
-----------------------------------\n";
	if ( $energy->function_list[$energy->function_strings[1]](234) !== array(234*778.2, "Foot/Pounds")){
		set_fail($energy->function_strings[1]);
	} else {
		set_pass($energy->function_strings[1]);
	}
	if ( $energy->function_list[$energy->function_strings[2]](234) !== array(234*0.27777778, "KiloWatt Hours")){
		set_fail($energy->function_strings[2]);
	} else {
		set_pass($energy->function_strings[2]);
	}
	if ( $energy->function_list[$energy->function_strings[3]](234) !== array(58968, "Gram/Calories")){
		set_fail($energy->function_strings[3]);
	} else {
		set_pass($energy->function_strings[3]);
	}
	if ( $energy->function_list[$energy->function_strings[4]](234) !== array(234*1055.0559, "Joules")){
		set_fail($energy->function_strings[4]);
	} else {
		set_pass($energy->function_strings[4]);
	}
	if ( $energy->function_list[$energy->function_strings[5]](234) !== array(234*0.00027777778, "Watt Hour")){
		set_fail($energy->function_strings[5]);
	} else {
		set_pass($energy->function_strings[5]);
	}
	if ( $energy->function_list[$energy->function_strings[6]](234) !== array(979.056, "Joules")){
		set_fail($energy->function_strings[6]);
	} else {
		set_pass($energy->function_strings[6]);
	}
	if ( $energy->function_list[$energy->function_strings[7]](234) !== array(234*1.3558, "Joules")){
		set_fail($energy->function_strings[7]);
	} else {
		set_pass($energy->function_strings[7]);
	}
	if ( $energy->function_list[$energy->function_strings[8]](234) !== array(234*0.00094781712, "BTU")){
		set_fail($energy->function_strings[8]);
	} else {
		set_pass($energy->function_strings[8]);
	}
	if ( $energy->function_list[$energy->function_strings[9]](234) !== array(842400, "Joules")){
		set_fail($energy->function_strings[9]);
	} else {
		set_pass($energy->function_strings[9]);
	}
	if ( $energy->function_list[$energy->function_strings[10]](234) !== array(234*0.23900574, "Calories")){
		set_fail($energy->function_strings[10]);
	} else {
		set_pass($energy->function_strings[10]);
	}
	if ( $energy->function_list[$energy->function_strings[11]](234) !== array(172.5984, "Foot/Pounds")){
		set_fail($energy->function_strings[11]);
	} else {
		set_pass($energy->function_strings[11]);
	}
	if ( $energy->function_list[$energy->function_strings[12]](234) !== array(842.4, "Mega Joules")){
		set_fail($energy->function_strings[12]);
	} else {
		set_pass($energy->function_strings[12]);
	}
	#}}}
}

echo "Preparing Energy or Work...";
sleep(1);
pass_fail($energy, test_Energy());
