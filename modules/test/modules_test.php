<?php
# SYNOPSIS: Main Test Harness for Modules
# 
# module_tests.php
#
# Author: Marcus Medina
# Date: Tue 12 Oct 2021 09:31:45 PM PDT
# Last Update: 2021-12-16: 22:57
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
	echo "\nAccleration
----------------------------\n";
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

function test_Accounting(){
	#{{{
	global $account;
	echo "\nAccounting
-----------------------\n";
	if ( $account->function_list[$account->function_strings[1]](234, 234) !== array("1%", "Equity")){
		set_fail($account->function_strings[1]);
	} else {
		set_pass($account->function_strings[1]);
	}
	if ( $account->function_list[$account->function_strings[2]](234, 234) !== array("1%", "Trend Percentage") ){
		set_fail($account->function_strings[2]);
	} else {
		set_pass($account->function_strings[2]);
	}
	if ( $account->function_list[$account->function_strings[3]](234, 234) !== array("1%", "Current Ratio") ){
		set_fail($account->function_strings[3]);
	} else {
		set_pass($account->function_strings[3]);
	}
	if ( $account->function_list[$account->function_strings[4]](234, 234) !== array("1%", "Gross Margin Percentage") ){
		set_fail($account->function_strings[4]);
	} else {
		set_pass($account->function_strings[4]);
	}
	if ( $account->function_list[$account->function_strings[5]](234, 234) !== array("1 : 1", "Gross Margin Ratio") ){
		set_fail($account->function_strings[5]);
	} else {
		set_pass($account->function_strings[5]);
	}
	if ( $account->function_list[$account->function_strings[6]](234, 234) !== array("1 : 1", "Turn-Over Ratio") ){
		set_fail($account->function_strings[6]);
	} else {
		set_pass($account->function_strings[6]);
	}
	if ( $account->function_list[$account->function_strings[7]](234, 234, 234, 234, 234) !== array("4 : 1", "Quick Ratio")){
		set_fail($account->function_strings[7]);
	} else {
		set_pass($account->function_strings[7]);
	}
	if ( $account->function_list[$account->function_strings[8]](234, 234) !== array(1.0, "Accounts Receivable Turn-Over") ){
		set_fail($account->function_strings[8]);
	} else {
		set_pass($account->function_strings[8]);
	}
	if ( $account->function_list[$account->function_strings[9]](234, 234) !== array(365.0, "Days")){
		set_fail($account->function_strings[9]);
	} else {
		set_pass($account->function_strings[9]);
	}
	if ( $account->function_list[$account->function_strings[10]](234, 234) !== array(1.0, "Rate of Return")){
		set_fail($account->function_strings[10]);
	} else {
		set_pass($account->function_strings[10]);
	}
	if ( $account->function_list[$account->function_strings[11]](234, 234) !== array("$1.00", "Total Assets Turn-Over")){
		set_fail($account->function_strings[11]);
	} else {
		set_pass($account->function_strings[11]);
	}
	if ( $account->function_list[$account->function_strings[12]](234, 234) !== array("$1.00", "Earnings Per Share")){
		set_fail($account->function_strings[12]);
	} else {
		set_pass($account->function_strings[12]);
	}
	if ( $account->function_list[$account->function_strings[13]](234, 234) !== array('$1.00', "Dividend Yield")){
		set_fail($account->function_strings[13]);
	} else {
		set_pass($account->function_strings[13]);
	}
	if ( $account->function_list[$account->function_strings[14]](234, 234) !== array("1 : 1", "Payout Ratio")){
		set_fail($account->function_strings[14]);
	} else {
		set_pass($account->function_strings[14]);
	}
	if ( $account->function_list[$account->function_strings[15]](234, 234, 234, 234) !== array("-1 : 1", "Quick Ratio")){
		set_fail($account->function_strings[15]);
	} else {
		set_pass($account->function_strings[15]);
	}
	if ( $account->function_list[$account->function_strings[16]](234, 234) !== array("0%", "Gross Margin")){
		set_fail($account->function_strings[16]);
	} else {
		set_pass($account->function_strings[16]);
	}
	if ( $account->function_list[$account->function_strings[17]](234, 234) !== array("$100.00", "Company Valuation")){
		set_fail($account->function_strings[17]);
	} else {
		set_pass($account->function_strings[17]);
	}
	if ( $account->function_list[$account->function_strings[18]](234, 234) !== array("1%", "Equity")){
		set_fail($account->function_strings[18]);
	} else {
		set_pass($account->function_strings[18]);
	}
	#}}}
}

