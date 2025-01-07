<?php
# SYNOPSIS: Imperial to Metric Conversions
#
# Imperial_to_Metric.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:46:12 PM PDT
# Last Update: 2022-03-05: 19:17
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
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Fahrenheit to Celsius',
                function($num){
                    $result = ($num - 32) * 5/9;
                    return array($result, $this->pluralize($result, 'Celsius'));
                },
                array(
                    'number_input' => 'Fahrenheit (input): ',
                ),
                array(
                    '' => '(Fahrenheit - 32) * 5/9'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Yards to Cubic Meters',
                function($num){
                    $result = $num * 0.76455486;
                    return array($result, $this->pluralize($result, 'Meter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Yards (input): ',
                ),
                array(
                    '' => 'Cubic Yards * 0.76455486'
                ),
            ),
            FormulaBase::create_func_entry(
                'Feet to Meters',
                function($num){
                    $result = $num * 0.3048;
                    return array($result, $this->pluralize($result, 'Meter'));
                },
                array(
                    'number_input' => 'Feet (input): ',
                ),
                array(
                    '' => 'Feet * 0.3048'
                ),
            ),
            FormulaBase::create_func_entry(
                'Gallons to Liters',
                function($num){
                    $result = $num * 3.7854118;
                    return array($result, $this->pluralize($result, 'Liter'));
                },
                array(
                    'number_input' => 'Gallons (input): ',
                ),
                array(
                    '' => 'Gallons * 3.7854118'
                ),
            ),
            FormulaBase::create_func_entry(
                'Inches to Millimeters',
                function($num){
                    $result = $num * 25.4;
                    return array($result, $this->pluralize($result, 'Millimeter'));
                },
                array(
                    'number_input' => 'Inches (input): ',
                ),
                array(
                    '' => 'Inches * 25.4'
                ),
            ),
            FormulaBase::create_func_entry(
                'Inches to Centimeters',
                function($num){
                    $result = $num * 2.54;
                    return array($result, $this->pluralize($result, 'Centimeter'));
                },
                array(
                    'number_input' => 'Inches (input): ',
                ),
                array(
                    '' => 'Inches * 2.54'
                ),
            ),
            FormulaBase::create_func_entry(
                'Miles to Kilometers',
                function($num){
                    $result = $num * 1.609344;
                    return array($result, $this->pluralize($result, 'Kilometer'));
                },
                array(
                    'number_input' => 'Miles (input): ',
                ),
                array(
                    '' => 'Miles * 1.609344'
                ),
            ),
            FormulaBase::create_func_entry(
                'Ounces to Grams',
                function($num){
                    $result = $num * 28.349523;
                    return array($result, $this->pluralize($result, 'Gram'));
                },
                array(
                    'number_input' => 'Ounces (input): ',
                ),
                array(
                    '' => 'Ounces * 28.349523'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pints to Liters',
                function($num){
                    $result = $num * 0.47317647;
                    return array($result, $this->pluralize($result, 'Liter'));
                },
                array(
                    'number_input' => 'Pint (input): ',
                ),
                array(
                    '' => 'Pints * 0.47317647'
                ),
            ),
            FormulaBase::create_func_entry(
                'Quarts to Liters',
                function($num){
                    $result = $num * 0.94635295;
                    return array($result, $this->pluralize($result, 'Liter'));
                },
                array(
                    'number_input' => 'Quarts (input): ',
                ),
                array(
                    '' => 'Quarts * 0.94635295'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pounds to Kilograms',
                function($num){
                    $result = $num * 0.45359237;
                    return array($result, $this->pluralize($result, 'Kilogram'));
                },
                array(
                    'number_input' => 'Pounds (input): ',
                ),
                array(
                    '' => 'Pounds * 0.45359237'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Feet to Square Meters',
                function($num){
                    $result = $num * 0.09290304;
                    return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Feet (input): ',
                ),
                array(
                    '' => 'Square Feet * 0.09290304'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Miles to Square Kilometers',
                function($num){
                    $result = $num * 2.5899881;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Miles (input): ',
                ),
                array(
                    '' => 'Square Mile * 2.5899881'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Yards to Square Meters',
                function($num){
                    $result = $num * 0.83612736;
                    return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Yards (input): ',
                ),
                array(
                    '' => 'Square Yard * 0.83612736'
                ),
            ),
            FormulaBase::create_func_entry(
                'Yards to Meters',
                function($num){
                    $result = $num * 0.9144;
                    return array($result, $this->pluralize($result, 'Meter'));
                },
                array(
                    'number_input' => 'Yards (input): ',
                ),
                array(
                    '' => 'Yards * 0.9144'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Yards to Cubic Centimeters',
                function($num){
                    $result = $num * 764554.86;
                    return array($result, $this->pluralize($result, 'Centimeter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Yards (input): ',
                ),
                array(
                    '' => 'Cubic Yards * 764554.86'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Yards to Cubic Millimeters',
                function($num){
                    $result = $num * 764554860;
                    return array($result, $this->pluralize($result, 'Millimeter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Yards (input): ',
                ),
                array(
                    '' => 'Cubic Yard * 764554860'
                ),
            ),
            FormulaBase::create_func_entry(
                'Inches to Meters',
                function($num){
                    $result = $num * 0.0254;
                    return array($result, $this->pluralize($result, 'Meter'));
                },
                array(
                    'number_input' => 'Inches (input): ',
                ),
                array(
                    '' => 'Inches * 0.0254'
                ),
            ),
            FormulaBase::create_func_entry(
                'Inches to Kilometers',
                function($num){
                    $result = $num * 2.54e-5;
                    return array($result, $this->pluralize($result, 'Kilometer'));
                },
                array(
                    'number_input' => 'Inches (input): ',
                ),
                array(
                    '' => 'Inches * 25400000'
                ),
            ),
            FormulaBase::create_func_entry(
                'Feet to Millimeters',
                function($num){
                    $result = $num * 304.8;
                    return array($result, $this->pluralize($result, 'Millimeter'));
                },
                array(
                    'number_input' => 'Feet (input): ',
                ),
                array(
                    '' => 'Feet * 304.8'
                ),
            ),
            FormulaBase::create_func_entry(
                'Feet to Centimeters',
                function($num){
                    $result = $num * 30.48;
                    return array($result, $this->pluralize($result, 'Centimeter'));
                },
                array(
                    'number_input' => 'Feet (input): ',
                ),
                array(
                    '' => 'Feet * 30.48'
                ),
            ),
            FormulaBase::create_func_entry(
                'Feet to Kilometers',
                function($num){
                    $result = $num * 0.0003048;
                    return array($result, $this->pluralize($result, 'Kilometer'));
                },
                array(
                    'number_input' => 'Feet    (input): ',
                ),
                array(
                    '' => 'Feet * 0.0003048'
                ),
            ),
            FormulaBase::create_func_entry(
                'Gallons to Centiliters',
                function($num){
                    $result = $num * 378.54118;
                    return array($result, $this->pluralize($result, 'Centiliter'));
                },
                array(
                    'number_input' => 'Gallons (input): ',
                ),
                array(
                    '' => 'Gallons * 378.54118'
                ),
            ),
            FormulaBase::create_func_entry(
                'Gallons to Deciliteres',
                function($num){
                    $result = $num * 37.854118;
                    return array($result, $this->pluralize($result, 'Deciliter'));
                },
                array(
                    'number_input' => 'Gallons (input): ',
                ),
                array(
                    '' => 'Gallons * 37.854118'
                ),
            ),
            FormulaBase::create_func_entry(
                'Gallons to Milliliters',
                function($num){
                    $result = $num * 3785.4118;
                    return array($result, $this->pluralize($result, 'Milliliter'));
                },
                array(
                    'number_input' => 'Gallons (input): ',
                ),
                array(
                    '' => 'Gallons * 3785.4118'
                ),
            ),
            FormulaBase::create_func_entry(
                'Miles to Millimeters',
                function($num){
                    $result = $num * 1609344;
                    return array($result, $this->pluralize($result, 'Millimeter'));
                },
                array(
                    'number_input' => 'Miles (input): ',
                ),
                array(
                    '' => 'Miles * 1609344'
                ),
            ),
            FormulaBase::create_func_entry(
                'Miles to Centimeters',
                function($num){
                    $result = $num * 160934.4;
                    return array($result, $this->pluralize($result, 'Centimeter'));
                },
                array(
                    'number_input' => 'Miles (input): ',
                ),
                array(
                    '' => 'Miles * 160934.4'
                ),
            ),
            FormulaBase::create_func_entry(
                'Miles to Meters',
                function($num){
                    $result =  $num * 1603.344;
                    return array($result, $this->pluralize($result, 'Meter'));
                },
                array(
                    'number_input' => 'Miles (input): ',
                ),
                array(
                    '' => 'Miles * 1609.344'
                ),
            ),
            FormulaBase::create_func_entry(
                'Ounces to Kilograms',
                function($num){
                    $result = $num * 0.028349523;
                    return array($result, $this->pluralize($result, 'Kilogram'));
                },
                array(
                    'number_input' => 'Ounces (input): ',
                ),
                array(
                    '' => 'Ounces * 0.028349523'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pints to Centiliters',
                function($num){
                    $result = $num * 47.317647;
                    return array($result, $this->pluralize($result, 'Centiliter'));
                },
                array(
                    'number_input' => 'Pints (input): ',
                ),
                array(
                    '' => 'Pints * 47.317647'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pints to Deciliters',
                function($num){
                    $result = $num * 4.7317647;
                    return array($result, $this->pluralize($result, 'Deciliter'));
                },
                array(
                    'number_input' => 'Pints (input): ',
                ),
                array(
                    '' => 'Pints * 4.7317647'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pints to Milliliters',
                function($num){
                    $result = $num * 473.17647;
                    return array($result, $this->pluralize($result, 'Milliliter'));
                },
                array(
                    'number_input' => 'Pints (input): ',
                ),
                array(
                    '' => 'Pints * 473.17647'
                ),
            ),
            FormulaBase::create_func_entry(
                'Quarts to Centiliters',
                function($num){
                    $result = $num * 94.635295;
                    return array($result, $this->pluralize($result, 'Centiliter'));
                },
                array(
                    'number_input' => 'Quarts (input): ',
                ),
                array(
                    '' => 'Quarts * 94.635295'
                ),
            ),
            FormulaBase::create_func_entry(
                'Quarts to Milliliters',
                function($num){
                    $result = $num * 946.35295;
                    return array($result, $this->pluralize($result, 'Milliliter'));
                },
                array(
                    'number_input' => 'Quarts (input): ',
                ),
                array(
                    '' => 'Quarts * 946.35295'
                ),
            ),
            FormulaBase::create_func_entry(
                'Quarts to Deciliters',
                function($num){
                    $result = $num * 9.4635295;
                    return array($result, $this->pluralize($result, 'Deciliter'));
                },
                array(
                    'number_input' => 'Quarts (input): ',
                ),
                array(
                    '' => 'Quarts * 9.4635295'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pounds to Grams',
                function($num){
                    $result = $num * 453.59237;
                    return array($result, $this->pluralize($result, 'Gram'));
                },
                array(
                    'number_input' => 'Pounds (input): ',
                ),
                array(
                    '' => 'Pounds * 453.59237'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Feet to Square Centimeters',
                function($num){
                    $result = $num * 929.0304;
                    return array($result, $this->pluralize($result, 'Centimeter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Feet (input): ',
                ),
                array(
                    '' => 'Square Feet * 929.0304'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Feet to Square Millimeters',
                function($num){
                    $result = $num * 92903.04;
                    return array($result, $this->pluralize($result, 'Millimeter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Feet (input): ',
                ),
                array(
                    '' => 'Square Feet * 92903.04'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Feet to Square Kilometers',
                function($num){
                    $result = $num * 9.290304E-8;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Feet (input): ',
                ),
                array(
                    '' => 'Square Feet * 0.09290304'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Miles to Square Centimeters',
                function($num){
                    $result = $num * 2.5899881e10;
                    return array($result, $this->pluralize($result, 'Centimeter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Miles (input): ',
                ),
                array(
                    '' => 'Square Miles * 2589988100'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Miles to Square Millimeters',
                function($num){
                    $result = $num * 2.5899881e12;
                    return array($result, $this->pluralize($result, 'Millimeter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Miles (input): ',
                ),
                array(
                    '' => 'Square Miles * 2589988100000'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Miles to Square Meters',
                function($num){
                    $result = $num * 2589988.1;
                    return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Miles (input): ',
                ),
                array(
                    '' => 'Square Miles to 2589988.1'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Yards to Square Centimeters',
                function($num){
                    $result = $num * 8361.2736;
                    return array($result, $this->pluralize($result, 'Centimeter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Yards (input): ',
                ),
                array(
                    '' => 'Square Yards * 8361.2736'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Yards to Square Millimeters',
                function($num){
                    $result = $num * 836127.36;
                    return array($result, $this->pluralize($result, 'Millimeter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Yards (input): ',
                ),
                array(
                    '' => 'Square Yards * 836127.36'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Yards to Square Kilometers',
                function($num){
                    $result = $num * 8.3612736e-7;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Yards (input): ',
                ),
                array(
                    '' => 'Square Yards * 0.00000083612736'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Inches to Square Millimeters',
                function($num){
                    $result = $num * 645.16;
                    return array($result, $this->pluralize($result, 'Millimeter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Inches (input): ',
                ),
                array(
                    '' => 'Square Inches * 645.16'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Inches to Square Centimeters',
                function($num){
                    $result = $num * 6.4516;
                    return array($result, $this->pluralize($result, 'Centimeter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Inches (input): ',
                ),
                array(
                    '' => 'Square Inches * 6.4516'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Inches to Square Meters',
                function($num){
                    $result = $num * 0.00064516;
                    return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Inches (input): ',
                ),
                array(
                    '' => 'Square Inches * 0.00064516'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Inches to Square Kilometers',
                function($num){
                    $result = $num * 6.4516e-10;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Inches (input): ',
                ),
                array(
                    '' => 'Square Inches * 0.00000000064516'
                ),
            ),
            FormulaBase::create_func_entry(
                'Yards to Millimeters',
                function($num){
                    $result = $num * 914.4;
                    return array($result, $this->pluralize($result, 'Millimeter'));
                },
                array(
                    'number_input' => 'Yards (input): ',
                ),
                array(
                    '' => 'Yards * 914.4'
                ),
            ),
            FormulaBase::create_func_entry(
                'Yards to Centimeters',
                function($num){
                    $result = $num * 91.44;
                    return array($result, $this->pluralize($result, 'Centimeter'));
                },
                array(
                    'number_input' => 'Yards (input): ',
                ),
                array(
                    '' => 'Yards * 91.44'
                ),
            ),
            FormulaBase::create_func_entry(
                'Yards to Kilometers',
                function($num){
                    $result = $num * 0.0009144;
                    return array($result, $this->pluralize($result, 'Kilometer'));
                },
                array(
                    'number_input' => 'Yards (input): ',
                ),
                array(
                    '' => 'Yards * 0.0009144'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Yards to Cubic Kilometers',
                function($num){
                    $result = $num * 7.6455486e-10;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Yards (input): ',
                ),
                array(
                    '' => 'Cubic Yards * 0.00000000076455486'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cups to Milliliters',
                function($num){
                    $result = $num * 236.58824;
                    return array($result, $this->pluralize($result, 'Milliliter'));
                },
                array(
                    'number_input' => 'Cups (input): ',
                ),
                array(
                    '' => 'Cups * 236.58824'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cups to Centiliters',
                function($num){
                    $result = $num * 23.658824;
                    return array($result, $this->pluralize($result, 'Centiliter'));
                },
                array(
                    'number_input' => 'Cups (input): ',
                ),
                array(
                    '' => 'Cups * 23.658824'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cups to Deciliters',
                function($num){
                    $result = $num * 2.3658824;
                    return array($result, $this->pluralize($result, 'Deciliter'));
                },
                array(
                    'number_input' => 'Cups (input): ',
                ),
                array(
                    '' => 'Cups * 2.3658824'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cups to Liters',
                function($num){
                    $result = $num * 0.23658824;
                    return array($result, $this->pluralize($result, 'Liter'));
                },
                array(
                    'number_input' => 'Cups    (input): ',
                ),
                array(
                    '' => 'Cups * 0.23658824'
                ),
            ),
            FormulaBase::create_func_entry(
                'Tablespoons to Milliliters',
                function($num){
                    $result = $num * 14.786765;
                    return array($result, $this->pluralize($result, 'Milliliter'));
                },
                array(
                    'number_input' => 'Tablespoons (input): ',
                ),
                array(
                    '' => 'Tablespoons * 14.786765'
                ),
            ),
            FormulaBase::create_func_entry(
                'Tablespoons to Centiliters',
                function($num){
                    $result = $num * 1.4786765;
                    return array($result, $this->pluralize($result, 'Centiliter'));
                },
                array(
                    'number_input' => 'Tablespoons (input): ',
                ),
                array(
                    '' => 'Tablespoons * 1.4786764'
                ),
            ),
            FormulaBase::create_func_entry(
                'Tablespoons to Deciliters',
                function($num){
                    $result = $num * 0.14786765;
                    return array($result, $this->pluralize($result, 'Deciliter'));
                },
                array(
                    'number_input' => 'Tablespoons (input): ',
                ),
                array(
                    '' => 'Tablespoons * 0.14786764'
                ),
            ),
            FormulaBase::create_func_entry(
                'Tablespoons to Liters',
                function($num){
                    $result = $num * 0.014786765;
                    return array($result, $this->pluralize($result, 'Liter'));
                },
                array(
                    'number_input' => 'Tablespoons (input): ',
                ),
                array(
                    '' => 'Tablespoons * 0.014786764'
                ),
            ),
            FormulaBase::create_func_entry(
                'Teaspoons to Milliliters',
                function($num){
                    $result = $num * 4.9289216;
                    return array($result, $this->pluralize($result, 'Milliliter'));
                },
                array(
                    'number_input' => 'Teaspoons (input): ',
                ),
                array(
                    '' => 'Teaspoons * 4.9289216'
                ),
            ),
            FormulaBase::create_func_entry(
                'Teaspoons to Centiliters',
                function($num){
                    $result = $num * 0.49289216;
                    return array($result, $this->pluralize($result, 'Centiliter'));
                },
                array(
                    'number_input' => 'Teaspoons (input): ',
                ),
                array(
                    '' => 'Teaspoons * 0.49289216'
                ),
            ),
            FormulaBase::create_func_entry(
                'Teaspoons to Deciliters',
                function($num){
                    $result = $num * 0.049289216;
                    return array($result, $this->pluralize($result, 'Deciliter'));
                },
                array(
                    'number_input' => 'Teaspoons (input): ',
                ),
                array(
                    '' => 'Teaspoons * 0.049289216'
                ),
            ),
            FormulaBase::create_func_entry(
                'Teaspoons to Liters',
                function($num){
                    $result = $num * 0.0049289216;
                    return array($result, $this->pluralize($result, 'Liter'));
                },
                array(
                    'number_input' => 'Teaspoons (input): ',
                ),
                array(
                    '' => 'Teaspoons * 0.0049289216'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Inches to Cubic Millimeters',
                function($num){
                    $result = $num * 16387.064;
                    return array($result, $this->pluralize($result, 'Millimeter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Inches (input): ',
                ),
                array(
                    '' => 'Inch<sup>3</sup> * 16387.064'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Inches to Cubic Centimeters',
                function($num){
                    $result = $num * 16.387064;
                    return array($result, $this->pluralize($result, 'Centimeter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Inches (input): ',
                ),
                array(
                    '' => 'Inch<sup>3</sup> * 16.387064'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Inches to Cubic Meters',
                function($num){
                    $result = $num * 1.6387064e-5;
                    return array($result, $this->pluralize($result, 'Meter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Inches (input): ',
                ),
                array(
                    '' => 'Inch<sup>3</sup> * 0.000016387064'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Inches to Cubic Kilometers',
                function($num){
                    $result = $num * 1.6387064e-14;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Inches (input): ',
                ),
                array(
                    '' => 'Inch<sup>3</sup> * 1.6387064e-14'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Feet to Cubic Millimeters',
                function($num){
                    $result = $num * 28316847;
                    return array($result, $this->pluralize($result, 'Millimeter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Feet (input): ',
                ),
                array(
                    '' => 'Feet<sup>3</sup> * 28316847'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Feet to Cubic Centimeters',
                function($num){
                    $result = $num * 28316.847;
                    return array($result, $this->pluralize($result, 'Centimeter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Feet (input): ',
                ),
                array(
                    '' => 'Feet<sup>3</sup> * 28316.847'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Feet to Cubic Meters',
                function($num){
                    $result = $num * 0.028316847;
                    return array($result, $this->pluralize($result, 'Meter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Feet (input): ',
                ),
                array(
                    '' => 'Feet<sup>3</sup> * 0.028316847'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Feet to Cubic Kilometers',
                function($num){
                    $result = $num * 2.8316847e-11;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Feet (input): ',
                ),
                array(
                    '' => 'Feet<sup>3</sup> * 2.8316847e-11'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Miles to Cubic Millimeters',
                function($num){
                    $result = $num * 4.1681818e18;
                    return array($result, $this->pluralize($result, 'Millimeter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Miles (input): ',
                ),
                array(
                    '' => 'Miles<sup>3</sup> * 4.1681818e+18'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Miles to Cubic Centimeters',
                function($num){
                    $result = $num * 4.1681818e15;
                    return array($result, $this->pluralize($result, 'Centimeter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Miles (input): ',
                ),
                array(
                    '' => 'Miles<sup>3</sup> * 4.1681818e+15'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Miles to Cubic Meters',
                function($num){
                    $result = $num * 4.1681818e9;
                    return array($result, $this->pluralize($result, 'Meter<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Miles (input): ',
                ),
                array(
                    '' => 'Miles<sup>3</sup> * 4.1681818e+9'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cubic Miles to Cubic Kilometers',
                function($num){
                    $result = $num * 4.1681818;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>3</sup>'));
                },
                array(
                    'number_input' => 'Cubic Miles (input): ',
                ),
                array(
                    '' => 'Miles<sup>3</sup> * 4.1681818'
                ),
            ),
        );
    }
}
$cats["Imperial to Metric"] = new Imperial_to_Metric();
