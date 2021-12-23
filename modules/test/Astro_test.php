<?php
# SYNOPSIS: Test for Astronomic_Units module
# 
# Astro_test.php
#
# Author: Marcus Medina
# Date: Sun 05 Dec 2021 03:45:39 PM PST
# Last Update: 2021-12-23: 09:36
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

function test_Astro(){
	#{{{
	global $astro;
	global $test;
	echo "\nAstronomic Units
-------------------------------\n";
	if ( $astro->function_list[$astro->function_strings[1]](234) !== array(504, "Kelvin")){
		$test->set_fail($astro->function_strings[1]);
	} else {
		$test->set_pass($astro->function_strings[1]);
	}
	if ( $astro->function_list[$astro->function_strings[2]](234) !== array(((234 - 32) * 5/9) + 270, "Kelvin")){
		$test->set_fail($astro->function_strings[2]);
	} else {
		$test->set_pass($astro->function_strings[2]);
	}
	if ( $astro->function_list[$astro->function_strings[3]](234) !== array(234 * 63239.726, "Astronomic Units")){
		$test->set_fail($astro->function_strings[3]);
	} else {
		$test->set_pass($astro->function_strings[3]);
	}
	if ( $astro->function_list[$astro->function_strings[4]](234) !== array(234*0.000015812845, "Light Year")){
		$test->set_fail($astro->function_strings[4]);
	} else {
		$test->set_pass($astro->function_strings[4]);
	}
	if ( $astro->function_list[$astro->function_strings[5]](234) !== array(234*0.30659485, "Parsecs")){
		$test->set_fail($astro->function_strings[5]);
	} else {
		$test->set_pass($astro->function_strings[5]);
	}
	if ( $astro->function_list[$astro->function_strings[6]](234) !== array(234*3.2616334, "Light Years")){
		$test->set_fail($astro->function_strings[6]);
	} else {
		$test->set_pass($astro->function_strings[6]);
	}
	if ( $astro->function_list[$astro->function_strings[7]](234) !== array(421.2, "Rankine")){
		$test->set_fail($astro->function_strings[7]);
	} else {
		$test->set_pass($astro->function_strings[7]);
	}
	if ( $astro->function_list[$astro->function_strings[8]](234) !== array(234*0.55555556, "Celsius")){
		$test->set_fail($astro->function_strings[8]);
	} else {
		$test->set_pass($astro->function_strings[8]);
	}
	if ( $astro->function_list[$astro->function_strings[9]](234) !== array(234*0.55555556, "Kelvin")){
		$test->set_fail($astro->function_strings[9]);
	} else {
		$test->set_pass($astro->function_strings[9]);
	}
	if ( $astro->function_list[$astro->function_strings[10]](234) !== array(421.2, "Rankine")){
		$test->set_fail($astro->function_strings[10]);
	} else {
		$test->set_pass($astro->function_strings[10]);
	}
	#}}}	
}

echo "Preparing Astronomic Units...";
sleep(1);
pass_fail($astro, test_Astro());
