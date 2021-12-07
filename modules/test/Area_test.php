<?php
# SYNOPSIS: Test for Area Module
# 
# Area_test.php
#
# Author: Marcus Medina
# Date: Sun 05 Dec 2021 04:24:28 PM PST
# Last Update: 2021-12-06: 11:42
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
	global $area;
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
	if ( $area->function_list[$area->function_strings[6]](234.1) !== array(1.463125, "Acres")){
		set_fail($area->function_strings[6]);
	} else {
		set_pass($area->function_strings[6]);
	}
	if ( $area->function_list[$area->function_strings[7]](234.1) !== array(0.36578125, "Square Mile")){
		set_fail($area->function_strings[7]);
	} else {
		set_pass($area->function_strings[7]);
	}
	$number = 8.393594976E-6;
	if ( $area->function_list[$area->function_strings[8]](234) !== array("", "Square Mile")){
		set_fail($area->function_strings[8]);
	} else {
		set_pass($area->function_strings[8]);
	}
	$list = new ArrayObject($area->function_list);
	$test = $list->offsetGet($area->function_strings[8]);
	$inputs = strval(count($area->functionInputs[$area->function_strings[8]]));
	$title = strval($area->function_strings[8]);
	echo "\nTitle: $title\n";
	echo "Inputs: $inputs\n";
	$test = var_dump($test(234));
	echo $test;

}

pass_fail($area, test_Area());
