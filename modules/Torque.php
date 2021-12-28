<?php
# SYNOPSIS: Formulas for Calculating Torque
# 
# Torque.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 09:00:03 PM PDT
# Last Update: 2021-12-27: 16:31
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

require_once ("FormulaBase.php");

class Torque extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array(
			1 => 'Gram-Centimeters to Ounce-Inches',
			2 => 'Newton-Meters to Pound-Feet',
			3 => 'Newton-Meters to Pound-Inches',
			4 => 'Ounce-Inches to Gram-Centimeters',
			5 => 'Pound-Feet to Newton-Meters',
			6 => 'Pound-Inches to Newton-Meters',
		);
		#}}}
	
        #{{{ Function List
		$this->function_list = array(
			$this->function_strings[1] => function($num){
				$result = $num * 0.089595863;
				return array($result, $this->pluralize($result, 'Ounce/Inch'));
			},
			$this->function_strings[2] => function($num){
				$result = $num * 0.068521766;
				return array($result, $this->pluralize($result, 'Pound/Foot'));
			},
			$this->function_strings[3] => function($num){
				$result = $num * 0.0057101472;
				return array($result, $this->pluralize($result, 'Pound/Inch'));
			},
			$this->function_strings[4] => function($num){
				$result = $num * 11.16123;
				return array($result, $this->pluralize($result, 'Gram/Centimeter'));
			},
			$this->function_strings[5] => function($num){
				$result = $num * 14.593903;
				return array($result, $this->pluralize($result, 'Newton/Meter'));
			},
			$this->function_strings[6] => function($num){
				$result = $num * 175.12684;
				return array($result, $this->pluralize($result, 'Newton/Meter'));
			},
		);
        #}}}

        #{{{ Inputs
		$this->functionInputs = array(
			$this->function_strings[1] => array(
				'number_input' => 'Gram/Centimeter (input): ',
			),
			$this->function_strings[2] => array(
				'number_input' => 'Newton/Meter (input): ',
			),
			$this->function_strings[3] => array(
				'number_input' => 'Newton/Meters (input): ',
			),
			$this->function_strings[4] => array(
				'number_input' => 'Ounce/Inch (input): ',
			),
			$this->function_strings[5] => array(
				'number_input' => 'Pound/Foot (input): ',
			),
			$this->function_strings[6] => array(
				'number_input' => 'Pound/Inch (input): ',
			),
		);
        #}}}

        #{{{ Formula List
		$this->formula_list = array(
			$this->function_strings[1] => array(
				'Formula:<br>' => 'Gram/Centimeter * 0.089595863'
			),
			$this->function_strings[2] => array(
				'Formula:<br>' => 'Newton/Meter * 0.068521766'
			),
			$this->function_strings[3] => array(
				'Formula:<br>' => 'Newton/Meter * 0.0057101472'
			),
			$this->function_strings[4] => array(
				'Formula:<br>' => 'Ounce/Inch * 11.16123'
			),
			$this->function_strings[5] => array(
				'Formula:<br>' => 'Pound/Foot * 14.593903'
			),
			$this->function_strings[6] => array(
				'Formula:<br>' => 'Pound/Inch * 175.12684'
			),
		);
        #}}}

	}
}
