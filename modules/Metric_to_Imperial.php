<?php
# SYNOPSIS: Convert from Metric to Imperial units
#
# Metric_to_Imperial.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:47:57 PM PDT
# Last Update: 2022-03-01: 10:52
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

class Metric_to_Imperial extends FormulaBase{
    function __construct(){

        #{{{ Function Titles
        $this->function_strings = array(
            1 => 'Celsius to Fahrenheit',
            2 => 'Centimeters to Inches',
            3 => 'Centimeters to Feet',
            4 => 'Cubic Meters to Cubic Feet',
            5 => 'Cubic Meters to Cubic Yards',
            6 => 'Grams to Ounces',
            7 => 'Kilograms to Pounds',
            8 => 'Liters to Gallons',
            9 => 'Liters to Pints',
            10 => 'Liters to Quarts',
            11 => 'Meters to Feet',
            12 => 'Meters to Miles',
            13 => 'Meters to Yards',
            14 => 'Millimeters to Inches',
            15 => 'Square Kilometers to Square Miles',
            16 => 'Square Meters to Square Feet',
            17 => 'Square Meters to Square Yards',
            18 => 'Kilometers to Miles',
        );
        #}}}

        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[1] => function($num){
                $result = ($num * 9/5) + 32;
                return array($result, $this->pluralize($result, 'Fahrenheit'));
            },
            $this->function_strings[2] => function($num){
                $result = $num * 0.39370079;
                return array($result, $this->pluralize($result, 'Inch'));
            },
            $this->function_strings[3] => function($num){
                $result = $num * 0.032808399;
                return array($result, $this->pluralize($result, 'Foot'));
            },
            $this->function_strings[4] => function($num){
                $result = $num * 35.314667;
                return array($result, $this->pluralize($result, 'Foot<sup>3</sup>'));
            },
            $this->function_strings[5] => function($num){
                $result = $num * 1.3079506;
                return array($result, $this->pluralize($result, 'Yard<sup>3</sup>'));
            },
            $this->function_strings[6] => function($num){
                $result = $num * 0.035273962;
                return array($result, $this->pluralize($result, 'Ounce'));
            },
            $this->function_strings[7] => function($num){
                $result = $num * 2.2046226;
                return array($result, $this->pluralize($result, 'Pound'));
            },
            $this->function_strings[8] => function($num){
                $result = $num * 0.26417205;
                return array($result, $this->pluralize($result, 'Gallon'));
            },
            $this->function_strings[9] => function($num){
                $result = $num * 2.1133764;
                return array($result, $this->pluralize($result, 'Pint'));
            },
            $this->function_strings[10] => function($num){
                $result = $num * 1.0566882;
                return array($result, $this->pluralize($result, 'Quart'));
            },
            $this->function_strings[11] => function($num){
                $result = $num * 3.2808399;
                return array($result, $this->pluralize($result, 'Foot'));
            },
            $this->function_strings[12] => function($num){
                $result = $num * 0.00062137119;
                return array($result, $this->pluralize($result, 'Mile'));
            },
            $this->function_strings[13] => function($num){
                $result = $num * 1.0936133;
                return array($result, $this->pluralize($result, 'Yard'));
            },
            $this->function_strings[14] => function($num){
                $result = $num * 0.039370079;
                return array($result, $this->pluralize($result, 'Inch'));
            },
            $this->function_strings[15] => function($num){
                $result = $num * 0.38610216;
                return array($result, $this->pluralize($result, 'Mile<sup>2</sup>'));
            },
            $this->function_strings[16] => function($num){
                $result = $num * 10.76391;
                return array($result, $this->pluralize($result, 'Foot<sup>2</sup>'));
            },
            $this->function_strings[17] => function($num){
                $result = $num * 1.19599;
                return array($result, $this->pluralize($result, 'Yard<sup>2</sup>'));
            },
            $this->function_strings[18] => function($num){
                $result = $num * 0.62137119;
                return array($result, $this->pluralize($result, 'Mile'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->functionInputs = array(
            $this->function_strings[1] => array(
                'number_input' => 'Celsius (input): ',
            ),
            $this->function_strings[2] => array(
                'number_input' => 'Centimeters (input): ',
            ),
            $this->function_strings[3] => array(
                'number_input' => 'Centimeters (input): ',
            ),
            $this->function_strings[4] => array(
                'number_input' => 'Cubic Meters (input): ',
            ),
            $this->function_strings[5] => array(
                'number_input' => 'Cubic Meters (input): ',
            ),
            $this->function_strings[6] => array(
                'number_input' => 'Grams (input): ',
            ),
            $this->function_strings[7] => array(
                'number_input' => 'Kilograms (input): ',
            ),
            $this->function_strings[8] => array(
                'number_input' => 'Liters (input): ',
            ),
            $this->function_strings[9] => array(
                'number_input' => 'Liters (input): ',
            ),
            $this->function_strings[10] => array(
                'number_input' => 'Liters (input): ',
            ),
            $this->function_strings[11] => array(
                'number_input' => 'Meters (input): ',
            ),
            $this->function_strings[12] => array(
                'number_input' => 'Meters (input): ',
            ),
            $this->function_strings[13] => array(
                'number_input' => 'Meters (input): ',
            ),
            $this->function_strings[14] => array(
                'number_input' => 'Millimeters (input): ',
            ),
            $this->function_strings[15] => array(
                'number_input' => 'Square Kilometers (input): ',
            ),
            $this->function_strings[16] => array(
                'number_input' => 'Square Meters (input): ',
            ),
            $this->function_strings[17] => array(
                'number_input' => 'Square Meters (input): ',
            ),
            $this->function_strings[18] => array(
                'number_input' => 'Kilometers (input): ',
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[1] => array(
                'Formula:<br>' => '(Celsius * 9/5) + 32'
            ),
            $this->function_strings[2] => array(
                'Formula:<br>' => 'Centimeter * 0.39370079'
            ),
            $this->function_strings[3] => array(
                'Formula:<br>' => 'Centimeter * 0.032808399'
            ),
            $this->function_strings[4] => array(
                'Formula:<br>' => 'Cubic Meter * 35.314667'
            ),
            $this->function_strings[5] => array(
                'Formula:<br>' => 'Cubic Meter * 1.3079506'
            ),
            $this->function_strings[6] => array(
                'Formula:<br>' => 'Grams * 0.035273962'
            ),
            $this->function_strings[7] => array(
                'Formula:<br>' => 'Kilogram * 2.2046226'
            ),
            $this->function_strings[8] => array(
                'Formula:<br>' => 'Liter * 0.26417205'
            ),
            $this->function_strings[9] => array(
                'Formula:<br>' => 'Liter * 2.1133764'
            ),
            $this->function_strings[10] => array(
                'Formula:<br>' => 'Liter * 1.0566882'
            ),
            $this->function_strings[11] => array(
                'Formula:<br>' => 'Meter * 3.2808399'
            ),
            $this->function_strings[12] => array(
                'Formula:<br>' => 'Meter * 0.00062137119'
            ),
            $this->function_strings[13] => array(
                'Formula:<br>' => 'Meter * 1.0936133'
            ),
            $this->function_strings[14] => array(
                'Formula:<br>' => 'Millimeter * 0.039370079'
            ),
            $this->function_strings[15] => array(
                'Formula:<br>' => 'Square Kilometer * 0.38610216'
            ),
            $this->function_strings[16] => array(
                'Formula:<br>' => 'Square Meter * 10.76391'
            ),
            $this->function_strings[17] => array(
                'Formula:<br>' => 'Square Meter * 1.19599'
            ),
            $this->function_strings[18] => array(
                'Formula:<br>' => 'Kilometer * 0.62137119'
            ),
        );
        #}}}

    }
}
