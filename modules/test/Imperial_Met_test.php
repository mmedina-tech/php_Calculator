<?php
# SYNOPSIS: Test for Imperial_to_Metric Module
# 
# Imperial_Met_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:43:44 PM PST
# Last Update: 2021-12-17: 13:48
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
	if ( $impm->function_list[$impm->function_strings[19]](234) !== array(234*2.54e-5, "Kilometer")){
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
	if ( $impm->function_list[$impm->function_strings[38]](234) !== array(234*92903.04, "Millimeters<sup>2</sup>")){
		set_fail($impm->function_strings[38]);
	} else {
		set_pass($impm->function_strings[38]);
	}
	if ( $impm->function_list[$impm->function_strings[39]](234) !== array(234*9.290304E-8, "Kilometer<sup>2</sup>")){
		set_fail($impm->function_strings[39]);
	} else {
		set_pass($impm->function_strings[39]);
	}
	if ( $impm->function_list[$impm->function_strings[40]](234) !== array(234*2.5899881e10, "Centimeters<sup>2</sup>")){
		set_fail($impm->function_strings[40]);
	} else {
		set_pass($impm->function_strings[40]);
	}
	if ( $impm->function_list[$impm->function_strings[41]](234) !== array(234*2.5899881e12, "Millimeters<sup>2</sup>")){
		set_fail($impm->function_strings[41]);
	} else {
		set_pass($impm->function_strings[41]);
	}
	if ( $impm->function_list[$impm->function_strings[42]](234) !== array(234*2589988.1, "Meters<sup>2</sup>")){
		set_fail($impm->function_strings[42]);
	} else {
		set_pass($impm->function_strings[42]);
	}
	if ( $impm->function_list[$impm->function_strings[43]](234) !== array(234*8361.2736, "Centimeters<sup>2</sup>")){
		set_fail($impm->function_strings[43]);
	} else {
		set_pass($impm->function_strings[43]);
	}
	if ( $impm->function_list[$impm->function_strings[44]](234) !== array(234*836127.36, "Millimeters<sup>2</sup>")){
		set_fail($impm->function_strings[44]);
	} else {
		set_pass($impm->function_strings[44]);
	}
	if ( $impm->function_list[$impm->function_strings[45]](234) !== array(234*8.3612736e-7, "Kilometer<sup>2</sup>")){
		set_fail($impm->function_strings[45]);
	} else {
		set_pass($impm->function_strings[45]);
	}
	if ( $impm->function_list[$impm->function_strings[46]](234) !== array(234*645.16, "Millimeters<sup>2</sup>")){
		set_fail($impm->function_strings[46]);
	} else {
		set_pass($impm->function_strings[46]);
	}
	if ( $impm->function_list[$impm->function_strings[47]](234) !== array(234*6.4516, "Centimeters<sup>2</sup>")){
		set_fail($impm->function_strings[47]);
	} else {
		set_pass($impm->function_strings[47]);
	}
	if ( $impm->function_list[$impm->function_strings[48]](234) !== array(234*0.00064516, "Meter<sup>2</sup>")){
		set_fail($impm->function_strings[48]);
	} else {
		set_pass($impm->function_strings[48]);
	}
	if ( $impm->function_list[$impm->function_strings[49]](234) !== array(234*6.4516e-10, "Kilometer<sup>2</sup>")){
		set_fail($impm->function_strings[49]);
	} else {
		set_pass($impm->function_strings[49]);
	}
	if ( $impm->function_list[$impm->function_strings[50]](234) !== array(234*914.4, "Millimeters")){
		set_fail($impm->function_strings[50]);
	} else {
		set_pass($impm->function_strings[50]);
	}
	if ( $impm->function_list[$impm->function_strings[51]](234) !== array(234*91.44, "Centimeters")){
		set_fail($impm->function_strings[51]);
	} else {
		set_pass($impm->function_strings[51]);
	}
	if ( $impm->function_list[$impm->function_strings[52]](234) !== array(234*0.0009144, "Kilometer")){
		set_fail($impm->function_strings[52]);
	} else {
		set_pass($impm->function_strings[52]);
	}
	if ( $impm->function_list[$impm->function_strings[53]](234) !== array(234*0.76455486, "Meters<sup>3</sup>")){
		set_fail($impm->function_strings[53]);
	} else {
		set_pass($impm->function_strings[53]);
	}
	if ( $impm->function_list[$impm->function_strings[54]](234) !== array(234*7.6455486e-10, "Kilometer<sup>3</sup>")){
		set_fail($impm->function_strings[54]);
	} else {
		set_pass($impm->function_strings[54]);
	}
	if ( $impm->function_list[$impm->function_strings[55]](234) !== array(234*236.58824, "Milliliters")){
		set_fail($impm->function_strings[55]);
	} else {
		set_pass($impm->function_strings[55]);
	}
	if ( $impm->function_list[$impm->function_strings[56]](234) !== array(234*23.658824, "Centiliters")){
		set_fail($impm->function_strings[56]);
	} else {
		set_pass($impm->function_strings[56]);
	}
	if ( $impm->function_list[$impm->function_strings[57]](234) !== array(234*2.3658824, "Deciliters")){
		set_fail($impm->function_strings[57]);
	} else {
		set_pass($impm->function_strings[57]);
	}
	if ( $impm->function_list[$impm->function_strings[58]](234) !== array(234*0.23658824, "Liters")){
		set_fail($impm->function_strings[58]);
	} else {
		set_pass($impm->function_strings[58]);
	}
	if ( $impm->function_list[$impm->function_strings[59]](234) !== array(234*14.786765, "Milliliters")){
		set_fail($impm->function_strings[59]);
	} else {
		set_pass($impm->function_strings[59]);
	}
	if ( $impm->function_list[$impm->function_strings[60]](234) !== array(234*1.4786765, "Centiliters")){
		set_fail($impm->function_strings[60]);
	} else {
		set_pass($impm->function_strings[60]);
	}
	if ( $impm->function_list[$impm->function_strings[61]](234) !== array(234*0.14786765, "Deciliters")){
		set_fail($impm->function_strings[61]);
	} else {
		set_pass($impm->function_strings[61]);
	}
	if ( $impm->function_list[$impm->function_strings[62]](234) !== array(234*0.014786765, "Liters")){
		set_fail($impm->function_strings[62]);
	} else {
		set_pass($impm->function_strings[62]);
	}
	if ( $impm->function_list[$impm->function_strings[63]](234) !== array(234*4.9289216, "Milliliters")){
		set_fail($impm->function_strings[63]);
	} else {
		set_pass($impm->function_strings[63]);
	}
	if ( $impm->function_list[$impm->function_strings[64]](234) !== array(234*0.49289216, "Centiliters")){
		set_fail($impm->function_strings[64]);
	} else {
		set_pass($impm->function_strings[64]);
	}
	if ( $impm->function_list[$impm->function_strings[65]](234) !== array(234*0.049289216, "Deciliters")){
		set_fail($impm->function_strings[65]);
	} else {
		set_pass($impm->function_strings[65]);
	}
	if ( $impm->function_list[$impm->function_strings[66]](234) !== array(234*0.0049289216, "Liters")){
		set_fail($impm->function_strings[66]);
	} else {
		set_pass($impm->function_strings[66]);
	}
	if ( $impm->function_list[$impm->function_strings[67]](234) !== array(234*16387.064, "Millimeters<sup>3</sup>")){
		set_fail($impm->function_strings[67]);
	} else {
		set_pass($impm->function_strings[67]);
	}
	if ( $impm->function_list[$impm->function_strings[68]](234) !== array(234*16.387064, "Centimeters<sup>3</sup>")){
		set_fail($impm->function_strings[68]);
	} else {
		set_pass($impm->function_strings[68]);
	}
	if ( $impm->function_list[$impm->function_strings[69]](234) !== array(234*1.6387064e-5, "Meter<sup>3</sup>")){
		set_fail($impm->function_strings[69]);
	} else {
		set_pass($impm->function_strings[69]);
	}
	if ( $impm->function_list[$impm->function_strings[70]](234) !== array(234*1.6387064e-14, "Kilometer<sup>3</sup>")){
		set_fail($impm->function_strings[70]);
	} else {
		set_pass($impm->function_strings[70]);
	}
	if ( $impm->function_list[$impm->function_strings[71]](234) !== array(234*28316847, "Millimeters<sup>3</sup>")){
		set_fail($impm->function_strings[71]);
	} else {
		set_pass($impm->function_strings[71]);
	}
	if ( $impm->function_list[$impm->function_strings[72]](234) !== array(234*28316.847, "Centimeters<sup>3</sup>")){
		set_fail($impm->function_strings[72]);
	} else {
		set_pass($impm->function_strings[72]);
	}
	if ( $impm->function_list[$impm->function_strings[73]](234) !== array(234*0.028316847, "Meters<sup>3</sup>")){
		set_fail($impm->function_strings[73]);
	} else {
		set_pass($impm->function_strings[73]);
	}
	if ( $impm->function_list[$impm->function_strings[74]](234) !== array(234*2.8316847e-11, "Kilometer<sup>3</sup>")){
		set_fail($impm->function_strings[74]);
	} else {
		set_pass($impm->function_strings[74]);
	}
	if ( $impm->function_list[$impm->function_strings[75]](234) !== array(234*4.1681818e18, "Millimeters<sup>3</sup>")){
		set_fail($impm->function_strings[75]);
	} else {
		set_pass($impm->function_strings[75]);
	}
	if ( $impm->function_list[$impm->function_strings[76]](234) !== array(234*4.1681818e15, "Centimeters<sup>3</sup>")){
		set_fail($impm->function_strings[76]);
	} else {
		set_pass($impm->function_strings[76]);
	}
	if ( $impm->function_list[$impm->function_strings[77]](234) !== array(234*4.1681818e9, "Meters<sup>3</sup>")){
		set_fail($impm->function_strings[77]);
	} else {
		set_pass($impm->function_strings[77]);
	}
	if ( $impm->function_list[$impm->function_strings[78]](234) !== array(234*4.1681818, "Kilometers<sup>3</sup>")){
		set_fail($impm->function_strings[78]);
	} else {
		set_pass($impm->function_strings[78]);
	}
	#}}}
}

echo "Preping for Imperial to Metric...";
sleep(1);
pass_fail($impm, test_Imp_to_Met());

