<?php
# SYNOPSIS: Formulas for Calculating Velocity
# 
# Velocity.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 09:00:35 PM PDT
# Last Update: 2021-11-25: 14:57
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

class Velocity extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array(
			1 => 'Miles/Hr to Kilometers/Hr',
			2 => 'Kilometers/Hr to Miles/Hr',
			3 => 'Feet/Sec to Meters/Sec',
			4 => 'Meters/Sec to Feet/Sec',
			5 => 'Kilometers/Sec to Meters/Sec',
			6 => 'Meters/Sec to Kilometers/Sec',
			7 => 'Miles/Hr to Meters/Sec',
			8 => 'Meters/Sec to Miles/Hr',
		);
		#}}}
	
        #{{{ Function List
		$this->function_list = array(
			$this->function_strings[1] => function($num){
				$result = $num * 1.609344;
				return array($result, $this->pluralize($result, 'Kilometer/Hr'));
			},
			$this->function_strings[2] => function($num){
				$result = $num * 0.62137119;
				return array($result, $this->pluralize($result, 'Mile/Hr'));
			},
			$this->function_strings[3] => function($num){
				$result = $num * 0.3048;
				return array($result, $this->pluralize($result, 'Meter/Sec'));
			},
			$this->function_strings[4] => function($num){
				$result = $num * 3.2808399;
				return array($result, $this->pluralize($result, 'Foot/Sec'));
			},
			$this->function_strings[5] => function($num){
				$result = $num * 1000;
				return array($result, $this->pluralize($result, 'Meter/Sec'));
			},
			$this->function_strings[6] => function($num){
				$result = $num * 0.001;
				return array($result, $this->pluralize($result, 'Kilometer/Sec'));
			},
			$this->function_strings[7] => function($num){
				$result = $num * 0.44704;
				return array($result, $this->pluralize($result, 'Meter/Sec'));
			},
			$this->function_strings[8] => function($num){
				$result = $num * 2.2369363;
				return array($result, $this->pluralize($result, 'Mile/Hr'));
			},
		);
        #}}}

        #{{{ Inputs
		$this->functionInputs = array(
			$this->function_strings[1] => array(
				'number_input' => 'Mile/Hr (input): ',
			),
			$this->function_strings[2] => array(
				'number_input' => 'Kilometer/Hr (input): ',
			),
			$this->function_strings[3] => array(
				'number_input' => 'Foot/Sec (input): ',
			),
			$this->function_strings[4] => array(
				'number_input' => 'Meter/Sec (input): ',
			),
			$this->function_strings[5] => array(
				'number_input' => 'Kilometer/Sec (input): ',
			),
			$this->function_strings[6] => array(
				'number_input' => 'Meter/Sec (input): ',
			),
			$this->function_strings[7] => array(
				'number_input' => 'Mile/Hr (input): ',
			),
			$this->function_strings[8] => array(
				'number_input' => 'Meter/Sec (input): ',
			),
		);
        #}}}

        #{{{ Formula List
		$this->formula_list = array(
			$this->function_strings[1] => array(
				'Formula:<br>' => 'Mile/Hr * 1.609344'
			),
			$this->function_strings[2] => array(
				'Formula:<br>' => 'Kilometer/Hr * 0.62137119'
			),
			$this->function_strings[3] => array(
				'Formula:<br>' => 'Foot/Sec * 0.3048'
			),
			$this->function_strings[4] => array(
				'Formula:<br>' => 'Meter/Sec * 3.2808399'
			),
			$this->function_strings[5] => array(
				'Formula:<br>' => 'Kilometer/Sec * 1000'
			),
			$this->function_strings[6] => array(
				'Formula:<br>' => 'Meter/Sec * 0.001'
			),
			$this->function_strings[7] => array(
				'Formula:<br>' => 'Mile/Hr * 0.44704'
			),
			$this->function_strings[8] => array(
				'Formula:<br>' => 'Meter/Sec * 2.2369363'
			),
		);
        #}}}

	}
}
