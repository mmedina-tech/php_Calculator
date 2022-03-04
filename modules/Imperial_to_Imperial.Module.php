<?php
# SYNOPSIS: Imperial to Imperial conversions
#
# Imperial_to_Imperial.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:45:49 PM PDT
# Last Update: 2022-03-04: 14:56
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

class Imperial_to_Imperial extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Feet to Miles',
                function($num){
                    $result = $num * 0.00018939394;
                    return array($result, $this->pluralize($result, 'Mile'));
                },
                array(
                    'number_input' => 'Feet (input): ',
                ),
                array(
                    'Formula:<br>' => 'Feet * 0.00018939394'
                ),
            ),
            FormulaBase::create_func_entry(
                'Miles to Feet',
                function($num){
                    $result = $num * 5280;
                    return array($result, $this->pluralize($result, 'Foot'));
                },
                array(
                    'number_input' => 'Miles (input): ',
                ),
                array(
                    'Formula:<br>' => 'Mile * 5280'
                ),
            ),
            FormulaBase::create_func_entry(
                'Ounces to Pounds',
                function($num){
                    $result = $num * 0.0625;
                    return array($result, $this->pluralize($result, 'Pound'));
                },
                array(
                    'number_input' => 'Ounces (input): ',
                ),
                array(
                    'Formula:<br>' => 'Ounce * 0.0625'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pounds to Ounces',
                function($num){
                    $result = $num * 16;
                    return array($result, $this->pluralize($result, 'Ounce'));
                },
                array(
                    'number_input' => 'Pounds (input): ',
                ),
                array(
                    'Formula:<br>' => 'Pound * 16'
                ),
            ),
            FormulaBase::create_func_entry(
                'Tons to Pounds',
                function($num){
                    $result = $num * 2000;
                    return array($result, $this->pluralize($result, 'Pound'));
                },
                array(
                    'number_input' => 'Tons (input): ',
                ),
                array(
                    'Formula:<br>' => 'Ton * 2000'
                ),
            ),
            FormulaBase::create_func_entry(
                'Yards to Miles',
                function($num){
                    $result = $num * 0.00056818182;
                    return array($result, $this->pluralize($result, 'Mile'));
                },
                array(
                    'number_input' => 'Yards (input): ',
                ),
                array(
                    'Formula:<br>' => 'Yard * 0.00056818182'
                ),
            ),
            FormulaBase::create_func_entry(
                'Feet to Yards',
                function($num){
                    $result = $num * 0.333333333333;
                    return array($result, $this->pluralize($result, 'Yard'));
                },
                array(
                    'number_input' => 'Feet (input): ',
                ),
                array(
                    'Formula:<br>' => 'Feet * 0.333333333333'
                ),
            ),
            FormulaBase::create_func_entry(
                'Feet to Inches',
                function($num){
                    $result = $num * 12;
                    return array($result, $this->pluralize($result, 'Inch'));
                },
                array(
                    'number_input' => 'Feet (input): ',
                ),
                array(
                    'Formula:<br>' => 'Feet * 12'
                ),
            ),
            FormulaBase::create_func_entry(
                'Inches to Feet',
                function($num){
                    $result = $num * 0.0833333333333;
                    return array($result, $this->pluralize($result, 'Foot'));
                },
                array(
                    'number_input' => 'Inches (input): ',
                ),
                array(
                    'Formula:<br>' => 'Inch * 0.833333333333'
                ),
            ),
            FormulaBase::create_func_entry(
                'Inches to Yards',
                function($num){
                    $result = $num * 0.027777778;
                    return array($result, $this->pluralize($result, 'Yard'));
                },
                array(
                    'number_input' => 'Inches (input): ',
                ),
                array(
                    'Formula:<br>' => 'Inch * 0.27777778'
                ),
            ),
            FormulaBase::create_func_entry(
                'Inches to Miles',
                function($num){
                    $result = $num * 0.0000015782828;
                    return array($result, $this->pluralize($result, 'Mile'));
                },
                array(
                    'number_input' => 'Inches (input): ',
                ),
                array(
                    'Formula:<br>' => 'Inch * 0.0000015782828'
                ),
            ),
            FormulaBase::create_func_entry(
                'Yards to Feet',
                function($num){
                    $result = $num * 3;
                    return array($result, $this->pluralize($result, 'Foot'));
                },
                array(
                    'number_input' => 'Yards (input): ',
                ),
                array(
                    'Formula:<br>' => 'Yard * 3'
                ),
            ),
            FormulaBase::create_func_entry(
                'Yards to Inches',
                function($num){
                    $result = $num * 36;
                    return array($result, $this->pluralize($result, 'Inch'));
                },
                array(
                    'number_input' => 'Yards (input): ',
                ),
                array(
                    'Formula:<br>' => 'Yard * 36'
                ),
            ),
            FormulaBase::create_func_entry(
                'Ounces to Tons',
                function($num){
                    $result = $num * 0.000003125;
                    return array($result, $this->pluralize($result, 'Ton'));
                },
                array(
                    'number_input' => 'Ounces (input): ',
                ),
                array(
                    'Formula:<br>' => 'Ounce * 0.000003125'
                ),
            ),
            FormulaBase::create_func_entry(
                'Tons to Ounces',
                function($num){
                    $result = $num * 32000;
                    return array($result, $this->pluralize($result, 'Ounce'));
                },
                array(
                    'number_input' => 'Tons (input): ',
                ),
                array(
                    'Formula:<br>' => 'Ton * 32000'
                ),
            ),
        );
    }
}

$cats["Imperial to Imperial"] = new Imperial_to_Imperial();
