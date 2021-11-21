<?php
# SYNOPSIS: Ways of Calculating Physical Exersion
# 
# Physical_Fitness.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:49:08 PM PDT
# Last Update: 2021-11-20: 13:59
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

class Physical_Fitness extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array(
			1 => 'Calories burned in Work-Out',
			2 => 'Calories to Joules',
			3 => 'Joules to Calories',
		#	4 => 'Newtons to Pounds',
		#	5 => 'Pounds to Newtons',
		);
		#}}}
	
        #{{{ Function List
		$this->function_list = array(
			$this->function_strings[1] => function($num, $num2, $num3){
				$result = (($num * 4.448) * cos($num2) * ($num3 * 3.2808)) * 0.239;
				$result = $result * pow(10, -3);
				return array($result, $this->pluralize($result, 'Caloire'));
			},
			$this->function_strings[2] => function($num){
				$result = $num * 4.184;
				return array($result, $this->pluralize($result, 'Joule'));
			},
			$this->function_strings[3] => function($num){
				$result = $num * 0.2390057;
				return array($result, $this->pluralize($result, 'Calorie'));
			},
		);
        #}}}

        #{{{ Inputs
		$this->functionInputs = array(
			$this->function_strings[1] => array(
				'number_input' => 'Enter Weight (input): ',
				'number_input2' => 'Enter Angle (input): ',
				'number_input3' => 'Enter Distance of Lift (input): ',
			),
			$this->function_strings[2] => array(
				'number_input' => 'Calories (input): ',
			),
			$this->function_strings[3] => array(
				'number_input' => 'Joules (input): ',
			),
			$this->function_strings[4] => array(
				'number_input' => 'Newtons (input): ',
			),
			$this->function_strings[5] => array(
				'number_input' => 'Pounds (input): ',
			),
		);
        #}}}

        #{{{ Formula List
		$this->formula_list = array(
			$this->function_strings[1] => array(
				'Formula:<br>' => '((Weight * 4.448) * cos(Angle) * (Distance of Lift * 3.2808)) * 0.239'
			),
			$this->function_strings[2] => array(
				'Formula:<br>' => 'Calories * 4.184'
			),
			$this->function_strings[3] => array(
				'Formula:<br>' => 'Joules * 0.2390057'
			),
		);
        #}}}

	}
}