function test_Astro(){
	#{{{
	global $astro;
	echo "\nAstronomic Units
-------------------------------\n";
	if ( $astro->function_list[$astro->function_strings[1]](234) !== array(504, "Kelvin")){
		set_fail($astro->function_strings[1]);
	} else {
		set_pass($astro->function_strings[1]);
	}
	if ( $astro->function_list[$astro->function_strings[2]](234) !== array(((234 - 32) * 5/9) + 270, "Kelvin")){
		set_fail($astro->function_strings[2]);
	} else {
		set_pass($astro->function_strings[2]);
	}
	if ( $astro->function_list[$astro->function_strings[3]](234) !== array(234 * 63239.726, "Astronomic Units")){
		set_fail($astro->function_strings[3]);
	} else {
		set_pass($astro->function_strings[3]);
	}
	if ( $astro->function_list[$astro->function_strings[4]](234) !== array(234*0.000015812845, "Light Year")){
		set_fail($astro->function_strings[4]);
	} else {
		set_pass($astro->function_strings[4]);
	}
	if ( $astro->function_list[$astro->function_strings[5]](234) !== array(234*0.30659485, "Parsecs")){
		set_fail($astro->function_strings[5]);
	} else {
		set_pass($astro->function_strings[5]);
	}
	if ( $astro->function_list[$astro->function_strings[6]](234) !== array(234*3.2616334, "Light Years")){
		set_fail($astro->function_strings[6]);
	} else {
		set_pass($astro->function_strings[6]);
	}
	if ( $astro->function_list[$astro->function_strings[7]](234) !== array(421.2, "Rankine")){
		set_fail($astro->function_strings[7]);
	} else {
		set_pass($astro->function_strings[7]);
	}
	if ( $astro->function_list[$astro->function_strings[8]](234) !== array(234*0.55555556, "Celsius")){
		set_fail($astro->function_strings[8]);
	} else {
		set_pass($astro->function_strings[8]);
	}
	if ( $astro->function_list[$astro->function_strings[9]](234) !== array(234*0.55555556, "Kelvin")){
		set_fail($astro->function_strings[9]);
	} else {
		set_pass($astro->function_strings[9]);
	}
	if ( $astro->function_list[$astro->function_strings[10]](234) !== array(421.2, "Rankine")){
		set_fail($astro->function_strings[10]);
	} else {
		set_pass($astro->function_strings[10]);
	}
	#}}}	
}

function test_Budget(){
	#{{{
	global $budget;
	echo "\nBudgeting
---------------------------\n";
	if ( $budget->function_list[$budget->function_strings[1]](234, 234, 234, 234, 234, 234, 234, 234, 234, 234, 234, 234, 234, 234) !== array("<span class='income'>Income $54756.00</span><br><br><span class='expenses'>Expenses $2808.00</span><br><br><span class='income'>$51948.00 after Expenses Paid</span>", "")){
		set_fail($budget->function_strings[1]);
	} else {
		set_pass($budget->function_strings[1]);
	}
	#}}}
}

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

function test_Imp_to_Met(){
	global $impm;
	echo "\nImperial to Metric
----------------------------------\n";
	$list = new ArrayObject($impm->function_list);
	$test = $list->offsetGet($impm->function_strings[1]);
	$inputs = strval(count($impm->functionInputs[$impm->function_strings[1]]));
	echo "\nInputs: $inputs\n";
	$test = var_dump($test(234));
	echo $test;
}

pass_fail($accel, test_Acceleration());
pass_fail($area, test_Area());
pass_fail($account, test_Accounting());
pass_fail($astro, test_Astro());
pass_fail($budget, test_Budget());
pass_fail($cook, test_Culinary());
pass_fail($energy, test_Energy());
pass_fail($imp, test_Imp_to_Imp());
pass_fail($impm, test_Imp_to_Met());

