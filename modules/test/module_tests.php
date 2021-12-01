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

#require_once("pass_fail.php");
require_once("imports.inc.php");

function test_Acceleration(){
	global $accel;
	if (assert($accel->function_list[$accel->function_strings[1]](234), "7.13 Meters/Sec<sup>2</sup>")){
		echo "Passed";
	} else {
		echo "Failed";
	}
		;
	exit();
		if($outscreen !== "5.94 Meters/Sec<sup>2</sup>"){
			print "$key: Fail\n";
		} else {
			print "$key: Pass\n";
		}
		
		if ( $outscreen !== "767.75 Feet/Sec<sup>2</sup>" ) {
			print "$key: Fail\n";
		} else {
			print "$key: Pass\n";
		}
		
		if ( $outscreen !== "9212.58 Inches/Sec<sup>2</sup>" ) {
			print "$key: Fail\n";
		} else{
			print "$key: Pass\n";
		}
		
	}
	
}
function test_Accounting(){
	global $account;
	$iterator = new ArrayObject($account->function_list);
	foreach( $iterator as $key => $value )
	{
		$formula = $iterator->offsetGet($key);
		if ( count($account->functionInputs[$key]) === 2 ) {
			$formula = $formula(234, 234);
			$outscreen = "{$formula[0]} {$formula[1]}";
			if ( $key === "The Equity Ratio" ) {
				print assert($outscreen, "1% Equity");
			}
			
		} elseif ( count($account->functionInputs[$key]) === 3 ) {
			$formula = $formula(234, 234, 234);
			$outscreen = "{$formula[0]} {$formula[1]}";
			if ( $key === "Trend Percentage" ) {
				print assert($outscren, "1% Trend Percentage");
			}
		} elseif ( count($account->functionInputs[$key]) === 4 ){
			$formula = $formula(234, 234, 234, 234);
			$outscreen = "{$formula[0]} {$formula[1]}";
			if ( $key ){
				print assert($outscreen, "");
			}
			
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
test_Acceleration();
#pass_fail(test_Accounting(), $account);
