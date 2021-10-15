<?php
# SYNOPSIS: Main Test Harness for Modules
# 
# module_tests.php
#
# Author: Marcus Medina
# Date: Tue 12 Oct 2021 09:31:45 PM PDT
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
require_once("../../imports.inc.php");

function test_Acceleration(){
	global $accel;
	$pass = array();
	$iterator = new ArrayObject($accel->function_list);
	foreach( $iterator as $key => $value )
	{
		$formula = $iterator->offsetGet($key);
		$formula = $formula(234);
		$outscreen = "{$formula[0]} {$formula[1]}";
		if (!$outscreen ===  "7.13 Meters/Sec<sup>2</sup>"){
			print "Feet/Sec Squared to Meters/Sec Squared: Fail\n";
		}
		if(!$outscreen === "5.94 Meters/Sec<sup>2</sup>"){
			print "Inches/Sec Squared to Meters/Sec Squared: Fail\n";
		}
		if ( !$outscreen === "767.75 Feet/Sec<sup>2</sup>" ) {
			print "Meters/Sec Squared to Feet/Sec Squared: Fail\n";
		}
		if ( !$outscreen === "9212.58 Inches/Sec<sup>2</sup>" ) {
			print "Meters/Sec Squared to Inches/Sec Squared: Fail\n";
		}
	}
}
function test_Accounting(){
	global $account;
	$iterator = new ArrayObject($account->function_list);
	foreach( $iterator as $key => $value )
	{
		$formula = $iterator->offsetGet($key);
		$formula = $formula(234, 234);
		$outscreen = "{$formula[0]} {$formula[1]}";
		if ( !$outscreen === "1% Equity" ) {
			print "The Equity Ratio: Fail\n";
		}
		/*
		$formula = $formula(234, 234);
		$outscreen = "{$formula[0]} {$formula[1]}";
		if ( !$outscreen === "" ){
			print "Trend Percentage: Fail\n";
		}
		$formula = $formula(234, 234);
		$outscreen = "{$formula[0]} {$formula[1]}";
		if ( !$outscreen === "" ){
			print "Current Ratio: Fail\n";
		}
		$formula = $formula(234, 234);
		$outscreen = "{$formula[0]} {$formula[1]}";
		if ( !$outscreen === "" ){
		}
		 */
	}
}
pass_fail(test_Acceleration(), $accel);
print "\n";
pass_fail(test_Accounting(), $account);
