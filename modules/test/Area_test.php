<?php
# SYNOPSIS: Test for Area Module
# 
# Area_test.php
#
# Author: Marcus Medina
# Date: Sun 05 Dec 2021 04:24:28 PM PST
# Last Update: 2022-02-15: 08:29
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
$test = new TestSuite();

function test_Area($test, $class){
    $pass = 0;
    $fail = 0;
	#{{{
	if ( $class->function_list[$class->function_strings[1]](234) != array(94.6998, "Hectares")){
		$test->set_fail($class->function_strings[1]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[1]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[2]](234) !== array(578.214, "Acres")){
		$test->set_fail($class->function_strings[2]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[2]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[3]](234) !== array(1.624999896, "Square Feet")){
		$test->set_fail($class->function_strings[3]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[3]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[4]](234) !== array(25.99999974, "Square Yards")){
		$test->set_fail($class->function_strings[4]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[4]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[5]](234) !== array(0.85950423, "Square Rod")){
		$test->set_fail($class->function_strings[5]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[5]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[6]](234) !== array(234*0.00625, "Acres")){
		$test->set_fail($class->function_strings[6]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[6]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[7]](234) !== array(234*0.0015625, "Square Mile")){
		$test->set_fail($class->function_strings[7]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[7]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[8]](234) !== array(234*3.5870064e-08, "Square Mile")){
		$test->set_fail($class->function_strings[8]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[8]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[9]](234) !== array(234*2.2956841e-05, "Acre")){
		$test->set_fail($class->function_strings[9]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[9]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[10]](234) !== array(234*0.000645161, "Inch<sup>2</sup>")){
		$test->set_fail($class->function_strings[10]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[10]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[11]](234) !== array(234*0.008361204, "Yards<sup>2</sup>")){
		$test->set_fail($class->function_strings[11]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[11]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[12]](234) !== array(234*0.004046863, "Acre")){
		$test->set_fail($class->function_strings[12]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[12]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[13]](234) !== array(234*0.015941336, "Inches<sup>2</sup>")){
		$test->set_fail($class->function_strings[13]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[13]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[14]](234) !== array(234*0.002417052, "Centimeter<sup>2</sup>")){
		$test->set_fail($class->function_strings[14]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[14]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[15]](234) !== array(0.3744, "Link<sup>2</sup>")){
		$test->set_fail($class->function_strings[15]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[15]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[16]](234) !== array(234*0.033057851, "Yards<sup>2</sup>")){
		$test->set_fail($class->function_strings[16]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[16]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[17]](234) !== array(234*0.029536631, "Meters<sup>2</sup>")){
		$test->set_fail($class->function_strings[17]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[17]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[18]](234) !== array(14.625, "Poles<sup>2</sup>")){
		$test->set_fail($class->function_strings[18]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[18]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[19]](234) !== array(234*.002066116, "Yard<sup>2</sup>")){
		$test->set_fail($class->function_strings[19]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[19]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[20]](234) !== array(234*0.002471052, "Meter<sup>2</sup>")){
		$test->set_fail($class->function_strings[20]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[20]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[21]](234) !== array(2.34, "Chains<sup>2</sup>")){
		$test->set_fail($class->function_strings[21]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[21]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[22]](234) !== array(234*0.000206612, "Yard<sup>2</sup>")){
		$test->set_fail($class->function_strings[22]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[22]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[23]](234) !== array(234*0.0002471052, "Meter<sup>2</sup>")){
		$test->set_fail($class->function_strings[23]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[23]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[24]](234) !== array(234*0.0015625, "Acre")){
		$test->set_fail($class->function_strings[24]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[24]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[25]](234) !== array(234*0.0015625, "Mile<sup>2</sup>")){
		$test->set_fail($class->function_strings[25]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[25]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[26]](234) !== array(234, "Kilometers<sup>2</sup>")){
		$test->set_fail($class->function_strings[26]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[26]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[27]](234) !== array(234*0.027777778, "Sections")){
		$test->set_fail($class->function_strings[27]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[27]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[28]](234) !== array(234*0.027777778, "Miles<sup>2</sup>")){
		$test->set_fail($class->function_strings[28]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[28]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[29]](234) !== array(234*0.010725011, "Kilometers<sup>2</sup>")){
		$test->set_fail($class->function_strings[29]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[29]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[30]](234) !== array(234*0.00064516, "Centiare")){
		$test->set_fail($class->function_strings[30]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[30]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[31]](234) !== array(234*0.0083612736, "Ares")){
		$test->set_fail($class->function_strings[31]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[31]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[32]](234) !== array(234*0.0040468554, "Kilometer<sup>2</sup>")){
		$test->set_fail($class->function_strings[32]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[32]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[33]](234) !== array(234*0.38610216, "Miles<sup>2</sup>")){
		$test->set_fail($class->function_strings[33]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[33]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[34]](234) !== array(234*0.15500031, "Inches<sup>2</sup>")){
		$test->set_fail($class->function_strings[34]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[34]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[35]](234) !== array(234*0.015942251, "Links<sup>2</sup>")){
		$test->set_fail($class->function_strings[35]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[35]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[36]](234) !== array(234*1.19599, "Yards<sup>2</sup>")){
		$test->set_fail($class->function_strings[36]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[36]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[37]](234) !== array(234*20.661157, "Links<sup>2</sup>")){
		$test->set_fail($class->function_strings[37]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[37]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[38]](234) !== array(234*0.0016000056, "Pole<sup>2</sup>")){
		$test->set_fail($class->function_strings[38]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[38]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[39]](234) !== array(234*0.033057966, "Poles<sup>2</sup>")){
		$test->set_fail($class->function_strings[39]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[39]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[40]](234) !== array(234*0.062499783, "Chains<sup>2</sup>")){
		$test->set_fail($class->function_strings[40]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[40]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[41]](234) !== array(234*0.1, "Acres")){
		$test->set_fail($class->function_strings[41]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[41]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[42]](234) !== array(234*0.0015625, "Section")){
		$test->set_fail($class->function_strings[42]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[42]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[43]](234) !== array(234*0.027777778, "Townships")){
		$test->set_fail($class->function_strings[43]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[43]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[44]](234) !== array(10193040, "Feet<sup>2</sup>")){
		$test->set_fail($class->function_strings[44]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[44]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[45]](234) !== array(23400, "Centiares")){
		$test->set_fail($class->function_strings[45]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[45]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[46]](234) !== array(2.34, "Ares")){
		$test->set_fail($class->function_strings[46]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[46]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[47]](234) !== array(23400, "Ares")){
		$test->set_fail($class->function_strings[47]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[47]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[48]](234) !== array(234*40.468564, "Ares")){
		$test->set_fail($class->function_strings[48]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[48]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[49]](234) !== array(2.34, "Hectares")){
		$test->set_fail($class->function_strings[49]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[49]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[50]](234) !== array(23400, "Hectares")){
		$test->set_fail($class->function_strings[50]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[50]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[51]](234) !== array(234*2.5899881, "Kilometers<sup>2</sup>")){
		$test->set_fail($class->function_strings[51]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[51]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[52]](234) !== array(2.34, "Kilometers<sup>2</sup>")){
		$test->set_fail($class->function_strings[52]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[52]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[53]](234) !== array(234*0.0024710538, "Link<sup>2</sup>")){
		$test->set_fail($class->function_strings[53]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[53]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[54]](234) !== array(234*0.039536999, "Poles<sup>2</sup>")){
		$test->set_fail($class->function_strings[54]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[54]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[55]](234) !== array(234*0.0024710538, "Chain<sup>2</sup>")){
		$test->set_fail($class->function_strings[55]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[55]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[56]](234) !== array(234*0.0020661157, "Chain<sup>2</sup>")){
		$test->set_fail($class->function_strings[56]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[56]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[57]](234) !== array(234*0.00024710538, "Acre")){
		$test->set_fail($class->function_strings[57]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[57]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[58]](234) !== array(234*0.00020661157, "Acre")){
		$test->set_fail($class->function_strings[58]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[58]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[59]](234) !== array(234*0.38610216, "Sections")){
		$test->set_fail($class->function_strings[59]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[59]);
        $pass++;
	}
	if ( $class->function_list[$class->function_strings[60]](234) !== array(234, "Sections")){
		$test->set_fail($class->function_strings[60]);
        $fail++;
	} else {
		$test->set_pass($class->function_strings[60]);
        $pass++;
	}
    
	echo "\nTested: ".count($class->function_list);
	echo "\nPassed: ".$pass;
	echo "\nFailed: ".$fail;
	#}}}
}

echo "Preparing Area
---------------------------\n";
$test->pass_fail($area, test_Area($test, $area));
