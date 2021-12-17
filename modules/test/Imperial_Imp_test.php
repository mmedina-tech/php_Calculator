<?php
# SYNOPSIS: Test for Imperial_to_Imperial Module
# 
# Imperial_Imp_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:43:09 PM PST
# Last Update: 2021-12-17: 13:00
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

function test_Imp_to_Imp(){
	#{{{
	global $imp;
	echo "\nImperial to Imperial
--------------------------------------\n";
	if ( $imp->function_list[$imp->function_strings[1]](234) !== array(234*0.00018939394, "Mile")){
		set_fail($imp->function_strings[1]);
	} else {
		set_pass($imp->function_strings[1]);
	}
	if ( $imp->function_list[$imp->function_strings[2]](234) !== array(234*5280, "Feet")){
		set_fail($imp->function_strings[2]);
	} else {
		set_pass($imp->function_strings[2]);
	}
	if ( $imp->function_list[$imp->function_strings[3]](234) !== array(234*0.0625, "Pounds")){
		set_fail($imp->function_strings[3]);
	} else {
		set_pass($imp->function_strings[3]);
	}
	if ( $imp->function_list[$imp->function_strings[4]](234) !== array(234*16, "Ounces")){
		set_fail($imp->function_strings[4]);
	} else {
		set_pass($imp->function_strings[4]);
	}
	if ( $imp->function_list[$imp->function_strings[5]](234) !== array(234*2000, "Pounds")){
		set_fail($imp->function_strings[5]);
	} else {
		set_pass($imp->function_strings[5]);
	}
	if ( $imp->function_list[$imp->function_strings[6]](234) !== array(234*0.00056818182, "Mile")){
		set_fail($imp->function_strings[6]);
	} else {
		set_pass($imp->function_strings[6]);
	}
	if ( $imp->function_list[$imp->function_strings[7]](234) !== array(234*0.333333333333, "Yards")){
		set_fail($imp->function_strings[7]);
	} else {
		set_pass($imp->function_strings[7]);
	}
	if ( $imp->function_list[$imp->function_strings[8]](234) !== array(234*12, "Inches")){
		set_fail($imp->function_strings[8]);
	} else {
		set_pass($imp->function_strings[8]);
	}
	if ( $imp->function_list[$imp->function_strings[9]](234) !== array(234*0.0833333333333, "Feet")){
		set_fail($imp->function_strings[9]);
	} else {
		set_pass($imp->function_strings[9]);
	}
	if ( $imp->function_list[$imp->function_strings[10]](234) !== array(234*0.027777778, "Yards")){
		set_fail($imp->function_strings[10]);
	} else {
		set_pass($imp->function_strings[10]);
	}
	if ( $imp->function_list[$imp->function_strings[11]](234) !== array(234*0.0000015782828, "Mile")){
		set_fail($imp->function_strings[11]);
	} else {
		set_pass($imp->function_strings[11]);
	}
	if ( $imp->function_list[$imp->function_strings[12]](234) !== array(234*3, "Feet")){
		set_fail($imp->function_strings[12]);
	} else {
		set_pass($imp->function_strings[12]);
	}
	if ( $imp->function_list[$imp->function_strings[13]](234) !== array(234*36, "Inches")){
		set_fail($imp->function_strings[13]);
	} else {
		set_pass($imp->function_strings[13]);
	}
	if ( $imp->function_list[$imp->function_strings[14]](234) !== array(234*0.000003125, "Ton")){
		set_fail($imp->function_strings[14]);
	} else {
		set_pass($imp->function_strings[14]);
	}
	if ( $imp->function_list[$imp->function_strings[15]](234) !== array(234*32000, "Ounces")){
		set_fail($imp->function_strings[15]);
	} else {
		set_pass($imp->function_strings[15]);
	}
	#}}}
}

echo "Preparing Imperial to Imperial...";
sleep(1);
pass_fail($imp, test_Imp_to_Imp());
