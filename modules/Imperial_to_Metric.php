<?php
# SYNOPSIS: Imperial to Metric Conversions
# 
# Imperial_to_Metric.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:46:12 PM PDT
# Last Update: 2021-12-17: 13:43
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

class Imperial_to_Metric extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array(
			1 => 'Fahrenheit to Celsius',
			2 => 'Cubic Yards to Cubic Meters',
			3 => 'Feet to Meters',
			4 => 'Gallons to Liters',
			5 => 'Inches to Millimeters',
			6 => 'Inches to Centimeters',
			7 => 'Miles to Kilometers',
			8 => 'Ounces to Grams',
			9 => 'Pints to Liters',
			10 => 'Quarts to Liters',
			11 => 'Pounds to Kilograms',
			12 => 'Square Feet to Square Meters',
			13 => 'Square Miles to Square Kilometers',
			14 => 'Square Yards to Square Meters',
			15 => 'Yards to Meters',
			16 => 'Cubic Yards to Cubic Centimeters',
			17 => 'Cubic Yards to Cubic Millimeters',
			18 => 'Inches to Meters',
			19 => 'Inches to Kilometers',
			20 => 'Feet to Millimeters',
			21 => 'Feet to Centimeters',
			22 => 'Feet to Kilometers',
			23 => 'Gallons to Centiliters',
			24 => 'Gallons to Deciliteres',
			25 => 'Gallons to Milliliters',
			26 => 'Miles to Millimeters',
			27 => 'Miles to Centimeters',
			28 => 'Miles to Meters',
			29 => 'Ounces to Kilograms',
			30 => 'Pints to Centiliters',
			31 => 'Pints to Deciliters',
			32 => 'Pints to Milliliters',
			33 => 'Quarts to Centiliters',
			34 => 'Quarts to Milliliters',
			35 => 'Quarts to Deciliters',
			36 => 'Pounds to Grams',
			37 => 'Square Feet to Square Centimeters',
			38 => 'Square Feet to Square Millimeters',
			39 => 'Square Feet to Square Kilometers',
			40 => 'Square Miles to Square Centimeters',
			41 => 'Square Miles to Square Millimeters',
			42 => 'Square Miles to Square Meters',
			43 => 'Square Yards to Square Centimeters',
			44 => 'Square Yards to Square Millimeters',
			45 => 'Square Yards to Square Kilometers',
			46 => 'Square Inches to Square Millimeters',
			47 => 'Square Inches to Square Centimeters',
			48 => 'Square Inches to Square Meters',
			49 => 'Square Inches to Square Kilometers',
			50 => 'Yards to Millimeters',
			51 => 'Yards to Centimeters',
			52 => 'Yards to Kilometers',
			53 => 'Cubic Yards to Cubic Meters',
			54 => 'Cubic Yards to Cubic Kilometers',
			55 => 'Cups to Milliliters',
			56 => 'Cups to Centiliters',
			57 => 'Cups to Deciliters',
			58 => 'Cups to Liters',
			59 => 'Tablespoons to Milliliters',
			60 => 'Tablespoons to Centiliters',
			61 => 'Tablespoons to Deciliters',
			62 => 'Tablespoons to Liters',
			63 => 'Teaspoons to Milliliters',
			64 => 'Teaspoons to Centiliters',
			65 => 'Teaspoons to Deciliters',
			66 => 'Teaspoons to Liters',	
			67 => 'Cubic Inches to Cubic Millimeters',
			68 => 'Cubic Inches to Cubic Centimeters',
			69 => 'Cubic Inches to Cubic Meters',
			70 => 'Cubic Inches to Cubic Kilometers',
			71 => 'Cubic Feet to Cubic Millimeters',
			72 => 'Cubic Feet to Cubic Centimeters',
			73 => 'Cubic Feet to Cubic Meters',
			74 => 'Cubic Feet to Cubic Kilometers',
			75 => 'Cubic Miles to Cubic Millimeters',
			76 => 'Cubic Miles to Cubic Centimeters',
			77 => 'Cubic Miles to Cubic Meters',
			78 => 'Cubic Miles to Cubic Kilometers',
		);
		#}}}
	
        #{{{ Function List
		$this->function_list = array(
			$this->function_strings[1] => function($num){
				$result = ($num - 32) * 5/9;
				return array($result, $this->pluralize($result, 'Celsius'));
			},
			$this->function_strings[2] => function($num){
				$result = $num * 0.76455486;
				return array($result, $this->pluralize($result, 'Meter<sup>3</sup>'));
			},
			$this->function_strings[3] => function($num){
				$result = $num * 0.3048;
				return array($result, $this->pluralize($result, 'Meter'));
			},
			$this->function_strings[4] => function($num){
				$result = $num * 3.7854118;
				return array($result, $this->pluralize($result, 'Liter'));
			},
			$this->function_strings[5] => function($num){
				$result = $num * 25.4;
				return array($result, $this->pluralize($result, 'Millimeter'));
			},
			$this->function_strings[6] => function($num){
				$result = $num * 2.54;
				return array($result, $this->pluralize($result, 'Centimeter'));
			},
			$this->function_strings[7] => function($num){
				$result = $num * 1.609344;
				return array($result, $this->pluralize($result, 'Kilometer'));
			},
			$this->function_strings[8] => function($num){
				$result = $num * 28.349523;
				return array($result, $this->pluralize($result, 'Gram'));
			},
			$this->function_strings[9] => function($num){
				$result = $num * 0.47317647;
				return array($result, $this->pluralize($result, 'Liter'));
			},
			$this->function_strings[10] => function($num){
				$result = $num * 0.94635295;
				return array($result, $this->pluralize($result, 'Liter'));
			},
			$this->function_strings[11] => function($num){
				$result = $num * 0.45359237;
				return array($result, $this->pluralize($result, 'Kilogram'));
			},
			$this->function_strings[12] => function($num){
				$result = $num * 0.09290304;
				return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
			},
			$this->function_strings[13] => function($num){
				$result = $num * 2.5899881;
				return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
			},
			$this->function_strings[14] => function($num){
				$result = $num * 0.83612736;
				return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
			},
			$this->function_strings[15] => function($num){
				$result = $num * 0.9144;
				return array($result, $this->pluralize($result, 'Meter'));
			},
			$this->function_strings[16] => function($num){
				$result = $num * 764554.86;
				return array($result, $this->pluralize($result, 'Centimeter<sup>3</sup>'));
			},
			$this->function_strings[17] => function($num){
				$result = $num * 764554860;
				return array($result, $this->pluralize($result, 'Millimeter<sup>3</sup>'));
			},
			$this->function_strings[18] => function($num){
				$result = $num * 0.0254;
				return array($result, $this->pluralize($result, 'Meter'));
			},
			$this->function_strings[19] => function($num){
				$result = $num * 2.54e-5;
				return array($result, $this->pluralize($result, 'Kilometer'));
			},
			$this->function_strings[20] => function($num){
				$result = $num * 304.8;
				return array($result, $this->pluralize($result, 'Millimeter'));
			},
			$this->function_strings[21] => function($num){
				$result = $num * 30.48;
				return array($result, $this->pluralize($result, 'Centimeter'));
			},
			$this->function_strings[22] => function($num){
				$result = $num * 0.0003048;
				return array($result, $this->pluralize($result, 'Kilometer'));
			},
			$this->function_strings[23] => function($num){
				$result = $num * 378.54118;
				return array($result, $this->pluralize($result, 'Centiliter'));
			},
			$this->function_strings[24] => function($num){
				$result = $num * 37.854118;
				return array($result, $this->pluralize($result, 'Deciliter'));
			},
			$this->function_strings[25] => function($num){
				$result = $num * 3785.4118;
				return array($result, $this->pluralize($result, 'Milliliter'));
			},
			$this->function_strings[26] => function($num){
				$result = $num * 1609344;
				return array($result, $this->pluralize($result, 'Millimeter'));
			},
			$this->function_strings[27] => function($num){
				$result = $num * 160934.4;
				return array($result, $this->pluralize($result, 'Centimeter'));
			},
			$this->function_strings[28] => function($num){
				$result =  $num * 1603.344;
				return array($result, $this->pluralize($result, 'Meter'));
			},
			$this->function_strings[29] => function($num){
				$result = $num * 0.028349523;
				return array($result, $this->pluralize($result, 'Kilogram'));
			},
			$this->function_strings[30] => function($num){
				$result = $num * 47.317647;
				return array($result, $this->pluralize($result, 'Centiliter'));
			},
			$this->function_strings[31] => function($num){
				$result = $num * 4.7317647;
				return array($result, $this->pluralize($result, 'Deciliter'));
			},
			$this->function_strings[32] => function($num){
				$result = $num * 473.17647;
				return array($result, $this->pluralize($result, 'Milliliter'));
			},
			$this->function_strings[33] => function($num){
				$result = $num * 94.635295;
				return array($result, $this->pluralize($result, 'Centiliter'));
			},
			$this->function_strings[34] => function($num){
				$result = $num * 946.35295;
				return array($result, $this->pluralize($result, 'Milliliter'));
			},
			$this->function_strings[35] => function($num){
				$result = $num * 9.4635295;
				return array($result, $this->pluralize($result, 'Deciliter'));
			},
			$this->function_strings[36] => function($num){
				$result = $num * 453.59237;
				return array($result, $this->pluralize($result, 'Gram'));
			},
			$this->function_strings[37] => function($num){
				$result = $num * 929.0304;
				return array($result, $this->pluralize($result, 'Centimeter<sup>2</sup>'));
			},
			$this->function_strings[38] => function($num){
				$result = $num * 92903.04;
				return array($result, $this->pluralize($result, 'Millimeter<sup>2</sup>'));
			},
			$this->function_strings[39] => function($num){
				$result = $num * 9.290304E-8;
				return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
			},
			$this->function_strings[40] => function($num){
				$result = $num * 2.5899881e10;
				return array($result, $this->pluralize($result, 'Centimeter<sup>2</sup>'));
			},
			$this->function_strings[41] => function($num){
				$result = $num * 2.5899881e12;
				return array($result, $this->pluralize($result, 'Millimeter<sup>2</sup>'));
			},
			$this->function_strings[42] => function($num){
				$result = $num * 2589988.1;
				return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
			},
			$this->function_strings[43] => function($num){
				$result = $num * 8361.2736;
				return array($result, $this->pluralize($result, 'Centimeter<sup>2</sup>'));
			},
			$this->function_strings[44] => function($num){
				$result = $num * 836127.36;
				return array($result, $this->pluralize($result, 'Millimeter<sup>2</sup>'));
			},
			$this->function_strings[45] => function($num){
				$result = $num * 8.3612736e-7;
				return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
			},
			$this->function_strings[46] => function($num){
				$result = $num * 645.16;
				return array($result, $this->pluralize($result, 'Millimeter<sup>2</sup>'));
			},
			$this->function_strings[47] => function($num){
				$result = $num * 6.4516;
				return array($result, $this->pluralize($result, 'Centimeter<sup>2</sup>'));
			},
			$this->function_strings[48] => function($num){
				$result = $num * 0.00064516;
				return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
			},
			$this->function_strings[49] => function($num){
				$result = $num * 6.4516e-10;
				return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
			},
			$this->function_strings[50] => function($num){
				$result = $num * 914.4;
				return array($result, $this->pluralize($result, 'Millimeter'));
			},
			$this->function_strings[51] => function($num){
				$result = $num * 91.44;
				return array($result, $this->pluralize($result, 'Centimeter'));
			},
			$this->function_strings[52] => function($num){
				$result = $num * 0.0009144;
				return array($result, $this->pluralize($result, 'Kilometer'));
			},
			$this->function_strings[53] => function($num){
				$result = $num * 0.76455486;
				return array($result, $this->pluralize($result, 'Meter<sup>3</sup>'));
			},
			$this->function_strings[54] => function($num){
				$result = $num * 7.6455486e-10;
				return array($result, $this->pluralize($result, 'Kilometer<sup>3</sup>'));
			},
			$this->function_strings[55] => function($num){
				$result = $num * 236.58824;
				return array($result, $this->pluralize($result, 'Milliliter'));
			},
			$this->function_strings[56] => function($num){
				$result = $num * 23.658824;
				return array($result, $this->pluralize($result, 'Centiliter'));
			},
			$this->function_strings[57] => function($num){
				$result = $num * 2.3658824;
				return array($result, $this->pluralize($result, 'Deciliter'));
			},
			$this->function_strings[58] => function($num){
				$result = $num * 0.23658824;
				return array($result, $this->pluralize($result, 'Liter'));
			},
			$this->function_strings[59] => function($num){
				$result = $num * 14.786765;
				return array($result, $this->pluralize($result, 'Milliliter'));
			},
			$this->function_strings[60] => function($num){
				$result = $num * 1.4786765;
				return array($result, $this->pluralize($result, 'Centiliter'));
			},
			$this->function_strings[61] => function($num){
				$result = $num * 0.14786765;
				return array($result, $this->pluralize($result, 'Deciliter'));
			},
			$this->function_strings[62] => function($num){
				$result = $num * 0.014786765;
				return array($result, $this->pluralize($result, 'Liter'));
			},
			$this->function_strings[63] => function($num){
				$result = $num * 4.9289216;
				return array($result, $this->pluralize($result, 'Milliliter'));
			},
			$this->function_strings[64] => function($num){
				$result = $num * 0.49289216;
				return array($result, $this->pluralize($result, 'Centiliter'));
			},
			$this->function_strings[65] => function($num){
				$result = $num * 0.049289216;
				return array($result, $this->pluralize($result, 'Deciliter'));
			},
			$this->function_strings[66] => function($num){
				$result = $num * 0.0049289216;
				return array($result, $this->pluralize($result, 'Liter'));
			},
			$this->function_strings[67] => function($num){
				$result = $num * 16387.064;
				return array($result, $this->pluralize($result, 'Millimeter<sup>3</sup>'));
			},
			$this->function_strings[68] => function($num){
				$result = $num * 16.387064;
				return array($result, $this->pluralize($result, 'Centimeter<sup>3</sup>'));
			},
			$this->function_strings[69] => function($num){
				$result = $num * 1.6387064e-5;
				return array($result, $this->pluralize($result, 'Meter<sup>3</sup>'));
			},
			$this->function_strings[70] => function($num){
				$result = $num * 1.6387064e-14;
				return array($result, $this->pluralize($result, 'Kilometer<sup>3</sup>'));
			},
			$this->function_strings[71] => function($num){
				$result = $num * 28316847;
				return array($result, $this->pluralize($result, 'Millimeter<sup>3</sup>'));
			},
			$this->function_strings[72] => function($num){
				$result = $num * 28316.847;
				return array($result, $this->pluralize($result, 'Centimeter<sup>3</sup>'));
			},
			$this->function_strings[73] => function($num){
				$result = $num * 0.028316847;
				return array($result, $this->pluralize($result, 'Meter<sup>3</sup>'));
			},
			$this->function_strings[74] => function($num){
				$result = $num * 2.8316847e-11;
				return array($result, $this->pluralize($result, 'Kilometer<sup>3</sup>'));
			},
			$this->function_strings[75] => function($num){
				$result = $num * 4.1681818e18;
				return array($result, $this->pluralize($result, 'Millimeter<sup>3</sup>'));
			},
			$this->function_strings[76] => function($num){
				$result = $num * 4.1681818e15;
				return array($result, $this->pluralize($result, 'Centimeter<sup>3</sup>'));
			},
			$this->function_strings[77] => function($num){
				$result = $num * 4.1681818e9;
				return array($result, $this->pluralize($result, 'Meter<sup>3</sup>'));
			},
			$this->function_strings[78] => function($num){
				$result = $num * 4.1681818;
				return array($result, $this->pluralize($result, 'Kilometer<sup>3</sup>'));
			},
		);
        #}}}

        #{{{ Inputs
		$this->functionInputs = array(
			$this->function_strings[1] => array(
				'number_input' => 'Fahrenheit (input): ',
			),
			$this->function_strings[2] => array(
				'number_input' => 'Cubic Yards (input): ',
			),
			$this->function_strings[3] => array(
				'number_input' => 'Feet (input): ',
			),
			$this->function_strings[4] => array(
				'number_input' => 'Gallons (input): ',
			),
			$this->function_strings[5] => array(
				'number_input' => 'Inches (input): ',
			),
			$this->function_strings[6] => array(
				'number_input' => 'Inches (input): ',
			),
			$this->function_strings[7] => array(
				'number_input' => 'Miles (input): ',
			),
			$this->function_strings[8] => array(
				'number_input' => 'Ounces (input): ',
			),
			$this->function_strings[9] => array(
				'number_input' => 'Pint (input): ',
			),
			$this->function_strings[10] => array(
				'number_input' => 'Quarts (input): ',
			),
			$this->function_strings[11] => array(
				'number_input' => 'Pounds (input): ',
			),
			$this->function_strings[12] => array(
				'number_input' => 'Square Feet (input): ',
			),
			$this->function_strings[13] => array(
				'number_input' => 'Square Miles (input): ',
			),
			$this->function_strings[14] => array(
				'number_input' => 'Square Yards (input): ',
			),
			$this->function_strings[15] => array(
				'number_input' => 'Yards (input): ',
			),
			$this->function_strings[16] => array(
				'number_input' => 'Cubic Yards (input): ',
			),
			$this->function_strings[17] => array(
				'number_input' => 'Cubic Yards (input): ',
			),
			$this->function_strings[18] => array(
				'number_input' => 'Inches (input): ',
			),
			$this->function_strings[19] => array(
				'number_input' => 'Inches (input): ',
			),
			$this->function_strings[20] => array(
				'number_input' => 'Feet (input): ',
			),
			$this->function_strings[21] => array(
				'number_input' => 'Feet (input): ',
			),
			$this->function_strings[22] => array(
				'number_input' => 'Feet	(input): ',
			),
			$this->function_strings[23] => array(
				'number_input' => 'Gallons (input): ',
			),
			$this->function_strings[24] => array(
				'number_input' => 'Gallons (input): ',
			),
			$this->function_strings[25] => array(
				'number_input' => 'Gallons (input): ',
			),
			$this->function_strings[26] => array(
				'number_input' => 'Miles (input): ',
			),
			$this->function_strings[27] => array(
				'number_input' => 'Miles (input): ',
			),
			$this->function_strings[28] => array(
				'number_input' => 'Miles (input): ',
			),
			$this->function_strings[29] => array(
				'number_input' => 'Ounces (input): ',
			),
			$this->function_strings[30] => array(
				'number_input' => 'Pints (input): ',
			),
			$this->function_strings[31] => array(
				'number_input' => 'Pints (input): ',
			),
			$this->function_strings[32] => array(
				'number_input' => 'Pints (input): ',
			),
			$this->function_strings[33] => array(
				'number_input' => 'Quarts (input): ',
			),
			$this->function_strings[34] => array(
				'number_input' => 'Quarts (input): ',
			),
			$this->function_strings[35] => array(
				'number_input' => 'Quarts (input): ',
			),
			$this->function_strings[36] => array(
				'number_input' => 'Pounds (input): ',
			),
			$this->function_strings[37] => array(
				'number_input' => 'Square Feet (input): ',
			),
			$this->function_strings[38] => array(
				'number_input' => 'Square Feet (input): ',
			),
			$this->function_strings[39] => array(
				'number_input' => 'Square Feet (input): ',
			),
			$this->function_strings[40] => array(
				'number_input' => 'Square Miles (input): ',
			),
			$this->function_strings[41] => array(
				'number_input' => 'Square Miles (input): ',
			),
			$this->function_strings[42] => array(
				'number_input' => 'Square Miles (input): ',
			),
			$this->function_strings[43] => array(
				'number_input' => 'Square Yards (input): ',
			),
			$this->function_strings[44] => array(
				'number_input' => 'Square Yards (input): ',
			),
			$this->function_strings[45] => array(
				'number_input' => 'Square Yards (input): ',
			),
			$this->function_strings[46] => array(
				'number_input' => 'Square Inches (input): ',
			),
			$this->function_strings[47] => array(
				'number_input' => 'Square Inches (input): ',
			),
			$this->function_strings[48] => array(
				'number_input' => 'Square Inches (input): ',
			),
			$this->function_strings[49] => array(
				'number_input' => 'Square Inches (input): ',
			),
			$this->function_strings[50] => array(
				'number_input' => 'Yards (input): ',
			),
			$this->function_strings[51] => array(
				'number_input' => 'Yards (input): ',
			),
			$this->function_strings[52] => array(
				'number_input' => 'Yards (input): ',
			),
			$this->function_strings[53] => array(
				'number_input' => 'Cubic Yards (input): ',
			),
			$this->function_strings[54] => array(
				'number_input' => 'Cubic Yards (input): ',
			),
			$this->function_strings[55] => array(
				'number_input' => 'Cups (input): ',
			),
			$this->function_strings[56] => array(
				'number_input' => 'Cups (input): ',
			),
			$this->function_strings[57] => array(
				'number_input' => 'Cups (input): ',
			),
			$this->function_strings[58] => array(
				'number_input' => 'Cups	(input): ',
			),
			$this->function_strings[59] => array(
				'number_input' => 'Tablespoons (input): ',
			),
			$this->function_strings[60] => array(
				'number_input' => 'Tablespoons (input): ',
			),
			$this->function_strings[61] => array(
				'number_input' => 'Tablespoons (input): ',
			),
			$this->function_strings[62] => array(
				'number_input' => 'Tablespoons (input): ',
			),
			$this->function_strings[63] => array(
				'number_input' => 'Teaspoons (input): ',
			),
			$this->function_strings[64] => array(
				'number_input' => 'Teaspoons (input): ',
			),
			$this->function_strings[65] => array(
				'number_input' => 'Teaspoons (input): ',
			),
			$this->function_strings[66] => array(
				'number_input' => 'Teaspoons (input): ',
			),
			$this->function_strings[67] => array(
				'number_input' => 'Cubic Inches (input): ',
			),
			$this->function_strings[68] => array(
				'number_input' => 'Cubic Inches (input): ',
			),
			$this->function_strings[69] => array(
				'number_input' => 'Cubic Inches (input): ',
			),
			$this->function_strings[70] => array(
				'number_input' => 'Cubic Inches (input): ',
			),
			$this->function_strings[71] => array(
				'number_input' => 'Cubic Feet (input): ',
			),
			$this->function_strings[72] => array(
				'number_input' => 'Cubic Feet (input): ',
			),
			$this->function_strings[73] => array(
				'number_input' => 'Cubic Feet (input): ',
			),
			$this->function_strings[74] => array(
				'number_input' => 'Cubic Feet (input): ',
			),
			$this->function_strings[75] => array(
				'number_input' => 'Cubic Miles (input): ',
			),
			$this->function_strings[76] => array(
				'number_input' => 'Cubic Miles (input): ',
			),
			$this->function_strings[77] => array(
				'number_input' => 'Cubic Miles (input): ',
			),
			$this->function_strings[78] => array(
				'number_input' => 'Cubic Miles (input): ',
			),
		);
        #}}}

        #{{{ Formula List
		$this->formula_list = array(
			$this->function_strings[1] => array(
				'Formula:<br>' => '(Fahrenheit - 32) * 5/9'
			),
			$this->function_strings[2] => array(
				'Formula:<br>' => 'Cubic Yards * 0.76455486'
			),
			$this->function_strings[3] => array(
				'Formula:<br>' => 'Feet * 0.3048'
			),
			$this->function_strings[4] => array(
				'Formula:<br>' => 'Gallons * 3.7854118'
			),
			$this->function_strings[5] => array(
				'Formula:<br>' => 'Inches * 25.4'
			),
			$this->function_strings[6] => array(
				'Formula:<br>' => 'Inches * 2.54'
			),
			$this->function_strings[7] => array(
				'Formula:<br>' => 'Miles * 1.609344'
			),
			$this->function_strings[8] => array(
				'Formula:<br>' => 'Ounces * 28.349523'
			),
			$this->function_strings[9] => array(
				'Formula:<br>' => 'Pints * 0.47317647'
			),
			$this->function_strings[10] => array(
				'Formula:<br>' => 'Quarts * 0.94635295'
			),
			$this->function_strings[11] => array(
				'Formula:<br>' => 'Pounds * 0.45359237'
			),
			$this->function_strings[12] => array(
				'Formula:<br>' => 'Square Feet * 0.09290304'
			),
			$this->function_strings[13] => array(
				'Formula:<br>' => 'Square Mile * 2.5899881'
			),
			$this->function_strings[14] => array(
				'Formula:<br>' => 'Square Yard * 0.83612736'
			),
			$this->function_strings[15] => array(
				'Formula:<br>' => 'Yards * 0.9144'
			),
			$this->function_strings[16] => array(
				'Formula:<br>' => 'Cubic Yards * 764554.86'
			),
			$this->function_strings[17] => array(
				'Formula:<br>' => 'Cubic Yard * 764554860'
			),
			$this->function_strings[18] => array(
				'Formula:<br>' => 'Inches * 0.0254'
			),
			$this->function_strings[19] => array(
				'Formula:<br>' => 'Inches * 25400000'
			),
			$this->function_strings[20] => array(
				'Formula:<br>' => 'Feet * 304.8'
			),
			$this->function_strings[21] => array(
				'Formula:<br>' => 'Feet * 30.48'
			),
			$this->function_strings[22] => array(
				'Formula:<br>' => 'Feet * 0.0003048'
			),
			$this->function_strings[23] => array(
				'Formula:<br>' => 'Gallons * 378.54118'
			),
			$this->function_strings[24] => array(
				'Formula:<br>' => 'Gallons * 37.854118'
			),
			$this->function_strings[25] => array(
				'Formula:<br>' => 'Gallons * 3785.4118'
			),
			$this->function_strings[26] => array(
				'Formula:<br>' => 'Miles * 1609344'
			),
			$this->function_strings[27] => array(
				'Formula:<br>' => 'Miles * 160934.4'
			),
			$this->function_strings[28] => array(
				'Formula:<br>' => 'Miles * 1609.344'
			),
			$this->function_strings[29] => array(
				'Formula:<br>' => 'Ounces * 0.028349523'
			),
			$this->function_strings[30] => array(
				'Formula:<br>' => 'Pints * 47.317647'
			),
			$this->function_strings[31] => array(
				'Formula:<br>' => 'Pints * 4.7317647'
			),
			$this->function_strings[32] => array(
				'Formula:<br>' => 'Pints * 473.17647'
			),
			$this->function_strings[33] => array(
				'Formula:<br>' => 'Quarts * 94.635295'
			),
			$this->function_strings[34] => array(
				'Formula:<br>' => 'Quarts * 946.35295'
			),
			$this->function_strings[35] => array(
				'Formula:<br>' => 'Quarts * 9.4635295'
			),
			$this->function_strings[36] => array(
				'Formula:<br>' => 'Pounds * 453.59237'
			),
			$this->function_strings[37] => array(
				'Formula:<br>' => 'Square Feet * 929.0304'
			),
			$this->function_strings[38] => array(
				'Formula:<br>' => 'Square Feet * 92903.04'
			),
			$this->function_strings[39] => array(
				'Formula:<br>' => 'Square Feet * 0.09290304'
			),
			$this->function_strings[40] => array(
				'Formula:<br>' => 'Square Miles * 2589988100'
			),
			$this->function_strings[41] => array(
				'Formula:<br>' => 'Square Miles * 2589988100000'
			),
			$this->function_strings[42] => array(
				'Formula:<br>' => 'Square Miles to 2589988.1'
			),
			$this->function_strings[43] => array(
				'Formula:<br>' => 'Square Yards * 8361.2736'
			),
			$this->function_strings[44] => array(
				'Formula:<br>' => 'Square Yards * 836127.36'
			),
			$this->function_strings[45] => array(
				'Formula:<br>' => 'Square Yards * 0.00000083612736'
			),
			$this->function_strings[46] => array(
				'Formula:<br>' => 'Square Inches * 645.16'
			),
			$this->function_strings[47] => array(
				'Formula:<br>' => 'Square Inches * 6.4516'
			),
			$this->function_strings[48] => array(
				'Formula:<br>' => 'Square Inches * 0.00064516'
			),
			$this->function_strings[49] => array(
				'Formula:<br>' => 'Square Inches * 0.00000000064516'
			),
			$this->function_strings[50] => array(
				'Formula:<br>' => 'Yards * 914.4'
			),
			$this->function_strings[51] => array(
				'Formula:<br>' => 'Yards * 91.44'
			),
			$this->function_strings[52] => array(
				'Formula:<br>' => 'Yards * 0.0009144'
			),
			$this->function_strings[53] => array(
				'Formula:<br>' => 'Cubic Yards * 0.76455486'
			),
			$this->function_strings[54] => array(
				'Formula:<br>' => 'Cubic Yards * 0.00000000076455486'
			),
			$this->function_strings[55] => array(
				'Formula:<br>' => 'Cups * 236.58824'
			),
			$this->function_strings[56] => array(
				'Formula:<br>' => 'Cups * 23.658824'
			),
			$this->function_strings[57] => array(
				'Formula:<br>' => 'Cups * 2.3658824'
			),
			$this->function_strings[58] => array(
				'Formula:<br>' => 'Cups * 0.23658824'
			),
			$this->function_strings[59] => array(
				'Formula:<br>' => 'Tablespoons * 14.786765'
			),
			$this->function_strings[60] => array(
				'Formula:<br>' => 'Tablespoons * 1.4786764'
			),
			$this->function_strings[61] => array(
				'Formula:<br>' => 'Tablespoons * 0.14786764'
			),
			$this->function_strings[62] => array(
				'Formula:<br>' => 'Tablespoons * 0.014786764'
			),
			$this->function_strings[63] => array(
				'Formula:<br>' => 'Teaspoons * 4.9289216'
			),
			$this->function_strings[64] => array(
				'Formula:<br>' => 'Teaspoons * 0.49289216'
			),
			$this->function_strings[65] => array(
				'Formula:<br>' => 'Teaspoons * 0.049289216'
			),
			$this->function_strings[66] => array(
				'Formula:<br>' => 'Teaspoons * 0.0049289216'
			),
			$this->function_strings[67] => array(
				'Formula:<br>' => 'Inch<sup>3</sup> * 16387.064'
			),
			$this->function_strings[68] => array(
				'Formula:<br>' => 'Inch<sup>3</sup> * 16.387064'
			),
			$this->function_strings[69] => array(
				'Formula:<br>' => 'Inch<sup>3</sup> * 0.000016387064'
			),
			$this->function_strings[70] => array(
				'Formula:<br>' => 'Inch<sup>3</sup> * 0.000000000000016387064'
			),
			$this->function_strings[71] => array(
				'Formula:<br>' => 'Feet<sup>3</sup> * 28316847'
			),
			$this->function_strings[72] => array(
				'Formula:<br>' => 'Feet<sup>3</sup> * 28316.847'
			),
			$this->function_strings[73] => array(
				'Formula:<br>' => 'Feet<sup>3</sup> * 0.028316847'
			),
			$this->function_strings[74] => array(
				'Formula:<br>' => 'Feet<sup>3</sup> * 2.8316847e-11'
			),
			$this->function_strings[75] => array(
				'Formula:<br>' => 'Miles<sup>3</sup> * 4.1681818e+18'
			),
			$this->function_strings[76] => array(
				'Formula:<br>' => 'Miles<sup>3</sup> * 4.1681818e+15'
			),
			$this->function_strings[77] => array(
				'Formula:<br>' => 'Miles<sup>3</sup> * 4.1681818e+9'
			),
			$this->function_strings[78] => array(
				'Formula:<br>' => 'Miles<sup>3</sup> * 4.1681818'
			),
		);
        #}}}

	}
}
