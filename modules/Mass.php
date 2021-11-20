<?php
# SYNOPSIS: Calculate Different Kinds of Mass
# 
# Mass.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:47:30 PM PDT
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

class Mass extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array(
			1 => 'Tons to Kilograms',
			2 => 'Kilograms to Tons',
			3 => 'Tons to Metric Tons',
			4 => 'Metric Tons to Tons',
			5 => 'Grains to Drams',
			6 => 'Grains to Ounces',
			7 => 'Grains to Grams',
		);
		#}}}
	
        #{{{ Function List
		$this->function_list = array(
			$this->function_strings[1] => function($num){
				$result = $num * 907.18474;
				return array($result, $this->pluralize($result, 'Kilogram'));
			},
			$this->function_strings[2] => function($num){
				$result = $num * 0.0011023113;
				return array($result, $this->pluralize($result, 'Ton'));
			},
			$this->function_strings[3] => function($num){
				$result = $num * 0.90718474;
				return array($result, $this->pluralize($result, 'Metric Ton'));
			},
			$this->function_strings[4] => function($num){
				$result = $num * 1.1023113;
				return array($result, $this->pluralize($result, 'Ton'));
			},
			$this->function_strings[5] => function($num){
				$result = $num * 0.036571429;
				return array($result, $this->pluralize($result, 'Dram'));
			},
			$this->function_strings[6] => function($num){
				$result = $num * 0.0022857143;
				return array($result, $this->pluralize($result, 'Ounce'));
			},
			$this->function_strings[7] => function($num){
				$result = $num * 0.06479891;
				return array($result, $this->pluralize($result, 'Gram'));
			},
		);
        #}}}

        #{{{ Inputs
		$this->functionInputs = array(
			$this->function_strings[1] => array(
				'number_input' => 'Tons (input): ',
			),
			$this->function_strings[2] => array(
				'number_input' => 'Kilograms (input): ',
			),
			$this->function_strings[3] => array(
				'number_input' => 'Tons (input): ',
			),
			$this->function_strings[4] => array(
				'number_input' => 'Metric Tons (input): ',
			),
			$this->function_strings[5] => array(
				'number_input' => 'Grains (input): ',
			),
			$this->function_strings[6] => array(
				'number_input' => 'Grains (input): ',
			),
			$this->function_strings[7] => array(
				'number_input' => 'Grains (input): ',
			),
		);
        #}}}

        #{{{ Formula List
		$this->formula_list = array(
			$this->function_strings[1] => array(
				'Formula:<br>' => 'Tons * 907.18474'
			),
			$this->function_strings[2] => array(
				'Formula:<br>' => 'Kilograms * 0.0011023113'
			),
			$this->function_strings[3] => array(
				'Formula:<br>' => 'Tons * 0.90718474'
			),
			$this->function_strings[4] => array(
				'Formula:<br>' => 'Metric Tons * 1.1023113'
			),
			$this->function_strings[5] => array(
				'Formula:<br>' => 'Grains * 0.036571429'
			),
			$this->function_strings[6] => array(
				'Formula:<br>' => 'Grains * 0.0022857143'
			),
			$this->function_strings[7] => array(
				'Formula:<br>' => 'Grains * 0.06479891'
			),
		);
        #}}}

	}
}
