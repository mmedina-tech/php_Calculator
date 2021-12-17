<?php
# SYNOPSIS: Test for GED_Practice Module
# 
# GED_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:42:34 PM PST
# Last Update: 2021-12-17: 13:05
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

function test_GED(){
	#{{{
	global $ged;
	echo "\nGED Practice
--------------------------------\n";
	if ( $ged->function_list[$ged->function_strings[1]](234, 234) !== array(27378.0, "Triangle Area")){
		set_fail($ged->function_strings[1]);
	} else {
		set_pass($ged->function_strings[1]);
	}
	if ( $ged->function_list[$ged->function_strings[2]](234) !== array(733, "Circle Area")){
		set_fail($ged->function_strings[2]);
	} else {
		set_pass($ged->function_strings[2]);
	}
	if ( $ged->function_list[$ged->function_strings[3]](234, 234) !== array(54756, "Rectangle Area")){
		set_fail($ged->function_strings[3]);
	} else {
		set_pass($ged->function_strings[3]);
	}
	if ( $ged->function_list[$ged->function_strings[4]](234, 234) !== array(54756, "Parallelogram Area")){
		set_fail($ged->function_strings[4]);
	} else {
		set_pass($ged->function_strings[4]);
	}
	if ( $ged->function_list[$ged->function_strings[5]](234, 234, 234) !== array(54756.0, "Trapezoid Area")){
		set_fail($ged->function_strings[5]);
	} else {
		set_pass($ged->function_strings[5]);
	}
	if ( $ged->function_list[$ged->function_strings[6]](234, 234, 234) !== array(55224, "Surface Area")){
		set_fail($ged->function_strings[6]);
	} else {
		set_pass($ged->function_strings[6]);
	}
	if ( $ged->function_list[$ged->function_strings[7]](234, 234) !== array(54756, "Rectangle/Right Prism Volumes")){
		set_fail($ged->function_strings[7]);
	} else {
		set_pass($ged->function_strings[7]);
	}
	if ( $ged->function_list[$ged->function_strings[8]](234, 234) !== array((2*pi()*234*234)+(2*pi()*234^2), "Cylinder Surface Area")){
		set_fail($ged->function_strings[8]);
	} else {
		set_pass($ged->function_strings[8]);
	}
	if ( $ged->function_list[$ged->function_strings[9]](234, 234) !== array(779, "Cylinder Volume")){
		set_fail($ged->function_strings[9]);
	} else {
		set_pass($ged->function_strings[9]);
	}
	if ( $ged->function_list[$ged->function_strings[10]](234, 234, 234) !== array(27612.0, "Pyramid Surface Area")){
		set_fail($ged->function_strings[10]);
	} else {
		set_pass($ged->function_strings[10]);
	}
	if ( $ged->function_list[$ged->function_strings[11]](234, 234) !== array(0.333333333333*234*234, "Pyramid Volume")){
		set_fail($ged->function_strings[11]);
	} else {
		set_pass($ged->function_strings[11]);
	}
	if ( $ged->function_list[$ged->function_strings[12]](234, 234) !== array((pi()*234*234)+(pi()*234), "Cone Surface Area")){
		set_fail($ged->function_strings[12]);
	} else {
		set_pass($ged->function_strings[12]);
	}
	if ( $ged->function_list[$ged->function_strings[13]](234, 234) !== array(409, "Cone Volume")){
		set_fail($ged->function_strings[13]);
	} else {
		set_pass($ged->function_strings[13]);
	}
	if ( $ged->function_list[$ged->function_strings[14]](234) !== array(4*pi()*234, "Sphere Surface Area")){
		set_fail($ged->function_strings[14]);
	} else {
		set_pass($ged->function_strings[14]);
	}
	if ( $ged->function_list[$ged->function_strings[15]](234) !== array(1.333333333333*pi()*234, "Sphere Volume")){
		set_fail($ged->function_strings[15]);
	} else {
		set_pass($ged->function_strings[15]);
	}
	#}}}
}

echo "Preparing GED Practice...";
sleep(1);
pass_fail($ged, test_GED());
