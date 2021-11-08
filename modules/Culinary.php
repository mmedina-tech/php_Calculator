<?php
# SYNOPSIS: Culinary Conversions
# 
# Culinary.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:43:20 PM PDT
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

class Culinary extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array(
			1 => 'Cups to Liters',
			2 => 'Cups to Pints',
			3 => 'Dashes to Teaspoons',
			4 => 'Fluid Ounces to Milliliters',
			5 => 'Gallons to Liters',
			6 => 'Gallons to Pecks',
			7 => 'Grams to Ounces',
			8 => 'Grams to Pounds',
			9 => 'Kilograms to Pounds',
			10 => 'Liters to Gallons',
			11 => 'Liters to Pints',
			12 => 'Liters to Quarts',
			13 => 'Pecks to Bushels',
			14 => 'Pints to Liters',
			15 => 'Pints to Quarts',
			16 => 'Pounds to Kilograms',
			17 => 'Portion Size',
			18 => 'Quarts to Gallons',
			19 => 'Quarts to Liters',
			20 => 'Tablespoons to Cups',
			21 => 'Tablespoons to Fluid Ounces',
			22 => 'Tablespoons to Milliliters',
			23 => 'Teaspoons to Tablespoons',
			24 => 'Teaspoons to Milliliters',
			25 => 'Unit Cost',
			26 => 'Recipe Cost',
			27 => 'Selling Price',
			28 => 'Ounces to Grams',
		);
		#}}}
	
        #{{{ Function List
		$this->function_list = array(
			$this->function_strings[1] => function($num){
				$result = $num * 0.23658824;
				return array($this->prec($result, 4), $this->pluralize($result, 'Liter'));
			},
			$this->function_strings[2] => function($num){
				$result = $num * 0.5;
				return array($this->prec($result, 4), $this->pluralize($result, 'Pint'));
			},
			$this->function_strings[3] => function($num){
				$result = $num * 0.125;
				return array($this->prec($result, 4), $this->pluralize($result, 'Teaspoon'));
			},
			$this->function_strings[4] => function($num){
				$result = $num * 29.57353 ;
				return array($this->prec($result, 4), $this->pluralize($result, 'Milliliter'));
			},
			$this->function_strings[5] => function($num){
				$result = $num * 3.7854118;
				return array($this->prec($result, 4), $this->pluralize($result, 'Liter'));
			},
			$this->function_strings[6] => function($num){
				$result = $num * 0.4296835;
				return array($this->prec($result, 4), $this->pluralize($result, 'Peck'));
			},
			$this->function_strings[7] => function($num){
				$result = $num * 0.035273962;
				return array($this->prec($result, 4), $this->pluralize($result, 'Ounce'));
			},
			$this->function_strings[8] => function($num){
				$result = $num * 0.0022046226;
				return array($this->prec($result, 4), $this->pluralize($result, 'Pound'));
			},
			$this->function_strings[9] => function($num){
				$result = $num * 2.2046226;
				return array($this->prec($result, 4), $this->pluralize($result, 'Pound'));
			},
			$this->function_strings[10] => function($num){
				$result = $num * 0.26417205;
				return array($this->prec($result, 4), $this->pluralize($result, 'Gallon'));
			},
			$this->function_strings[11] => function($num){
				$result = $num * 2.1133764;
				return array($this->prec($result, 4), $this->pluralize($result, 'Pint'));
			},
			$this->function_strings[12] => function($num){
				$result = $num * 1.0566882;
				return array($this->prec($result, 4), $this->pluralize($result, 'Quart'));
			},
			$this->function_strings[13] => function($num){
				$result = $num * 0.25;
				return array($this->prec($result, 4), $this->pluralize($result, 'Bushel'));
			},
			$this->function_strings[14] => function($num){
				$result = $num * 0.47317647;
				return array($this->prec($result, 4), $this->pluralize($result, 'Liter'));
			},
			$this->function_strings[15] => function($num){
				$result = $num * 0.5;
				return array($this->prec($result, 4), $this->pluralize($result, 'Quart'));
			},
			$this->function_strings[16] => function($num){
				$result = $num * 0.45359237;
				return array($this->prec($result, 4), $this->pluralize($result, 'Kilogram'));
			},
			$this->function_strings[17] => function($num, $num2, $num3, $num4, $num5){
				$old_yield = $num * $num2;
				$new_yield = $num3 * $num4;
				$conversion_factor = $new_yield / $old_yield;
				$result = $num5 * $conversion_factor;
				return array($this->prec($result, 2), $this->pluralize($result, 'New Quantity'));
			},
			$this->function_strings[18] => function($num){
				$result = $num * 0.25;
				return array($this->prec($result, 4), $this->pluralize($result, 'Gallon'));
			},
			$this->function_strings[19] => function($num){
				$result = $num * 0.94635295;
				return array($this->prec($result, 4), $this->pluralize($result, 'Liter'));
			},
			$this->function_strings[20] => function($num){
				$result = $num * 0.0625;
				return array($this->prec($result, 4), $this->pluralize($result, 'Cup'));
			},
			$this->function_strings[21] => function($num){
				$result = $num * 0.5;
				return array($this->prec($result, 4), $this->pluralize($result, 'Fluid Ounce'));
			},
			$this->function_strings[22] => function($num){
				$result = $num * 14.786765;
				return array($this->prec($result, 4), $this->pluralize($result, 'Milliliter'));
			},
			$this->function_strings[23] => function($num){
				$result = $num * 0.33333333;
				return array($this->prec($result, 4), $this->pluralize($result, 'Tablespoon'));
			},
			$this->function_strings[24] => function($num){
				$result = $num * 4.9289216;
				return array($this->prec($result, 4), $this->pluralize($result, 'Milliliter'));
			},
			$this->function_strings[25] => function($num, $num2){
				$result = $num / $num;
				return array(money_format("$", $result), $this->pluralize($result, 'Cost per Unit'));
			},
			$this->function_strings[26] => function($num, $num2){
				$result = $num / $num2;
				return array(money_format("$", $result), $this->pluralize($result, 'Cost Per Portion'));
			},
			$this->function_strings[27] => function($num, $num2){
				$result = $num / ($num2 / 100);
				return array(money_format("$", $result), $this->pluralize($result, 'Selling Price'));
			},
			$this->function_strings[28] => function($num){
				$result = $num * 28.349523;
				return array($this->prec($result, 4), $this->pluralize($result, 'Gram'));
			},
		);
        #}}}

        #{{{ Inputs
		$this->functionInputs = array(
			$this->function_strings[1] => array(
				'number_input' => 'Cups (input): ',
			),
			$this->function_strings[2] => array(
				'number_input' => 'Cups (input): ',
			),
			$this->function_strings[3] => array(
				'number_input' => 'Dashes (input): ',
			),
			$this->function_strings[4] => array(
				'number_input' => 'Fluuid Ounces (input): ',
			),
			$this->function_strings[5] => array(
				'number_input' => 'Gallons (input): ',
			),
			$this->function_strings[6] => array(
				'number_input' => 'Gallons (input): ',
			),
			$this->function_strings[7] => array(
				'number_input' => 'Grams (input): ',
			),
			$this->function_strings[8] => array(
				'number_input' => 'Grams (input): ',
			),
			$this->function_strings[9] => array(
				'number_input' => 'Kilograms (input): ',
			),
			$this->function_strings[10] => array(
				'number_input' => 'Liters (input): ',
			),
			$this->function_strings[11] => array(
				'number_input' => 'Liters (input): ',
			),
			$this->function_strings[12] => array(
				'number_input' => 'Liters (input): ',
			),
			$this->function_strings[13] => array(
				'number_input' => 'Pecks (input): ',
			),
			$this->function_strings[14] => array(
				'number_input' => 'Pints (input): ',
			),
			$this->function_strings[15] => array(
				'number_input' => 'Pints (input): ',
			),
			$this->function_strings[16] => array(
				'number_input' => 'Pounds (input): ',
			),
			$this->function_strings[17] => array(
				'number_input' => 'Original Yields (input): ',
				'number_input2' => 'Original Serving Size (input): ',
				'number_input3' => 'Desired Portions (input): ',
				'number_input4' => 'Desired Portion Size (input): ',
				'number_input5' => 'Old Ingrediant Quantity (input): '
			),
			$this->function_strings[18] => array(
				'number_input' => 'Quarts (input): ',
			),
			$this->function_strings[19] => array(
				'number_input' => 'Quarts (input): ',
			),
			$this->function_strings[20] => array(
				'number_input' => 'Tablespoons (input): ',
			),
			$this->function_strings[21] => array(
				'number_input' => 'Tablespoons (input): ',
			),
			$this->function_strings[22] => array(
				'number_input' => 'Tablespoons (input): ',
			),
			$this->function_strings[23] => array(
				'number_input' => 'Teaspoons (input): ',
			),
			$this->function_strings[24] => array(
				'number_input' => 'Teaspoons (input): ',
			),
			$this->function_strings[25] => array(
				'number_input' => 'As Purchased Cost (input): ',
				'number_input2' => 'Number of Units (input): ',
			),
			$this->function_strings[26] => array(
				'number_input' => 'Total Recipe Cost (input): ',
				'number_input2' => 'Number of Portions (input): ',
			),
			$this->function_strings[27] => array(
				'number_input' => 'Plate Cost (input): ',
				'number_input2' => 'Food Cost Percentage (input): ',
			),
			$this->function_strings[28] => array(
				'number_input' => 'Ounce (input): ',
			),
		);
        #}}}

        #{{{ Formula List
		$this->formula_list = array(
			$this->function_strings[1] => array(
				'Formula:<br>' => 'Cups * 0.23659924'
			),
			$this->function_strings[2] => array(
				'Formula:<br>' => 'Cups * 0.5'
			),
			$this->function_strings[3] => array(
				'Formula:<br>' => 'Dashes * 0.125'
			),
			$this->function_strings[4] => array(
				'Formula:<br>' => 'Fluid Ounces * 29.57353'
			),
			$this->function_strings[5] => array(
				'Formula:<br>' => 'Gallons * 3.7854118'
			),
			$this->function_strings[6] => array(
				'Formula:<br>' => 'Gallons * 0.4296835'
			),
			$this->function_strings[7] => array(
				'Formula:<br>' => 'Grams * 0.035273962'
			),
			$this->function_strings[8] => array(
				'Formula:<br>' => 'Grams * 0.0022046226'
			),
			$this->function_strings[9] => array(
				'Formula:<br>' => 'Kilograms * 2.2046226'
			),
			$this->function_strings[10] => array(
				'Formula:<br>' => 'Liters * 0.26417205'
			),
			$this->function_strings[11] => array(
				'Formula:<br>' => 'Liters * 2.1133764'
			),
			$this->function_strings[12] => array(
				'Formula:<br>' => 'Liters * 1.0567'
			),
			$this->function_strings[13] => array(
				'Formula:<br>' => 'Pecks * 0.25'
			),
			$this->function_strings[14] => array(
				'Formula:<br>' => 'Pints * 0.47317647'
			),
			$this->function_strings[15] => array(
				'Formula:<br>' => 'Pints * 0.5'
			),
			$this->function_strings[16] => array(
				'Formula:<br>' => 'Pounds * 0.45359237'
			),
			$this->function_strings[17] => array(
				'Formula:<br>' => '((Original Yield * Original Serving Size) / (Desired Portions * Desired Portion Size)) * Old Ingrediant Quantity'
			),
			$this->function_strings[18] => array(
				'Formula:<br>' => 'Quarts * 0.25'
			),
			$this->function_strings[19] => array(
				'Formula:<br>' => 'Quarts * 0.94635295'
			),
			$this->function_strings[20] => array(
				'Formula:<br>' => 'Tablespoons * 0.0625'
			),
			$this->function_strings[21] => array(
				'Formula:<br>' => 'Tablespoons * 0.5'
			),
			$this->function_strings[22] => array(
				'Formula:<br>' => 'Tablespoons * 14.786765'
			),
			$this->function_strings[23] => array(
				'Formula:<br>' => 'Teaspoons * 0.33333333'
			),
			$this->function_strings[24] => array(
				'Formula:<br>' => 'Teaspoons * 4.9289216'
			),
			$this->function_strings[25] => array(
				'Formula:<br>' => 'As Purchased Cost / Number Of Units'
			),
			$this->function_strings[26] => array(
				'Formula:<br>' => 'Total Recipe Cost / Number of Portions'
			),
			$this->function_strings[27] => array(
				'Formula:<br>' => 'Plate Cost / (Food Cost Percentage / 100)'
			),
			$this->function_strings[28] => array(
				'Formula:<br>' => 'Ounce * 28.349523'
			),
		);
        #}}}
	}
}
