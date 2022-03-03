<?php
# SYNOPSIS: Imperial to Imperial conversions
#
# Imperial_to_Imperial.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:45:49 PM PDT
# Last Update: 2022-03-02: 20:28
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

        #{{{ Function Titles
        $this->function_strings = array(
            1 => 'Feet to Miles',
            2 => 'Miles to Feet',
            3 => 'Ounces to Pounds',
            4 => 'Pounds to Ounces',
            5 => 'Tons to Pounds',
            6 => 'Yards to Miles',
            7 => 'Feet to Yards',
            8 => 'Feet to Inches',
            9 => 'Inches to Feet',
            10 => 'Inches to Yards',
            11 => 'Inches to Miles',
            12 => 'Yards to Feet',
            13 => 'Yards to Inches',
            14 => 'Ounces to Tons',
            15 => 'Tons to Ounces',
        );
        #}}}

        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[1] => function($num){
                $result = $num * 0.00018939394;
                return array($result, $this->pluralize($result, 'Mile'));
            },
            $this->function_strings[2] => function($num){
                $result = $num * 5280;
                return array($result, $this->pluralize($result, 'Foot'));
            },
            $this->function_strings[3] => function($num){
                $result = $num * 0.0625;
                return array($result, $this->pluralize($result, 'Pound'));
            },
            $this->function_strings[4] => function($num){
                $result = $num * 16;
                return array($result, $this->pluralize($result, 'Ounce'));
            },
            $this->function_strings[5] => function($num){
                $result = $num * 2000;
                return array($result, $this->pluralize($result, 'Pound'));
            },
            $this->function_strings[6] => function($num){
                $result = $num * 0.00056818182;
                return array($result, $this->pluralize($result, 'Mile'));
            },
            $this->function_strings[7] => function($num){
                $result = $num * 0.333333333333;
                return array($result, $this->pluralize($result, 'Yard'));
            },
            $this->function_strings[8] => function($num){
                $result = $num * 12;
                return array($result, $this->pluralize($result, 'Inch'));
            },
            $this->function_strings[9] => function($num){
                $result = $num * 0.0833333333333;
                return array($result, $this->pluralize($result, 'Foot'));
            },
            $this->function_strings[10] => function($num){
                $result = $num * 0.027777778;
                return array($result, $this->pluralize($result, 'Yard'));
            },
            $this->function_strings[11] => function($num){
                $result = $num * 0.0000015782828;
                return array($result, $this->pluralize($result, 'Mile'));
            },
            $this->function_strings[12] => function($num){
                $result = $num * 3;
                return array($result, $this->pluralize($result, 'Foot'));
            },
            $this->function_strings[13] => function($num){
                $result = $num * 36;
                return array($result, $this->pluralize($result, 'Inch'));
            },
            $this->function_strings[14] => function($num){
                $result = $num * 0.000003125;
                return array($result, $this->pluralize($result, 'Ton'));
            },
            $this->function_strings[15] => function($num){
                $result = $num * 32000;
                return array($result, $this->pluralize($result, 'Ounce'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->function_inputs = array(
            $this->function_strings[1] => array(
                'number_input' => 'Feet (input): ',
            ),
            $this->function_strings[2] => array(
                'number_input' => 'Miles (input): ',
            ),
            $this->function_strings[3] => array(
                'number_input' => 'Ounces (input): ',
            ),
            $this->function_strings[4] => array(
                'number_input' => 'Pounds (input): ',
            ),
            $this->function_strings[5] => array(
                'number_input' => 'Tons (input): ',
            ),
            $this->function_strings[6] => array(
                'number_input' => 'Yards (input): ',
            ),
            $this->function_strings[7] => array(
                'number_input' => 'Feet (input): ',
            ),
            $this->function_strings[8] => array(
                'number_input' => 'Feet (input): ',
            ),
            $this->function_strings[9] => array(
                'number_input' => 'Inches (input): ',
            ),
            $this->function_strings[10] => array(
                'number_input' => 'Inches (input): ',
            ),
            $this->function_strings[11] => array(
                'number_input' => 'Inches (input): ',
            ),
            $this->function_strings[12] => array(
                'number_input' => 'Yards (input): ',
            ),
            $this->function_strings[13] => array(
                'number_input' => 'Yards (input): ',
            ),
            $this->function_strings[14] => array(
                'number_input' => 'Ounces (input): ',
            ),
            $this->function_strings[15] => array(
                'number_input' => 'Tons (input): ',
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[1] => array(
                'Formula:<br>' => 'Feet * 0.00018939394'
            ),
            $this->function_strings[2] => array(
                'Formula:<br>' => 'Mile * 5280'
            ),
            $this->function_strings[3] => array(
                'Formula:<br>' => 'Ounce * 0.0625'
            ),
            $this->function_strings[4] => array(
                'Formula:<br>' => 'Pound * 16'
            ),
            $this->function_strings[5] => array(
                'Formula:<br>' => 'Ton * 2000'
            ),
            $this->function_strings[6] => array(
                'Formula:<br>' => 'Yard * 0.00056818182'
            ),
            $this->function_strings[7] => array(
                'Formula:<br>' => 'Feet * 0.333333333333'
            ),
            $this->function_strings[8] => array(
                'Formula:<br>' => 'Feet * 12'
            ),
            $this->function_strings[9] => array(
                'Formula:<br>' => 'Inch * 0.833333333333'
            ),
            $this->function_strings[10] => array(
                'Formula:<br>' => 'Inch * 0.27777778'
            ),
            $this->function_strings[11] => array(
                'Formula:<br>' => 'Inch * 0.0000015782828'
            ),
            $this->function_strings[12] => array(
                'Formula:<br>' => 'Yard * 3'
            ),
            $this->function_strings[13] => array(
                'Formula:<br>' => 'Yard * 36'
            ),
            $this->function_strings[14] => array(
                'Formula:<br>' => 'Ounce * 0.000003125'
            ),
            $this->function_strings[15] => array(
                'Formula:<br>' => 'Ton * 32000'
            ),
        );
        #}}}

    }
}

$cats["Imperial to Imperial"] = new Imperial_to_Imperial();
