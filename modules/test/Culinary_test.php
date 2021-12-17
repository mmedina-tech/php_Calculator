<?php
# SYNOPSIS: Test for Culinary Module
# 
# Culinary_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:39:28 PM PST
# Last Update: 2021-12-17: 12:58
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

function test_Culinary(){
	#{{{
	global $cook;
	echo "\nCulinary
---------------------------\n";
	if ( $cook->function_list[$cook->function_strings[1]](234) !== array(234*0.23658824, "Liters")){
		set_fail($cook->function_strings[1]);
	} else {
		set_pass($cook->function_strings[1]);
	}
	if ( $cook->function_list[$cook->function_strings[2]](234) !== array(117.0, "Pints")){
		set_fail($cook->function_strings[2]);
	} else {
		set_pass($cook->function_strings[2]);
	}
	if ( $cook->function_list[$cook->function_strings[3]](234) !== array(29.25, "Teaspoons")){
		set_fail($cook->function_strings[3]);
	} else {
		set_pass($cook->function_strings[3]);
	}
	if ( $cook->function_list[$cook->function_strings[4]](234) !== array(234*29.57353, "Milliliters")){
		set_fail($cook->function_strings[4]);
	} else {
		set_pass($cook->function_strings[4]);
	}
	if ( $cook->function_list[$cook->function_strings[5]](234) !== array(234*3.7854118, "Liters")){
		set_fail($cook->function_strings[5]);
	} else {
		set_pass($cook->function_strings[5]);
	}
	if ( $cook->function_list[$cook->function_strings[6]](234) !== array(234*0.4296835, "Pecks")){
		set_fail($cook->function_strings[6]);
	} else {
		set_pass($cook->function_strings[6]);
	}
	if ( $cook->function_list[$cook->function_strings[7]](234) !== array(234*0.035273962, "Ounces")){
		set_fail($cook->function_strings[7]);
	} else {
		set_pass($cook->function_strings[7]);
	}
	if ( $cook->function_list[$cook->function_strings[8]](234) !== array(234*0.0022046226, "Pound")){
		set_fail($cook->function_strings[8]);
	} else {
		set_pass($cook->function_strings[8]);
	}
	if ( $cook->function_list[$cook->function_strings[9]](234) !== array(234*2.2046226, "Pounds")){
		set_fail($cook->function_strings[9]);
	} else {
		set_pass($cook->function_strings[9]);
	}
	if ( $cook->function_list[$cook->function_strings[10]](234) !== array(234*0.26417205, "Gallons")){
		set_fail($cook->function_strings[10]);
	} else {
		set_pass($cook->function_strings[10]);
	}
	if ( $cook->function_list[$cook->function_strings[11]](234) !== array(234*2.1133764, "Pints")){
		set_fail($cook->function_strings[11]);
	} else {
		set_pass($cook->function_strings[11]);
	}
	if ( $cook->function_list[$cook->function_strings[12]](234) !== array(234*1.0566882, "Quarts")){
		set_fail($cook->function_strings[12]);
	} else {
		set_pass($cook->function_strings[12]);
	}
	if ( $cook->function_list[$cook->function_strings[13]](234) !== array(58.5, "Bushels")){
		set_fail($cook->function_strings[13]);
	} else {
		set_pass($cook->function_strings[13]);
	}
	if ( $cook->function_list[$cook->function_strings[14]](234) !== array(234*0.47317647, "Liters")){
		set_fail($cook->function_strings[14]);
	} else {
		set_pass($cook->function_strings[14]);
	}
	if ( $cook->function_list[$cook->function_strings[15]](234) !== array(117.0, "Quarts")){
		set_fail($cook->function_strings[15]);
	} else {
		set_pass($cook->function_strings[15]);
	}
	if ( $cook->function_list[$cook->function_strings[16]](234) !== array(234*0.45359237, "Kilograms")){
		set_fail($cook->function_strings[16]);
	} else {
		set_pass($cook->function_strings[16]);
	}
	if ( $cook->function_list[$cook->function_strings[17]](234, 234, 234, 234, 234) !== array(234.0, "New Quantity")){
		set_fail($cook->function_strings[17]);
	} else {
		set_pass($cook->function_strings[17]);
	}
	if ( $cook->function_list[$cook->function_strings[18]](234) !== array(58.5, "Gallons")){
		set_fail($cook->function_strings[18]);
	} else {
		set_pass($cook->function_strings[18]);
	}
	if ( $cook->function_list[$cook->function_strings[19]](234) !== array(234*0.94635295, "Liters")){
		set_fail($cook->function_strings[19]);
	} else {
		set_pass($cook->function_strings[19]);
	}
	if ( $cook->function_list[$cook->function_strings[20]](234) !== array(14.625, "Cups")){
		set_fail($cook->function_strings[20]);
	} else {
		set_pass($cook->function_strings[20]);
	}
	if ( $cook->function_list[$cook->function_strings[21]](234) !== array(117.0, "Fluid Ounces")){
		set_fail($cook->function_strings[21]);
	} else {
		set_pass($cook->function_strings[21]);
	}
	if ( $cook->function_list[$cook->function_strings[22]](234) !== array(234*14.786765, "Milliliters")){
		set_fail($cook->function_strings[22]);
	} else {
		set_pass($cook->function_strings[22]);
	}
	if ( $cook->function_list[$cook->function_strings[23]](234) !== array(234*0.33333333, "Tablespoons")){
		set_fail($cook->function_strings[23]);
	} else {
		set_pass($cook->function_strings[23]);
	}
	if ( $cook->function_list[$cook->function_strings[24]](234) !== array(234*4.9289216, "Milliliters")){
		set_fail($cook->function_strings[24]);
	} else {
		set_pass($cook->function_strings[24]);
	}
	if ( $cook->function_list[$cook->function_strings[25]](234, 234) !== array("$1.00", "Cost per Unit")){
		set_fail($cook->function_strings[25]);
	} else {
		set_pass($cook->function_strings[25]);
	}
	if ( $cook->function_list[$cook->function_strings[26]](234, 234) !== array("$1.00", "Cost Per Portion")){
		set_fail($cook->function_strings[26]);
	} else {
		set_pass($cook->function_strings[26]);
	}
	if ( $cook->function_list[$cook->function_strings[27]](234, 234) !== array("$100.00", "Selling Price")){
		set_fail($cook->function_strings[27]);
	} else {
		set_pass($cook->function_strings[27]);
	}
	if ( $cook->function_list[$cook->function_strings[28]](234) !== array(234*28.349523, "Grams")){
		set_fail($cook->function_strings[28]);
	} else {
		set_pass($cook->function_strings[28]);
	}
	#}}}
}

echo "Preparing Culinary...";
sleep(1);
pass_fail($cook, test_Culinary());
