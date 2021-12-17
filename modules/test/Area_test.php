<?php
# SYNOPSIS: Test for Area Module
# 
# Area_test.php
#
# Author: Marcus Medina
# Date: Sun 05 Dec 2021 04:24:28 PM PST
# Last Update: 2021-12-17: 12:56
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or 
# (at your option) any later version.
#
# This Program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY of FITNESS FOR A PARTICULAR PURPOSE. See the 
# GNU General Public License for more details.
#
# You Should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
# MA 02110-1301, USA.
#
#
#
require_once("imports.inc.php");
require_once("pass_fail.php");

function test_Area(){
	#{{{
	global $area;
	echo "\nArea
---------------------------\n";
	if ( $area->function_list[$area->function_strings[1]](234) != array(94.6998, "Hectares")){
		set_fail($area->function_strings[1]);
	} else {
		set_pass($area->function_strings[1]);
	}
	if ( $area->function_list[$area->function_strings[2]](234) !== array(578.214, "Acres")){
		set_fail($area->function_strings[2]);
	} else {
		set_pass($area->function_strings[2]);
	}
	if ( $area->function_list[$area->function_strings[3]](234) !== array(1.624999896, "Square Feet")){
		set_fail($area->function_strings[3]);
	} else {
		set_pass($area->function_strings[3]);
	}
	if ( $area->function_list[$area->function_strings[4]](234) !== array(25.99999974, "Square Yards")){
		set_fail($area->function_strings[4]);
	} else {
		set_pass($area->function_strings[4]);
	}
	if ( $area->function_list[$area->function_strings[5]](234) !== array(0.85950423, "Square Rod")){
		set_fail($area->function_strings[5]);
	} else {
		set_pass($area->function_strings[5]);
	}
	if ( $area->function_list[$area->function_strings[6]](234) !== array(234*0.00625, "Acres")){
		set_fail($area->function_strings[6]);
	} else {
		set_pass($area->function_strings[6]);
	}
	if ( $area->function_list[$area->function_strings[7]](234) !== array(234*0.0015625, "Square Mile")){
		set_fail($area->function_strings[7]);
	} else {
		set_pass($area->function_strings[7]);
	}
	if ( $area->function_list[$area->function_strings[8]](234) !== array(234*3.5870064e-08, "Square Mile")){
		set_fail($area->function_strings[8]);
	} else {
		set_pass($area->function_strings[8]);
	}
	if ( $area->function_list[$area->function_strings[9]](234) !== array(234*2.2956841e-05, "Acre")){
		set_fail($area->function_strings[9]);
	} else {
		set_pass($area->function_strings[9]);
	}
	if ( $area->function_list[$area->function_strings[10]](234) !== array(234*0.000645161, "Inch<sup>2</sup>")){
		set_fail($area->function_strings[10]);
	} else {
		set_pass($area->function_strings[10]);
	}
	if ( $area->function_list[$area->function_strings[11]](234) !== array(234*0.008361204, "Yards<sup>2</sup>")){
		set_fail($area->function_strings[11]);
	} else {
		set_pass($area->function_strings[11]);
	}
	if ( $area->function_list[$area->function_strings[12]](234) !== array(234*0.004046863, "Acre")){
		set_fail($area->function_strings[12]);
	} else {
		set_pass($area->function_strings[12]);
	}
	if ( $area->function_list[$area->function_strings[13]](234) !== array(234*0.015941336, "Inches<sup>2</sup>")){
		set_fail($area->function_strings[13]);
	} else {
		set_pass($area->function_strings[13]);
	}
	if ( $area->function_list[$area->function_strings[14]](234) !== array(234*0.002417052, "Centimeter<sup>2</sup>")){
		set_fail($area->function_strings[14]);
	} else {
		set_pass($area->function_strings[14]);
	}
	if ( $area->function_list[$area->function_strings[15]](234) !== array(0.3744, "Link<sup>2</sup>")){
		set_fail($area->function_strings[15]);
	} else {
		set_pass($area->function_strings[15]);
	}
	if ( $area->function_list[$area->function_strings[16]](234) !== array(234*0.033057851, "Yards<sup>2</sup>")){
		set_fail($area->function_strings[16]);
	} else {
		set_pass($area->function_strings[16]);
	}
	if ( $area->function_list[$area->function_strings[17]](234) !== array(234*0.029536631, "Meters<sup>2</sup>")){
		set_fail($area->function_strings[17]);
	} else {
		set_pass($area->function_strings[17]);
	}
	if ( $area->function_list[$area->function_strings[18]](234) !== array(14.625, "Poles<sup>2</sup>")){
		set_fail($area->function_strings[18]);
	} else {
		set_pass($area->function_strings[18]);
	}
	if ( $area->function_list[$area->function_strings[19]](234) !== array(234*.002066116, "Yard<sup>2</sup>")){
		set_fail($area->function_strings[19]);
	} else {
		set_pass($area->function_strings[19]);
	}
	if ( $area->function_list[$area->function_strings[20]](234) !== array(234*0.002471052, "Meter<sup>2</sup>")){
		set_fail($area->function_strings[20]);
	} else {
		set_pass($area->function_strings[20]);
	}
	if ( $area->function_list[$area->function_strings[21]](234) !== array(2.34, "Chains<sup>2</sup>")){
		set_fail($area->function_strings[21]);
	} else {
		set_pass($area->function_strings[21]);
	}
	if ( $area->function_list[$area->function_strings[22]](234) !== array(234*0.000206612, "Yard<sup>2</sup>")){
		set_fail($area->function_strings[22]);
	} else {
		set_pass($area->function_strings[22]);
	}
	if ( $area->function_list[$area->function_strings[23]](234) !== array(234*0.0002471052, "Meter<sup>2</sup>")){
		set_fail($area->function_strings[23]);
	} else {
		set_pass($area->function_strings[23]);
	}
	if ( $area->function_list[$area->function_strings[24]](234) !== array(234*0.0015625, "Acre")){
		set_fail($area->function_strings[24]);
	} else {
		set_pass($area->function_strings[24]);
	}
	if ( $area->function_list[$area->function_strings[25]](234) !== array(234*0.0015625, "Mile<sup>2</sup>")){
		set_fail($area->function_strings[25]);
	} else {
		set_pass($area->function_strings[25]);
	}
	if ( $area->function_list[$area->function_strings[26]](234) !== array(234, "Kilometers<sup>2</sup>")){
		set_fail($area->function_strings[26]);
	} else {
		set_pass($area->function_strings[26]);
	}
	if ( $area->function_list[$area->function_strings[27]](234) !== array(234*0.027777778, "Sections")){
		set_fail($area->function_strings[27]);
	} else {
		set_pass($area->function_strings[27]);
	}
	if ( $area->function_list[$area->function_strings[28]](234) !== array(234*0.027777778, "Miles<sup>2</sup>")){
		set_fail($area->function_strings[28]);
	} else {
		set_pass($area->function_strings[28]);
	}
	if ( $area->function_list[$area->function_strings[29]](234) !== array(234*0.010725011, "Kilometers<sup>2</sup>")){
		set_fail($area->function_strings[29]);
	} else {
		set_pass($area->function_strings[29]);
	}
	if ( $area->function_list[$area->function_strings[30]](234) !== array(234*0.00064516, "Centiare")){
		set_fail($area->function_strings[30]);
	} else {
		set_pass($area->function_strings[30]);
	}
	if ( $area->function_list[$area->function_strings[31]](234) !== array(234*0.0083612736, "Ares")){
		set_fail($area->function_strings[31]);
	} else {
		set_pass($area->function_strings[31]);
	}
	if ( $area->function_list[$area->function_strings[32]](234) !== array(234*0.0040468554, "Kilometer<sup>2</sup>")){
		set_fail($area->function_strings[32]);
	} else {
		set_pass($area->function_strings[32]);
	}
	if ( $area->function_list[$area->function_strings[33]](234) !== array(234*0.38610216, "Miles<sup>2</sup>")){
		set_fail($area->function_strings[33]);
	} else {
		set_pass($area->function_strings[33]);
	}
	if ( $area->function_list[$area->function_strings[34]](234) !== array(234*0.15500031, "Inches<sup>2</sup>")){
		set_fail($area->function_strings[34]);
	} else {
		set_pass($area->function_strings[34]);
	}
	if ( $area->function_list[$area->function_strings[35]](234) !== array(234*0.015942251, "Links<sup>2</sup>")){
		set_fail($area->function_strings[35]);
	} else {
		set_pass($area->function_strings[35]);
	}
	if ( $area->function_list[$area->function_strings[36]](234) !== array(234*1.19599, "Yards<sup>2</sup>")){
		set_fail($area->function_strings[36]);
	} else {
		set_pass($area->function_strings[36]);
	}
	if ( $area->function_list[$area->function_strings[37]](234) !== array(234*20.661157, "Links<sup>2</sup>")){
		set_fail($area->function_strings[37]);
	} else {
		set_pass($area->function_strings[37]);
	}
	if ( $area->function_list[$area->function_strings[38]](234) !== array(234*0.0016000056, "Pole<sup>2</sup>")){
		set_fail($area->function_strings[38]);
	} else {
		set_pass($area->function_strings[38]);
	}
	if ( $area->function_list[$area->function_strings[39]](234) !== array(234*0.033057966, "Poles<sup>2</sup>")){
		set_fail($area->function_strings[39]);
	} else {
		set_pass($area->function_strings[39]);
	}
	if ( $area->function_list[$area->function_strings[40]](234) !== array(234*0.062499783, "Chains<sup>2</sup>")){
		set_fail($area->function_strings[40]);
	} else {
		set_pass($area->function_strings[40]);
	}
	if ( $area->function_list[$area->function_strings[41]](234) !== array(234*0.1, "Acres")){
		set_fail($area->function_strings[41]);
	} else {
		set_pass($area->function_strings[41]);
	}
	if ( $area->function_list[$area->function_strings[42]](234) !== array(234*0.0015625, "Section")){
		set_fail($area->function_strings[42]);
	} else {
		set_pass($area->function_strings[42]);
	}
	if ( $area->function_list[$area->function_strings[43]](234) !== array(234*0.027777778, "Townships")){
		set_fail($area->function_strings[43]);
	} else {
		set_pass($area->function_strings[43]);
	}
	if ( $area->function_list[$area->function_strings[44]](234) !== array(10193040, "Feet<sup>2</sup>")){
		set_fail($area->function_strings[44]);
	} else {
		set_pass($area->function_strings[44]);
	}
	if ( $area->function_list[$area->function_strings[45]](234) !== array(23400, "Centiares")){
		set_fail($area->function_strings[45]);
	} else {
		set_pass($area->function_strings[45]);
	}
	if ( $area->function_list[$area->function_strings[46]](234) !== array(2.34, "Ares")){
		set_fail($area->function_strings[46]);
	} else {
		set_pass($area->function_strings[46]);
	}
	if ( $area->function_list[$area->function_strings[47]](234) !== array(23400, "Ares")){
		set_fail($area->function_strings[47]);
	} else {
		set_pass($area->function_strings[47]);
	}
	if ( $area->function_list[$area->function_strings[48]](234) !== array(234*40.468564, "Ares")){
		set_fail($area->function_strings[48]);
	} else {
		set_pass($area->function_strings[48]);
	}
	if ( $area->function_list[$area->function_strings[49]](234) !== array(2.34, "Hectares")){
		set_fail($area->function_strings[49]);
	} else {
		set_pass($area->function_strings[49]);
	}
	if ( $area->function_list[$area->function_strings[50]](234) !== array(23400, "Hectares")){
		set_fail($area->function_strings[50]);
	} else {
		set_pass($area->function_strings[50]);
	}
	if ( $area->function_list[$area->function_strings[51]](234) !== array(234*2.5899881, "Kilometers<sup>2</sup>")){
		set_fail($area->function_strings[51]);
	} else {
		set_pass($area->function_strings[51]);
	}
	if ( $area->function_list[$area->function_strings[52]](234) !== array(2.34, "Kilometers<sup>2</sup>")){
		set_fail($area->function_strings[52]);
	} else {
		set_pass($area->function_strings[52]);
	}
	if ( $area->function_list[$area->function_strings[53]](234) !== array(234*0.0024710538, "Link<sup>2</sup>")){
		set_fail($area->function_strings[53]);
	} else {
		set_pass($area->function_strings[53]);
	}
	if ( $area->function_list[$area->function_strings[54]](234) !== array(234*0.039536999, "Poles<sup>2</sup>")){
		set_fail($area->function_strings[54]);
	} else {
		set_pass($area->function_strings[54]);
	}
	if ( $area->function_list[$area->function_strings[55]](234) !== array(234*0.0024710538, "Chain<sup>2</sup>")){
		set_fail($area->function_strings[55]);
	} else {
		set_pass($area->function_strings[55]);
	}
	if ( $area->function_list[$area->function_strings[56]](234) !== array(234*0.0020661157, "Chain<sup>2</sup>")){
		set_fail($area->function_strings[56]);
	} else {
		set_pass($area->function_strings[56]);
	}
	if ( $area->function_list[$area->function_strings[57]](234) !== array(234*0.00024710538, "Acre")){
		set_fail($area->function_strings[57]);
	} else {
		set_pass($area->function_strings[57]);
	}
	if ( $area->function_list[$area->function_strings[58]](234) !== array(234*0.00020661157, "Acre")){
		set_fail($area->function_strings[58]);
	} else {
		set_pass($area->function_strings[58]);
	}
	if ( $area->function_list[$area->function_strings[59]](234) !== array(234*0.38610216, "Sections")){
		set_fail($area->function_strings[59]);
	} else {
		set_pass($area->function_strings[59]);
	}
	if ( $area->function_list[$area->function_strings[60]](234) !== array(234, "Sections")){
		set_fail($area->function_strings[60]);
	} else {
		set_pass($area->function_strings[60]);
	}
	#}}}
}

echo "Preparing Area...";
sleep(1);
pass_fail($area, test_Area());
