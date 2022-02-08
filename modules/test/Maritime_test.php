<?php
# SYNOPSIS: Test for Maritime Module
# 
# Maritime_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:44:45 PM PST
# Last Update: 2022-02-08: 10:40
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

function Maritime_test($test, $class){
	if ( $class->function_list[$class->function_strings[1]](234) !== array(234*6, "Feet")){
		$test->set_fail($class->function_strings[1]);
	} else {
		$test->set_pass($class->function_strings[1]);
	}
	if ( $class->function_list[$class->function_strings[2]](234) !== array(234*101.26859, "Fathoms")){
		$test->set_fail($class->function_strings[2]);
	} else {
		$test->set_pass($class->function_strings[2]);
	}
	if ( $class->function_list[$class->function_strings[3]](234) !== array(234*6076.1155, "Feet")){
		$test->set_fail($class->function_strings[3]);
	} else {
		$test->set_pass($class->function_strings[3]);
	}
	if ( $class->function_list[$class->function_strings[4]](234) !== array(234*1.8288, "Meters")){
		$test->set_fail($class->function_strings[4]);
	} else {
		$test->set_pass($class->function_strings[4]);
	}
	if ( $class->function_list[$class->function_strings[5]](234) !== array(234*10, "Cables")){
		$test->set_fail($class->function_strings[5]);
	} else {
		$test->set_pass($class->function_strings[5]);
	}
	if ( $class->function_list[$class->function_strings[6]](234) !== array(234*1852, "Meters")){
		$test->set_fail($class->function_strings[6]);
	} else {
		$test->set_pass($class->function_strings[6]);
	}
	if ( $class->function_list[$class->function_strings[7]](234) !== array(234*1.1507794, "Statute Miles")){
		$test->set_fail($class->function_strings[7]);
	} else {
		$test->set_pass($class->function_strings[7]);
	}
	if ( $class->function_list[$class->function_strings[8]](234) !== array(234*1, "Nautical Miles/Hr")){
		$test->set_fail($class->function_strings[8]);
	} else {
		$test->set_pass($class->function_strings[8]);
	}
	if ( $class->function_list[$class->function_strings[9]](234) !== array(234*0.54680665, "Fathoms")){
		$test->set_fail($class->function_strings[9]);
	} else {
		$test->set_pass($class->function_strings[9]);
	}
	if ( $class->function_list[$class->function_strings[10]](234) !== array(234*1.852, "Kilometers")){
		$test->set_fail($class->function_strings[10]);
	} else {
		$test->set_pass($class->function_strings[10]);
	}
	if ( $class->function_list[$class->function_strings[11]](234) !== array(234*0.5399568, "Nautical Miles")){
		$test->set_fail($class->function_strings[11]);
	} else {
		$test->set_pass($class->function_strings[11]);
	}
	if ( $class->function_list[$class->function_strings[12]](234) !== array(234*0.86897624, "Nautical Miles")){
		$test->set_fail($class->function_strings[12]);
	} else {
		$test->set_pass($class->function_strings[12]);
	}
	if ( $class->function_list[$class->function_strings[13]](234) !== array(234*1.852, "Kilometers/Hr")){
		$test->set_fail($class->function_strings[13]);
	} else {
		$test->set_pass($class->function_strings[13]);
	}
	if ( $class->function_list[$class->function_strings[14]](234) !== array(234*0.5399568, "Knots")){
		$test->set_fail($class->function_strings[14]);
	} else {
		$test->set_pass($class->function_strings[14]);
	}
	if ( $class->function_list[$class->function_strings[15]](234) !== array(234*1.1507794, "Miles/Hr")){
		$test->set_fail($class->function_strings[15]);
	} else {
		$test->set_pass($class->function_strings[15]);
	}
	if ( $class->function_list[$class->function_strings[16]](234) !== array(234*0.86897624, "Knots")){
		$test->set_fail($class->function_strings[16]);
	} else {
		$test->set_pass($class->function_strings[16]);
	}
}

echo "Praparing Maritime...
---------------------------------\n";
sleep(1);
$test->pass_fail($maritime, Maritime_test($test, $maritime));
