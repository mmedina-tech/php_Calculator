<?php
# SYNOPSIS: Test for Imperial_to_Metric Module
# 
# Imperial_Met_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:43:44 PM PST
# Last Update: 2021-12-17: 13:07
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

function test_Imp_to_Met(){
	#{{{
	global $impm;
	echo "\nImperial to Metric
----------------------------------\n";
	if ( $impm->function_list[$impm->function_strings[1]](234) !== array(((234 - 32) * 5/9), "Celsius")){
		set_fail($impm->function_strings[1]);
	} else {
		set_pass($impm->function_strings[1]);
	}
	if ( $impm->function_list[$impm->function_strings[2]](234) !== array(234*0.76455486, "Meters<sup>3</sup>")){
		set_fail($impm->function_strings[2]);
	} else {
		set_pass($impm->function_strings[2]);
	}
	if ( $impm->function_list[$impm->function_strings[3]](234) !== array(234*0.3048, "Meters")){
		set_fail($impm->function_strings[3]);
	} else {
		set_pass($impm->function_strings[3]);
	}
	if ( $impm->function_list[$impm->function_strings[4]](234) !== array(234*3.7854118, "Liters")){
		set_fail($impm->function_strings[4]);
	} else {
		set_pass($impm->function_strings[4]);
	}
	if ( $impm->function_list[$impm->function_strings[5]](234) !== array(234*25.4, "Millimeters")){
		set_fail($impm->function_strings[5]);
	} else {
		set_pass($impm->function_strings[5]);
	}
	if ( $impm->function_list[$impm->function_strings[6]](234) !== array(234*2.54, "Centimeters")){
		set_fail($impm->function_strings[6]);
	} else {
		set_pass($impm->function_strings[6]);
	}
	if ( $impm->function_list[$impm->function_strings[7]](234) !== array(234*1.609344, "Kilometers")){
		set_fail($impm->function_strings[7]);
	} else {
		set_pass($impm->function_strings[7]);
	}
	if ( $impm->function_list[$impm->function_strings[8]](234) !== array(234*28.349523, "Grams")){
		set_fail($impm->function_strings[8]);
	} else {
		set_pass($impm->function_strings[8]);
	}
	if ( $impm->function_list[$impm->function_strings[9]](234) !== array(234*0.47317647, "Liters")){
		set_fail($impm->function_strings[9]);
	} else {
		set_pass($impm->function_strings[9]);
	}
	if ( $impm->function_list[$impm->function_strings[10]](234) !== array(234*0.94635295, "Liters")){
		set_fail($impm->function_strings[10]);
	} else {
		set_pass($impm->function_strings[10]);
	}
	if ( $impm->function_list[$impm->function_strings[11]](234) !== array(234*0.45359237, "Kilograms")){
		set_fail($impm->function_strings[11]);
	} else {
		set_pass($impm->function_strings[11]);
	}
	if ( $impm->function_list[$impm->function_strings[12]](234) !== array(234*0.09290304, "Meters<sup>2</sup>")){
		set_fail($impm->function_strings[12]);
	} else {
		set_pass($impm->function_strings[12]);
	}
	if ( $impm->function_list[$impm->function_strings[13]](234) !== array(234*2.5899881, "Kilometers<sup>2</sup>")){
		set_fail($impm->function_strings[13]);
	} else {
		set_pass($impm->function_strings[13]);
	}
	if ( $impm->function_list[$impm->function_strings[14]](234) !== array(234*0.83612736, "Meters<sup>2</sup>")){
		set_fail($impm->function_strings[14]);
	} else {
		set_pass($impm->function_strings[14]);
	}
	if ( $impm->function_list[$impm->function_strings[15]](234) !== array(234*0.9144, "Meters")){
		set_fail($impm->function_strings[15]);
	} else {
		set_pass($impm->function_strings[15]);
	}
	if ( $impm->function_list[$impm->function_strings[16]](234) !== array(234*764554.86, "Centimeters<sup>3</sup>")){
		set_fail($impm->function_strings[16]);
	} else {
		set_pass($impm->function_strings[16]);
	}
	if ( $impm->function_list[$impm->function_strings[17]](234) !== array(234*764554860, "Millimeters<sup>3</sup>")){
		set_fail($impm->function_strings[17]);
	} else {
		set_pass($impm->function_strings[17]);
	}
	if ( $impm->function_list[$impm->function_strings[18]](234) !== array(234*0.0254, "Meters")){
		set_fail($impm->function_strings[18]);
	} else {
		set_pass($impm->function_strings[18]);
	}
	if ( $impm->function_list[$impm->function_strings[19]](234) !== array(234*pow(2.54, -5), "Kilometers")){
		set_fail($impm->function_strings[19]);
	} else {
		set_pass($impm->function_strings[19]);
	}
	if ( $impm->function_list[$impm->function_strings[20]](234) !== array(234*304.8, "Millimeters")){
		set_fail($impm->function_strings[20]);
	} else {
		set_pass($impm->function_strings[20]);
	}
	if ( $impm->function_list[$impm->function_strings[21]](234) !== array(234*30.48, "Centimeters")){
		set_fail($impm->function_strings[21]);
	} else {
		set_pass($impm->function_strings[22]);
	}
	if ( $impm->function_list[$impm->function_strings[22]](234) !== array(234*0.0003048, "Kilometer")){
		set_fail($impm->function_strings[22]);
	} else {
		set_pass($impm->function_strings[22]);
	}
	if ( $impm->function_list[$impm->function_strings[23]](234) !== array(234*378.54118, "Centiliters")){
		set_fail($impm->function_strings[23]);
	} else {
		set_pass($impm->function_strings[23]);
	}
	if ( $impm->function_list[$impm->function_strings[24]](234) !== array(234*37.854118, "Deciliters")){
		set_fail($impm->function_strings[24]);
	} else {
		set_pass($impm->function_strings[24]);
	}
	if ( $impm->function_list[$impm->function_strings[25]](234) !== array(234*3785.4118, "Milliliters")){
		set_fail($impm->function_strings[25]);
	} else {
		set_pass($impm->function_strings[25]);
	}
	if ( $impm->function_list[$impm->function_strings[26]](234) !== array(234*1609344, "Millimeters")){
		set_fail($impm->function_strings[26]);
	} else {
		set_pass($impm->function_strings[26]);
	}
	if ( $impm->function_list[$impm->function_strings[27]](234) !== array(234*160934.4, "Centimeters")){
		set_fail($impm->function_strings[27]);
	} else {
		set_pass($impm->function_strings[27]);
	}
	if ( $impm->function_list[$impm->function_strings[28]](234) !== array(234*1603.344, "Meters")){
		set_fail($impm->function_strings[28]);
	} else {
		set_pass($impm->function_strings[28]);
	}
	if ( $impm->function_list[$impm->function_strings[29]](234) !== array(234*0.028349523, "Kilograms")){
		set_fail($impm->function_strings[29]);
	} else {
		set_pass($impm->function_strings[29]);
	}
	if ( $impm->function_list[$impm->function_strings[30]](234) !== array(234*47.317647, "Centiliters")){
		set_fail($impm->function_strings[30]);
	} else {
		set_pass($impm->function_strings[30]);
	}
	if ( $impm->function_list[$impm->function_strings[31]](234) !== array(234*4.7317647, "Deciliters")){
		set_fail($impm->function_strings[31]);
	} else {
		set_pass($impm->function_strings[31]);
	}
	if ( $impm->function_list[$impm->function_strings[32]](234) !== array(234*473.17647, "Milliliters")){
		set_fail($impm->function_strings[32]);
	} else {
		set_pass($impm->function_strings[32]);
	}
	if ( $impm->function_list[$impm->function_strings[33]](234) !== array(234*94.635295, "Centiliters")){
		set_fail($impm->function_strings[33]);
	} else {
		set_pass($impm->function_strings[33]);
	}
	if ( $impm->function_list[$impm->function_strings[34]](234) !== array(234*946.35295, "Milliliters")){
		set_fail($impm->function_strings[34]);
	} else {
		set_pass($impm->function_strings[34]);
	}
	if ( $impm->function_list[$impm->function_strings[35]](234) !== array(234*9.4635295, "Deciliters")){
		set_fail($impm->function_strings[35]);
	} else {
		set_pass($impm->function_strings[35]);
	}
	if ( $impm->function_list[$impm->function_strings[36]](234) !== array(234*453.59237, "Grams")){
		set_fail($impm->function_strings[36]);
	} else {
		set_pass($impm->function_strings[36]);
	}
	if ( $impm->function_list[$impm->function_strings[37]](234) !== array(234*929.0304, "Centimeters<sup>2</sup>")){
		set_fail($impm->function_strings[37]);
	} else {
		set_pass($impm->function_strings[37]);
	}
	#}}}
	$list = new ArrayObject($impm->function_list);
	$test = $list->offsetGet($impm->function_strings[12]);
	$inputs = strval(count($impm->functionInputs[$impm->function_strings[12]]));
	echo "\nInputs: $inputs\n";
	$test = var_dump($test(234));
	echo $test;

}

echo "Preping for Imperial to Metric...";
sleep(1);
pass_fail($impm, test_Imp_to_Met());

