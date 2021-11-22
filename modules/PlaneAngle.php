<?php
# SYNOPSIS: Calculate Plane Angle
# 
# PlaneAngle.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:49:39 PM PDT
# Last Update: 2021-11-22: 11:57
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

class PlaneAngle extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array(
			1 => 'Degrees to Radians',
			2 => 'Minutes to Degrees',
			3 => 'Quadrants to Degrees',
			4 => 'Quadrants to Radians',
			5 => 'Radians to Degrees',
			6 => 'Minutes to Radians',
		);
		#}}}
	
        #{{{ Function List
		$this->function_list = array();
        #}}}

        #{{{ Inputs
		$this->functionInputs = array(
			$this->function_strings[1] => array(
				'number_input' => 'Degrees (input): ',
			),
			$this->function_strings[2] => array(
				'number_input' => 'Minutes (input): ',
			),
			$this->function_strings[3] => array(
				'number_input' => 'Quadrants (input): ',
			),
			$this->function_strings[4] => array(
				'number_input' => 'Quadrants (input): ',
			),
			$this->function_strings[5] => array(
				'number_input' => 'Radians (input): ',
			),
			$this->function_strings[6] => array(
				'number_input' => 'Minutes (input): ',
			),
		);
        #}}}

        #{{{ Formula List
		$this->formula_list = array(
			$this->function_strings[1] => array(
				'Formula:<br>' => 'Degree * 0.017453293'
			),
			$this->function_strings[2] => array(
				'Formula:<br>' => 'Minute * 0.16666667'
			),
			$this->function_strings[3] => array(
				'Formula:<br>' => 'Quadrant * 90'
			),
			$this->function_strings[4] => array(
				'Formula:<br>' => 'Quadrant * 1.5707963'
			),
			$this->function_strings[5] => array(
				'Formula:<br>' => 'Radian * 57.29578'
			),
			$this->function_strings[6] => array(
				'Formula:<br>' => 'Minute * 0.00029088821'
			),
		);
        #}}}

	}
}
