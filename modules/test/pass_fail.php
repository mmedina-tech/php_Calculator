<?php
# SYNOPSIS: Pass Fail test harness
#
# pass_fail.php
#
# Author: Marcus Medina
# Date: Tue 12 Oct 2021 08:53:57 PM PDT
# Last Update: 2022-02-23: 15:27
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

class TestSuite{
	function __construct(){
	}
	function set_pass($funct){
		echo "Pass : ".strval($funct)."\n";
	}
	function set_fail($funct){
		echo "Fail : ".strval($funct)."\n";
	}
	function pass_fail($main, $funct){
		$fail_list = array();
		$single_input = array();
		$two_input = array();
		$three_input = array();
		$four_input = array();
		$five_input = array();
		$fourteen_input = array();

		if ( $funct === null ) {
			echo "\nPass : ".get_class($main)."\n";
		} else {
			echo "Fail : ".get_class($main)."\n";
		}

		foreach( $main->function_list as $key => $value ) {
			if ( count($main->functionInputs[$key]) === 1 and $main->formula_list[$key] ) {
				$single_input[] = $key;
			} elseif ( count($main->functionInputs[$key]) === 2 and $main->formula_list[$key] ) {
				$two_input[] = $key;
			} elseif ( count($main->functionInputs[$key]) === 3 and $main->formula_list[$key] ) {
				$three_input[] = $key;
			} elseif ( count($main->functionInputs[$key]) === 4 and $main->formula_list[$key] ) {
				$four_input[] = $key;
			} elseif ( count($main->functionInputs[$key]) === 5 and $main->formula_list[$key] ) {
				$five_input[] = $key;
			} elseif ( count($main->functionInputs[$key]) === 14 and $main->formula_list[$key] ) {
				$fourteen_input[] = $key;
			} else {
				$fail_list[] = $key;
			}
			if (count($fail_list) !== 0){
				echo "\nFail (".strval(count($fail_list))."): \n";
				echo $key."
			Inputs: ".strval(count($main->functionInputs[$key]))."
			Show Formula: ".strval($main->formula_list[$key])."\n";
			}
		}
		print "Pass : All Formula Inputs\nPass : Show Formula\n";
	}
}



