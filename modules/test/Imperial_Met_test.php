<?php
# SYNOPSIS: Test for Imperial_to_Metric Module
# 
# Imperial_Met_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:43:44 PM PST
# Last Update: 2022-02-08: 09:39
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

function test_Imp_to_Met($test, $class){
	#{{{
	if ( $class->function_list[$class->function_strings[1]](234) !== array(((234 - 32) * 5/9), "Celsius")){
		$test->set_fail($class->function_strings[1]);
	} else {
		$test->set_pass($class->function_strings[1]);
	}
	if ( $class->function_list[$class->function_strings[2]](234) !== array(234*0.76455486, "Meters<sup>3</sup>")){
		$test->set_fail($class->function_strings[2]);
	} else {
		$test->set_pass($class->function_strings[2]);
	}
	if ( $class->function_list[$class->function_strings[3]](234) !== array(234*0.3048, "Meters")){
		$test->set_fail($class->function_strings[3]);
	} else {
		$test->set_pass($class->function_strings[3]);
	}
	if ( $class->function_list[$class->function_strings[4]](234) !== array(234*3.7854118, "Liters")){
		$test->set_fail($class->function_strings[4]);
	} else {
		$test->set_pass($class->function_strings[4]);
	}
	if ( $class->function_list[$class->function_strings[5]](234) !== array(234*25.4, "Millimeters")){
		$test->set_fail($class->function_strings[5]);
	} else {
		$test->set_pass($class->function_strings[5]);
	}
	if ( $class->function_list[$class->function_strings[6]](234) !== array(234*2.54, "Centimeters")){
		$test->set_fail($class->function_strings[6]);
	} else {
		$test->set_pass($class->function_strings[6]);
	}
	if ( $class->function_list[$class->function_strings[7]](234) !== array(234*1.609344, "Kilometers")){
		$test->set_fail($class->function_strings[7]);
	} else {
		$test->set_pass($class->function_strings[7]);
	}
	if ( $class->function_list[$class->function_strings[8]](234) !== array(234*28.349523, "Grams")){
		$test->set_fail($class->function_strings[8]);
	} else {
		$test->set_pass($class->function_strings[8]);
	}
	if ( $class->function_list[$class->function_strings[9]](234) !== array(234*0.47317647, "Liters")){
		$test->set_fail($class->function_strings[9]);
	} else {
		$test->set_pass($class->function_strings[9]);
	}
	if ( $class->function_list[$class->function_strings[10]](234) !== array(234*0.94635295, "Liters")){
		$test->set_fail($class->function_strings[10]);
	} else {
		$test->set_pass($class->function_strings[10]);
	}
	if ( $class->function_list[$class->function_strings[11]](234) !== array(234*0.45359237, "Kilograms")){
		$test->set_fail($class->function_strings[11]);
	} else {
		$test->set_pass($class->function_strings[11]);
	}
	if ( $class->function_list[$class->function_strings[12]](234) !== array(234*0.09290304, "Meters<sup>2</sup>")){
		$test->set_fail($class->function_strings[12]);
	} else {
		$test->set_pass($class->function_strings[12]);
	}
	if ( $class->function_list[$class->function_strings[13]](234) !== array(234*2.5899881, "Kilometers<sup>2</sup>")){
		$test->set_fail($class->function_strings[13]);
	} else {
		$test->set_pass($class->function_strings[13]);
	}
	if ( $class->function_list[$class->function_strings[14]](234) !== array(234*0.83612736, "Meters<sup>2</sup>")){
		$test->set_fail($class->function_strings[14]);
	} else {
		$test->set_pass($class->function_strings[14]);
	}
	if ( $class->function_list[$class->function_strings[15]](234) !== array(234*0.9144, "Meters")){
		$test->set_fail($class->function_strings[15]);
	} else {
		$test->set_pass($class->function_strings[15]);
	}
	if ( $class->function_list[$class->function_strings[16]](234) !== array(234*764554.86, "Centimeters<sup>3</sup>")){
		$test->set_fail($class->function_strings[16]);
	} else {
		$test->set_pass($class->function_strings[16]);
	}
	if ( $class->function_list[$class->function_strings[17]](234) !== array(234*764554860, "Millimeters<sup>3</sup>")){
		$test->set_fail($class->function_strings[17]);
	} else {
		$test->set_pass($class->function_strings[17]);
	}
	if ( $class->function_list[$class->function_strings[18]](234) !== array(234*0.0254, "Meters")){
		$test->set_fail($class->function_strings[18]);
	} else {
		$test->set_pass($class->function_strings[18]);
	}
	if ( $class->function_list[$class->function_strings[19]](234) !== array(234*2.54e-5, "Kilometer")){
		$test->set_fail($class->function_strings[19]);
	} else {
		$test->set_pass($class->function_strings[19]);
	}
	if ( $class->function_list[$class->function_strings[20]](234) !== array(234*304.8, "Millimeters")){
		$test->set_fail($class->function_strings[20]);
	} else {
		$test->set_pass($class->function_strings[20]);
	}
	if ( $class->function_list[$class->function_strings[21]](234) !== array(234*30.48, "Centimeters")){
		$test->set_fail($class->function_strings[21]);
	} else {
		$test->set_pass($class->function_strings[22]);
	}
	if ( $class->function_list[$class->function_strings[22]](234) !== array(234*0.0003048, "Kilometer")){
		$test->set_fail($class->function_strings[22]);
	} else {
		$test->set_pass($class->function_strings[22]);
	}
	if ( $class->function_list[$class->function_strings[23]](234) !== array(234*378.54118, "Centiliters")){
		$test->set_fail($class->function_strings[23]);
	} else {
		$test->set_pass($class->function_strings[23]);
	}
	if ( $class->function_list[$class->function_strings[24]](234) !== array(234*37.854118, "Deciliters")){
		$test->set_fail($class->function_strings[24]);
	} else {
		$test->set_pass($class->function_strings[24]);
	}
	if ( $class->function_list[$class->function_strings[25]](234) !== array(234*3785.4118, "Milliliters")){
		$test->set_fail($class->function_strings[25]);
	} else {
		$test->set_pass($class->function_strings[25]);
	}
	if ( $class->function_list[$class->function_strings[26]](234) !== array(234*1609344, "Millimeters")){
		$test->set_fail($class->function_strings[26]);
	} else {
		$test->set_pass($class->function_strings[26]);
	}
	if ( $class->function_list[$class->function_strings[27]](234) !== array(234*160934.4, "Centimeters")){
		$test->set_fail($class->function_strings[27]);
	} else {
		$test->set_pass($class->function_strings[27]);
	}
	if ( $class->function_list[$class->function_strings[28]](234) !== array(234*1603.344, "Meters")){
		$test->set_fail($class->function_strings[28]);
	} else {
		$test->set_pass($class->function_strings[28]);
	}
	if ( $class->function_list[$class->function_strings[29]](234) !== array(234*0.028349523, "Kilograms")){
		$test->set_fail($class->function_strings[29]);
	} else {
		$test->set_pass($class->function_strings[29]);
	}
	if ( $class->function_list[$class->function_strings[30]](234) !== array(234*47.317647, "Centiliters")){
		$test->set_fail($class->function_strings[30]);
	} else {
		$test->set_pass($class->function_strings[30]);
	}
	if ( $class->function_list[$class->function_strings[31]](234) !== array(234*4.7317647, "Deciliters")){
		$test->set_fail($class->function_strings[31]);
	} else {
		$test->set_pass($class->function_strings[31]);
	}
	if ( $class->function_list[$class->function_strings[32]](234) !== array(234*473.17647, "Milliliters")){
		$test->set_fail($class->function_strings[32]);
	} else {
		$test->set_pass($class->function_strings[32]);
	}
	if ( $class->function_list[$class->function_strings[33]](234) !== array(234*94.635295, "Centiliters")){
		$test->set_fail($class->function_strings[33]);
	} else {
		$test->set_pass($class->function_strings[33]);
	}
	if ( $class->function_list[$class->function_strings[34]](234) !== array(234*946.35295, "Milliliters")){
		$test->set_fail($class->function_strings[34]);
	} else {
		$test->set_pass($class->function_strings[34]);
	}
	if ( $class->function_list[$class->function_strings[35]](234) !== array(234*9.4635295, "Deciliters")){
		$test->set_fail($class->function_strings[35]);
	} else {
		$test->set_pass($class->function_strings[35]);
	}
	if ( $class->function_list[$class->function_strings[36]](234) !== array(234*453.59237, "Grams")){
		$test->set_fail($class->function_strings[36]);
	} else {
		$test->set_pass($class->function_strings[36]);
	}
	if ( $class->function_list[$class->function_strings[37]](234) !== array(234*929.0304, "Centimeters<sup>2</sup>")){
		$test->set_fail($class->function_strings[37]);
	} else {
		$test->set_pass($class->function_strings[37]);
	}
	if ( $class->function_list[$class->function_strings[38]](234) !== array(234*92903.04, "Millimeters<sup>2</sup>")){
		$test->set_fail($class->function_strings[38]);
	} else {
		$test->set_pass($class->function_strings[38]);
	}
	if ( $class->function_list[$class->function_strings[39]](234) !== array(234*9.290304E-8, "Kilometer<sup>2</sup>")){
		$test->set_fail($class->function_strings[39]);
	} else {
		$test->set_pass($class->function_strings[39]);
	}
	if ( $class->function_list[$class->function_strings[40]](234) !== array(234*2.5899881e10, "Centimeters<sup>2</sup>")){
		$test->set_fail($class->function_strings[40]);
	} else {
		$test->set_pass($class->function_strings[40]);
	}
	if ( $class->function_list[$class->function_strings[41]](234) !== array(234*2.5899881e12, "Millimeters<sup>2</sup>")){
		$test->set_fail($class->function_strings[41]);
	} else {
		$test->set_pass($class->function_strings[41]);
	}
	if ( $class->function_list[$class->function_strings[42]](234) !== array(234*2589988.1, "Meters<sup>2</sup>")){
		$test->set_fail($class->function_strings[42]);
	} else {
		$test->set_pass($class->function_strings[42]);
	}
	if ( $class->function_list[$class->function_strings[43]](234) !== array(234*8361.2736, "Centimeters<sup>2</sup>")){
		$test->set_fail($class->function_strings[43]);
	} else {
		$test->set_pass($class->function_strings[43]);
	}
	if ( $class->function_list[$class->function_strings[44]](234) !== array(234*836127.36, "Millimeters<sup>2</sup>")){
		$test->set_fail($class->function_strings[44]);
	} else {
		$test->set_pass($class->function_strings[44]);
	}
	if ( $class->function_list[$class->function_strings[45]](234) !== array(234*8.3612736e-7, "Kilometer<sup>2</sup>")){
		$test->set_fail($class->function_strings[45]);
	} else {
		$test->set_pass($class->function_strings[45]);
	}
	if ( $class->function_list[$class->function_strings[46]](234) !== array(234*645.16, "Millimeters<sup>2</sup>")){
		$test->set_fail($class->function_strings[46]);
	} else {
		$test->set_pass($class->function_strings[46]);
	}
	if ( $class->function_list[$class->function_strings[47]](234) !== array(234*6.4516, "Centimeters<sup>2</sup>")){
		$test->set_fail($class->function_strings[47]);
	} else {
		$test->set_pass($class->function_strings[47]);
	}
	if ( $class->function_list[$class->function_strings[48]](234) !== array(234*0.00064516, "Meter<sup>2</sup>")){
		$test->set_fail($class->function_strings[48]);
	} else {
		$test->set_pass($class->function_strings[48]);
	}
	if ( $class->function_list[$class->function_strings[49]](234) !== array(234*6.4516e-10, "Kilometer<sup>2</sup>")){
		$test->set_fail($class->function_strings[49]);
	} else {
		$test->set_pass($class->function_strings[49]);
	}
	if ( $class->function_list[$class->function_strings[50]](234) !== array(234*914.4, "Millimeters")){
		$test->set_fail($class->function_strings[50]);
	} else {
		$test->set_pass($class->function_strings[50]);
	}
	if ( $class->function_list[$class->function_strings[51]](234) !== array(234*91.44, "Centimeters")){
		$test->set_fail($class->function_strings[51]);
	} else {
		$test->set_pass($class->function_strings[51]);
	}
	if ( $class->function_list[$class->function_strings[52]](234) !== array(234*0.0009144, "Kilometer")){
		$test->set_fail($class->function_strings[52]);
	} else {
		$test->set_pass($class->function_strings[52]);
	}
	if ( $class->function_list[$class->function_strings[53]](234) !== array(234*0.76455486, "Meters<sup>3</sup>")){
		$test->set_fail($class->function_strings[53]);
	} else {
		$test->set_pass($class->function_strings[53]);
	}
	if ( $class->function_list[$class->function_strings[54]](234) !== array(234*7.6455486e-10, "Kilometer<sup>3</sup>")){
		$test->set_fail($class->function_strings[54]);
	} else {
		$test->set_pass($class->function_strings[54]);
	}
	if ( $class->function_list[$class->function_strings[55]](234) !== array(234*236.58824, "Milliliters")){
		$test->set_fail($class->function_strings[55]);
	} else {
		$test->set_pass($class->function_strings[55]);
	}
	if ( $class->function_list[$class->function_strings[56]](234) !== array(234*23.658824, "Centiliters")){
		$test->set_fail($class->function_strings[56]);
	} else {
		$test->set_pass($class->function_strings[56]);
	}
	if ( $class->function_list[$class->function_strings[57]](234) !== array(234*2.3658824, "Deciliters")){
		$test->set_fail($class->function_strings[57]);
	} else {
		$test->set_pass($class->function_strings[57]);
	}
	if ( $class->function_list[$class->function_strings[58]](234) !== array(234*0.23658824, "Liters")){
		$test->set_fail($class->function_strings[58]);
	} else {
		$test->set_pass($class->function_strings[58]);
	}
	if ( $class->function_list[$class->function_strings[59]](234) !== array(234*14.786765, "Milliliters")){
		$test->set_fail($class->function_strings[59]);
	} else {
		$test->set_pass($class->function_strings[59]);
	}
	if ( $class->function_list[$class->function_strings[60]](234) !== array(234*1.4786765, "Centiliters")){
		$test->set_fail($class->function_strings[60]);
	} else {
		$test->set_pass($class->function_strings[60]);
	}
	if ( $class->function_list[$class->function_strings[61]](234) !== array(234*0.14786765, "Deciliters")){
		$test->set_fail($class->function_strings[61]);
	} else {
		$test->set_pass($class->function_strings[61]);
	}
	if ( $class->function_list[$class->function_strings[62]](234) !== array(234*0.014786765, "Liters")){
		$test->set_fail($class->function_strings[62]);
	} else {
		$test->set_pass($class->function_strings[62]);
	}
	if ( $class->function_list[$class->function_strings[63]](234) !== array(234*4.9289216, "Milliliters")){
		$test->set_fail($class->function_strings[63]);
	} else {
		$test->set_pass($class->function_strings[63]);
	}
	if ( $class->function_list[$class->function_strings[64]](234) !== array(234*0.49289216, "Centiliters")){
		$test->set_fail($class->function_strings[64]);
	} else {
		$test->set_pass($class->function_strings[64]);
	}
	if ( $class->function_list[$class->function_strings[65]](234) !== array(234*0.049289216, "Deciliters")){
		$test->set_fail($class->function_strings[65]);
	} else {
		$test->set_pass($class->function_strings[65]);
	}
	if ( $class->function_list[$class->function_strings[66]](234) !== array(234*0.0049289216, "Liters")){
		$test->set_fail($class->function_strings[66]);
	} else {
		$test->set_pass($class->function_strings[66]);
	}
	if ( $class->function_list[$class->function_strings[67]](234) !== array(234*16387.064, "Millimeters<sup>3</sup>")){
		$test->set_fail($class->function_strings[67]);
	} else {
		$test->set_pass($class->function_strings[67]);
	}
	if ( $class->function_list[$class->function_strings[68]](234) !== array(234*16.387064, "Centimeters<sup>3</sup>")){
		$test->set_fail($class->function_strings[68]);
	} else {
		$test->set_pass($class->function_strings[68]);
	}
	if ( $class->function_list[$class->function_strings[69]](234) !== array(234*1.6387064e-5, "Meter<sup>3</sup>")){
		$test->set_fail($class->function_strings[69]);
	} else {
		$test->set_pass($class->function_strings[69]);
	}
	if ( $class->function_list[$class->function_strings[70]](234) !== array(234*1.6387064e-14, "Kilometer<sup>3</sup>")){
		$test->set_fail($class->function_strings[70]);
	} else {
		$test->set_pass($class->function_strings[70]);
	}
	if ( $class->function_list[$class->function_strings[71]](234) !== array(234*28316847, "Millimeters<sup>3</sup>")){
		$test->set_fail($class->function_strings[71]);
	} else {
		$test->set_pass($class->function_strings[71]);
	}
	if ( $class->function_list[$class->function_strings[72]](234) !== array(234*28316.847, "Centimeters<sup>3</sup>")){
		$test->set_fail($class->function_strings[72]);
	} else {
		$test->set_pass($class->function_strings[72]);
	}
	if ( $class->function_list[$class->function_strings[73]](234) !== array(234*0.028316847, "Meters<sup>3</sup>")){
		$test->set_fail($class->function_strings[73]);
	} else {
		$test->set_pass($class->function_strings[73]);
	}
	if ( $class->function_list[$class->function_strings[74]](234) !== array(234*2.8316847e-11, "Kilometer<sup>3</sup>")){
		$test->set_fail($class->function_strings[74]);
	} else {
		$test->set_pass($class->function_strings[74]);
	}
	if ( $class->function_list[$class->function_strings[75]](234) !== array(234*4.1681818e18, "Millimeters<sup>3</sup>")){
		$test->set_fail($class->function_strings[75]);
	} else {
		$test->set_pass($class->function_strings[75]);
	}
	if ( $class->function_list[$class->function_strings[76]](234) !== array(234*4.1681818e15, "Centimeters<sup>3</sup>")){
		$test->set_fail($class->function_strings[76]);
	} else {
		$test->set_pass($class->function_strings[76]);
	}
	if ( $class->function_list[$class->function_strings[77]](234) !== array(234*4.1681818e9, "Meters<sup>3</sup>")){
		$test->set_fail($class->function_strings[77]);
	} else {
		$test->set_pass($class->function_strings[77]);
	}
	if ( $class->function_list[$class->function_strings[78]](234) !== array(234*4.1681818, "Kilometers<sup>3</sup>")){
		$test->set_fail($class->function_strings[78]);
	} else {
		$test->set_pass($class->function_strings[78]);
	}
	#}}}
}

echo "Preping for Imperial to Metric
--------------------------------------\n";
sleep(1);
$test->pass_fail($impm, test_Imp_to_Met($test, $impm));

