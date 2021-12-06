<?php
# SYNOPSIS: Test for Astronomic_Units module
# 
# Astro_test.php
#
# Author: Marcus Medina
# Date: Sun 05 Dec 2021 03:45:39 PM PST
# Last Update: 2021-12-05: 16:24
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

function test_Astro(){
	global $astro;
	$list = new ArrayObject($astro->function_list);
	$test = $list->offsetGet($astro->function_strings[2]);
	$inputs = strval(count($astro->functionInputs[$astro->function_strings[2]]));
	echo "Inputs: $inputs\n";
	$test = var_dump($test(234));
	echo $test;
	if ( $astro->function_list[$astro->function_strings[1]](234) !== array(504, "Kelvin")){
		set_fail($astro->function_strings[1]);
	} else {
		set_pass($astro->function_strings[1]);
	}
	if ( $astro->function_list[$astro->function_strings[2]](234) !== array(382.22222222222, "Kelvin")){
		set_fail($astro->function_strings[2]);
	} else {
		set_pass($astro->function_strings[2]);
	}
	
}
pass_fail($astro, test_Astro());
