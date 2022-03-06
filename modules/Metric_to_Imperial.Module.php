<?php
# SYNOPSIS: Convert from Metric to Imperial units
#
# Metric_to_Imperial.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:47:57 PM PDT
# Last Update: 2022-03-05: 18:55
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
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Celsius to Fahrenheit',
                function($num){
                    $result = ($num * 9/5) + 32;
                    return array($result, $this->pluralize($result, 'Fahrenheit'));
                },
                array(
                    'number_input' => 'Celsius (input): ',
                ),
                array(
                    '' => '(Celsius * 9/5) + 32'
                ),
            ),
            FormulaBase::create_func_entry(
                'Centimeters to Inches',
                function($num){
                    $result = $num * 0.39370079;
                    return array($result, $this->pluralize($result, 'Inch'));
                },
                array(
                    'number_input' => 'Centimeters (input): ',
                ),
                array(
                    '' => 'Centimeter * 0.39370079'
                ),
            ),
            FormulaBase::create_func_entry(
                'Centimeters to Feet',
                function($num){
                    $result = $num * 0.032808399;
                    return array($result, $this->pluralize($result, 'Foot'));
                },
                array(
                    'number_input' => 'Centimeters (input): ',
                ),
                array(
                    '' => 'Centimeter * 0.032808399'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Meters to Cubic Feet',
                function($num){
                    $result = $num * 35.314667;
                    return array($result, $this->pluralize($result, 'Foot<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Meters (input): ',
                ),
                array(
                    '' => 'Cubic Meter * 35.314667'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Meters to Cubic Yards',
                function($num){
                    $result = $num * 1.3079506;
                    return array($result, $this->pluralize($result, 'Yard<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Meters (input): ',
                ),
                array(
                    '' => 'Cubic Meter * 1.3079506'
                ),
            ),
            FormulaBase::create_func_entry(
                'Grams to Ounces',
                function($num){
                    $result = $num * 0.035273962;
                    return array($result, $this->pluralize($result, 'Ounce'));
                },
                array(
                    'number_input' => 'Grams (input): ',
                ),
                array(
                    '' => 'Grams * 0.035273962'
                ),
            ),
            FormulaBase::create_func_entry(
                'Kilograms to Pounds',
                function($num){
                    $result = $num * 2.2046226;
                    return array($result, $this->pluralize($result, 'Pound'));
                },
                array(
                    'number_input' => 'Kilograms (input): ',
                ),
                array(
                    '' => 'Kilogram * 2.2046226'
                ),
            ),
            FormulaBase::create_func_entry(
                'Liters to Gallons',
                function($num){
                    $result = $num * 0.26417205;
                    return array($result, $this->pluralize($result, 'Gallon'));
                },
                array(
                    'number_input' => 'Liters (input): ',
                ),
                array(
                    '' => 'Liter * 0.26417205'
                ),
            ),
            FormulaBase::create_func_entry(
                'Liters to Pints',
                function($num){
                    $result = $num * 2.1133764;
                    return array($result, $this->pluralize($result, 'Pint'));
                },
                array(
                    'number_input' => 'Liters (input): ',
                ),
                array(
                    '' => 'Liter * 2.1133764'
                ),
            ),
            FormulaBase::create_func_entry(
                'Liters to Quarts',
                function($num){
                    $result = $num * 1.0566882;
                    return array($result, $this->pluralize($result, 'Quart'));
                },
                array(
                    'number_input' => 'Liters (input): ',
                ),
                array(
                    '' => 'Liter * 1.0566882'
                ),
            ),
            FormulaBase::create_func_entry(
                'Meters to Feet',
                function($num){
                    $result = $num * 3.2808399;
                    return array($result, $this->pluralize($result, 'Foot'));
                },
                array(
                    'number_input' => 'Meters (input): ',
                ),
                array(
                    '' => 'Meter * 3.2808399'
                ),
            ),
            FormulaBase::create_func_entry(
                'Meters to Miles',
                function($num){
                    $result = $num * 0.00062137119;
                    return array($result, $this->pluralize($result, 'Mile'));
                },
                array(
                    'number_input' => 'Meters (input): ',
                ),
                array(
                    '' => 'Meter * 0.00062137119'
                ),
            ),
            FormulaBase::create_func_entry(
                'Meters to Yards',
                function($num){
                    $result = $num * 1.0936133;
                    return array($result, $this->pluralize($result, 'Yard'));
                },
                array(
                    'number_input' => 'Meters (input): ',
                ),
                array(
                    '' => 'Meter * 1.0936133'
                ),
            ),
            FormulaBase::create_func_entry(
                'Millimeters to Inches',
                function($num){
                    $result = $num * 0.039370079;
                    return array($result, $this->pluralize($result, 'Inch'));
                },
                array(
                    'number_input' => 'Millimeters (input): ',
                ),
                array(
                    '' => 'Millimeter * 0.039370079'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Kilometers to Square Miles',
                function($num){
                    $result = $num * 0.38610216;
                    return array($result, $this->pluralize($result, 'Mile<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Kilometers (input): ',
                ),
                array(
                    '' => 'Square Kilometer * 0.38610216'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Meters to Square Feet',
                function($num){
                    $result = $num * 10.76391;
                    return array($result, $this->pluralize($result, 'Foot<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Meters (input): ',
                ),
                array(
                    '' => 'Square Meter * 10.76391'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Meters to Square Yards',
                function($num){
                    $result = $num * 1.19599;
                    return array($result, $this->pluralize($result, 'Yard<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Meters (input): ',
                ),
                array(
                    '' => 'Square Meter * 1.19599'
                ),
            ),
            FormulaBase::create_func_entry(
                'Kilometers to Miles',
                function($num){
                    $result = $num * 0.62137119;
                    return array($result, $this->pluralize($result, 'Mile'));
                },
                array(
                    'number_input' => 'Kilometers (input): ',
                ),
                array(
                    '' => 'Kilometer * 0.62137119'
                ),
            ),
        );
    }
}
$cats["Metric to Imperial"] = new Metric_to_Imperial();
