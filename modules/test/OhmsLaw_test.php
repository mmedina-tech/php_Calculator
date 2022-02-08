<?php
# SYNOPSIS: Test for OhmsLaw Module
# 
# OhmsLaw_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:46:25 PM PST
# Last Update: 2021-12-25: 16:01
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

require_once( 'pass_fail.php' );
require_once( 'imports.inc.php' );

$test = new TestSuite();

function Ohms_test($test, $class){
	if ( $class->function_list[$class->function_strings[1]](234, 234) !== array($class->prec(234*234, 4), "Volts")){
		$test->set_fail($class->function_strings[1]);
	} else {
		$test->set_pass($class->function_strings[1]);
	}
	if ( $class->function_list[$class->function_strings[2]](234, 234) !== array($class->prec(234/234, 4), "Volt")){
		$test->set_fail($class->function_strings[2]);
	} else {
		$test->set_pass($class->function_strings[2]);
	}
	if ( $class->function_list[$class->function_strings[3]](234, 234) !== array($class->prec(sqrt(234*234), 4), "Volts")){
		$test->set_fail($class->function_strings[3]);
	} else {
		$test->set_pass($class->function_strings[3]);
	}
	if ( $class->function_list[$class->function_strings[4]](234, 234) !== array($class->prec(234/234, 4), "Amp")){
		$test->set_fail($class->function_strings[4]);
	} else {
		$test->set_pass($class->function_strings[4]);
	}
	if ( $class->function_list[$class->function_strings[5]](234, 234) !== array($class->prec(sqrt(234/234), 4), "Amp")){
		$test->set_fail($class->function_strings[5]);
	} else {
		$test->set_pass($class->function_strings[5]);
	}
	if ( $class->function_list[$class->function_strings[6]](234, 234) !== array($class->prec(sqrt(234/234), 4), "Amp")){
		$test->set_fail($class->function_strings[6]);
	} else {
		$test->set_pass($class->function_strings[6]);
	}
	if ( $class->function_list[$class->function_strings[7]](234, 234) !== array($class->prec(234/234, 4), "Resistance")){
		$test->set_fail($class->function_strings[7]);
	} else {
		$test->set_pass($class->function_strings[7]);
	}
	if ( $class->function_list[$class->function_strings[8]](234, 234) !== array($class->prec(sqrt(234/pow(234, 2)), 4), "Resistance")){
		$test->set_fail($class->function_strings[8]);
	} else {
		$test->set_pass($class->function_strings[8]);
	}
	if ( $class->function_list[$class->function_strings[9]](234, 234) !== array($class->prec(pow(234, 2)/234, 4), "Resistance")){
		$test->set_fail($class->function_strings[9]);
	} else {
		$test->set_pass($class->function_strings[9]);
	}
	if ( $class->function_list[$class->function_strings[10]](234, 234) !== array($class->prec(234*234, 4), "Watts")){
		$test->set_fail($class->function_strings[10]);
	} else {
		$test->set_pass($class->function_strings[10]);
	}
	if ( $class->function_list[$class->function_strings[11]](234, 234) !== array($class->prec(234*pow(234, 2), 4), "Watts")){
		$test->set_fail($class->function_strings[11]);
	} else {
		$test->set_pass($class->function_strings[11]);
	}
	if ( $class->function_list[$class->function_strings[12]](234, 234) !== array($class->prec(pow(234, 2)/234, 4), "Watts")){
		$test->set_fail($class->function_strings[12]);
	} else {
		$test->set_pass($class->function_strings[12]);
	}
}

echo "Preparing Ohms Laww Test
-----------------------------------\n";
$test->pass_fail($ohms, Ohms_test($test, $ohms));
