<?php
# SYNOPSIS: Astronomic Unit Conversions
# 
# Astronomic_Units.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:42:14 PM PDT
# Last Update: 2021-11-20: 17:29
#
#{{{ Legal Section
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
#}}}

require_once ("FormulaBase.php");

class Astronomic_Units extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array(
			1 => "Celsius to Kelvin",
			2 => 'Fahrenheit to Kelvin',
			3 => 'Light Years to Astronomic Units',
			4 => 'Astronomic Units to Light Years',
			5 => 'Light Years to Parsecs',
			6 => 'Parsecs to Light Years',
			7 => 'Celsius to Rankine',
			8 => 'Rankine to Celsius',
			9 => 'Rankine to Kelvin',
			10 => 'Kelvin to Rankine',
		);
		#}}}
	
        #{{{ Function List
		$this->function_list = array(
			$this->function_strings[1] => function($num){
				$result = $num + 270;
				return array($result, $this->pluralize($result, 'Kelvin'));
			},
			$this->function_strings[2] => function($num){
				$result = (($num - 32) * 5/9) + 270 ;
				return array($result, $this->pluralize($result, 'Kelvin'));
			},
			$this->function_strings[3] => function($num){
				$result = $num * 63239.726;
				return array($result, $this->pluralize($result, 'Astronomic Units'));
			},
			$this->function_strings[4] => function($num){
				$result = $num * 0.000015812845;
				return array($result, $this->pluralize($result, 'Light Year'));
			},
			$this->function_strings[5] => function($num){
				$result = $num * 0.30659485;
				return array($result, $this->pluralize($result, 'Parsec'));
			},
			$this->function_strings[6] => function($num){
				$result = $num * 3.2616334;
				return array($result, $this->pluralize($result, 'Light Year'));
			},
			$this->function_strings[7] => function($num){
				$result = $num * 1.8;
				return array($result, $this->pluralize($result, 'Rankine'));
			},
			$this->function_strings[8] => function($num){
				$result = $num * 0.55555556;
				return array($result, $this->pluralize($result, 'Celsius'));
			},
			$this->function_strings[9] => function($num){
				$result = $num * 0.55555556;
				return array($result, $this->pluralize($result, 'Kelvin'));
			},
			$this->function_strings[10] => function($num){
				$result = $num * 1.8;
				return array($result, $this->pluralize($result, 'Rankine'));
			},
		);
        #}}}

        #{{{ Inputs
		$this->functionInputs = array(
			$this->function_strings[1] => array(
				'number_input' => 'Celsius (input): ',
			),
			$this->function_strings[2] => array(
				'number_input' => 'Fahrenheit (input): ',
			),
			$this->function_strings[3] => array(
				'number_input' => 'Light Years (input): ',
			),
			$this->function_strings[4] => array(
				'number_input' => 'Astronomic Units (input): ',
			),
			$this->function_strings[5] => array(
				'number_input' => 'Light Years (input): ',
			),
			$this->function_strings[6] => array(
				'number_input' => 'Parsecs (input): ',
			),
			$this->function_strings[7] => array(
				'number_input' => 'Celsius (input): ',
			),
			$this->function_strings[8] => array(
				'number_input' => 'Rankine (input): ',
			),
			$this->function_strings[9] => array(
				'number_input' => 'Rankine (input): ',
			),
			$this->function_strings[10] => array(
				'number_input' => 'Kelvin (input): ',
			),
		);
        #}}}

        #{{{ Formula List
		$this->formula_list = array(
			$this->function_strings[1] => array(
				'Formula:<br>' => 'Celsius + 270'
			),
			$this->function_strings[2] => array(
				'Formula:<br>' => '((Fahrenheit - 32) * 5/9) + 270'
			),
			$this->function_strings[3] => array(
				'Formula:<br>' => 'Light Years * 63239.726'
			),
			$this->function_strings[4] => array(
				'Formula:<br>' => 'Astronomic Units * 0.000015812845'
			),
			$this->function_strings[5] => array(
				'Formula:<br>' => 'Light Years * 0.30659485'
			),
			$this->function_strings[6] => array(
				'Formula:<br>' => 'Parsecs * 3.2616334'
			),
			$this->function_strings[7] => array(
				'Formula:<br>' => 'Celsius * 1.8'
			),
			$this->function_strings[8] => array(
				'Formula:<br>' => 'Rankine * 0.55555556'
			),
			$this->function_strings[9] => array(
				'Formula:<br>' => 'Rankine * 0.55555556'
			),
			$this->function_strings[10] => array(
				'Formula:<br>' => 'Kelvin * 1.8'
			),
		);
        #}}}
	}
}
