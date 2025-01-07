<?php
# SYNOPSIS: Culinary Conversions
#
# Culinary.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:43:20 PM PDT
# Last Update: 2022-03-04: 09:13
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
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Cups to Liters',
                function($num){
                    $result = $num * 0.23658824;
                    return array($result, $this->pluralize($result, 'Liter'));
                },
                array(
                    'number_input' => 'Cups (input): ',
                ),
                array(
                    '' => 'Cups * 0.23659924'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cups to Pints',
                function($num){
                    $result = $num * 0.5;
                    return array($result, $this->pluralize($result, 'Pint'));
                },
                array(
                    'number_input' => 'Cups (input): ',
                ),
                array(
                    '' => 'Cups * 0.5'
                ),
            ),
            FormulaBase::create_func_entry(
                'Dashes to Teaspoons',
                function($num){
                    $result = $num * 0.125;
                    return array($result, $this->pluralize($result, 'Teaspoon'));
                },
                array(
                    'number_input' => 'Dashes (input): ',
                ),
                array(
                    '' => 'Dashes * 0.125'
                ),
            ),
            FormulaBase::create_func_entry(
                'Fluid Ounces to Milliliters',
                function($num){
                    $result = $num * 29.57353 ;
                    return array($result, $this->pluralize($result, 'Milliliter'));
                },
                array(
                    'number_input' => 'Fluuid Ounces (input): ',
                ),
                array(
                    '' => 'Fluid Ounces * 29.57353'
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
                'Gallons to Pecks',
                function($num){
                    $result = $num * 0.4296835;
                    return array($result, $this->pluralize($result, 'Peck'));
                },
                array(
                    'number_input' => 'Gallons (input): ',
                ),
                array(
                    '' => 'Gallons * 0.4296835'
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
                'Grams to Pounds',
                function($num){
                    $result = $num * 0.0022046226;
                    return array($result, $this->pluralize($result, 'Pound'));
                },
                array(
                    'number_input' => 'Grams (input): ',
                ),
                array(
                    '' => 'Grams * 0.0022046226'
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
                    '' => 'Kilograms * 2.2046226'
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
                    '' => 'Liters * 0.26417205'
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
                    '' => 'Liters * 2.1133764'
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
                    '' => 'Liters * 1.0567'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pecks to Bushels',
                function($num){
                    $result = $num * 0.25;
                    return array($result, $this->pluralize($result, 'Bushel'));
                },
                array(
                    'number_input' => 'Pecks (input): ',
                ),
                array(
                    '' => 'Pecks * 0.25'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pints to Liters',
                function($num){
                    $result = $num * 0.47317647;
                    return array($result, $this->pluralize($result, 'Liter'));
                },
                array(
                    'number_input' => 'Pints (input): ',
                ),
                array(
                    '' => 'Pints * 0.47317647'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pints to Quarts',
                function($num){
                    $result = $num * 0.5;
                    return array($result, $this->pluralize($result, 'Quart'));
                },
                array(
                    'number_input' => 'Pints (input): ',
                ),
                array(
                    '' => 'Pints * 0.5'
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
                'Portion Size',
                function($num, $num2, $num3, $num4, $num5){
                    $old_yield = $num * $num2;
                    $new_yield = $num3 * $num4;
                    $conversion_factor = $new_yield / $old_yield;
                    $result = $num5 * $conversion_factor;
                    return array($this->prec($result, 2), $this->pluralize($result, 'New Quantity'));
                },
                array(
                    'number_input' => 'Original Yields (input): ',
                    'number_input2' => 'Original Serving Size (input): ',
                    'number_input3' => 'Desired Portions (input): ',
                    'number_input4' => 'Desired Portion Size (input): ',
                    'number_input5' => 'Old Ingrediant Quantity (input): '
                ),
                array(
                    '' => '((Original Yield * Original Serving Size) / (Desired Portions * Desired Portion Size)) * Old Ingrediant Quantity'
                ),
            ),
            FormulaBase::create_func_entry(
                'Quarts to Gallons',
                function($num){
                    $result = $num * 0.25;
                    return array($result, $this->pluralize($result, 'Gallon'));
                },
                array(
                    'number_input' => 'Quarts (input): ',
                ),
                array(
                    '' => 'Quarts * 0.25'
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
                'Tablespoons to Cups',
                function($num){
                    $result = $num * 0.0625;
                    return array($result, $this->pluralize($result, 'Cup'));
                },
                array(
                    'number_input' => 'Tablespoons (input): ',
                ),
                array(
                    '' => 'Tablespoons * 0.0625'
                ),
            ),
            FormulaBase::create_func_entry(
                'Tablespoons to Fluid Ounces',
                function($num){
                    $result = $num * 0.5;
                    return array($result, $this->pluralize($result, 'Fluid Ounce'));
                },
                array(
                    'number_input' => 'Tablespoons (input): ',
                ),
                array(
                    '' => 'Tablespoons * 0.5'
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
                'Teaspoons to Tablespoons',
                function($num){
                    $result = $num * 0.33333333;
                    return array($result, $this->pluralize($result, 'Tablespoon'));
                },
                array(
                    'number_input' => 'Teaspoons (input): ',
                ),
                array(
                    '' => 'Teaspoons * 0.33333333'
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
                'Unit Cost',
                function($num, $num2){
                    $result = $num / $num;
                    return array($this->money($result), $this->pluralize($result, 'Cost per Unit'));
                },
                array(
                    'number_input' => 'As Purchased Cost (input): ',
                    'number_input2' => 'Number of Units (input): ',
                ),
                array(
                    '' => 'As Purchased Cost / Number Of Units'
                ),
            ),
            FormulaBase::create_func_entry(
                'Recipe Cost',
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->money($result), $this->pluralize($result, 'Cost Per Portion'));
                },
                array(
                    'number_input' => 'Total Recipe Cost (input): ',
                    'number_input2' => 'Number of Portions (input): ',
                ),
                array(
                    '' => 'Total Recipe Cost / Number of Portions'
                ),
            ),
            FormulaBase::create_func_entry(
                'Selling Price',
                function($num, $num2){
                    $result = $num / ($num2 / 100);
                    return array($this->money($result), $this->pluralize($result, 'Selling Price'));
                },
                array(
                    'number_input' => 'Plate Cost (input): ',
                    'number_input2' => 'Food Cost Percentage (input): ',
                ),
                array(
                    '' => 'Plate Cost / (Food Cost Percentage / 100)'
                ),
            ),
            FormulaBase::create_func_entry(
                'Ounces to Grams',
                function($num){
                    $result = $num * 28.349523;
                    return array($result, $this->pluralize($result, 'Gram'));
                },
                array(
                    'number_input' => 'Ounce (input): ',
                ),
                array(
                    '' => 'Ounce * 28.349523'
                ),
            ),
        );
    }
}

$cats["Culinary"] = new Culinary();
