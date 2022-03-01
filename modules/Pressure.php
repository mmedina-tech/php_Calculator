<?php
# SYNOPSIS: Calculate Pressue
#
# Pressure.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:50:36 PM PDT
# Last Update: 2022-03-01: 13:48
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

class Pressure extends FormulaBase{
    function __construct(){

        #{{{ Function Titles
        $this->function_strings = array(
            1 => 'Bars to KiloPascals',
            2 => 'Bars to PSI',
            3 => 'Inches of Mercury to KiloPascals',
            4 => 'Inches of Water to KiloPascals',
            5 => 'KiloPascals to Bars',
            6 => 'KiloPascals to Inches of Mercury',
            7 => 'KiloPascals to PSI',
            8 => 'Pascals to Pounds per Square Foot',
            9 => 'Pounds per Square Foor to Pascals',
            10 => 'PSI to KiloPascals',
        );
        #}}}

        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[1] => function($num){
                $result = $num * 100;
                return array($result, $this->pluralize($result, 'KiloPascal'));
            },
            $this->function_strings[2] => function($num){
                $result = $num * 14.503774;
                return array($result, $this->pluralize($result, 'PSI'));
            },
            $this->function_strings[3] => function($num){
                $result = $num * 3.377;
                return array($result, $this->pluralize($result, 'KiloPascal'));
            },
            $this->function_strings[4] => function($num){
                $result = $num * 0.2488;
                return array($result, $this->pluralize($result, 'KiloPascal'));
            },
            $this->function_strings[5] => function($num){
                $result = $num * 0.01;
                return array($result, $this->pluralize($result, 'Bar'));
            },
            $this->function_strings[6] => function($num){
                $result = $num * 0.2961;
                return array($result, $this->pluralize($result, 'Inch of Mercury'));
            },
            $this->function_strings[7] => function($num){
                $result = $num * 0.14503774;
                return array($result, $this->pluralize($result, 'PSI'));
            },
            $this->function_strings[8] => function($num){
                $result = $num * 0.020885434;
                return array($result, $this->pluralize($result, 'Pound/Foot<sup>2</sup>'));
            },
            $this->function_strings[9] => function($num){
                $result = $num * 47.880259;
                return array($result, $this->pluralize($result, 'Pascal'));
            },
            $this->function_strings[10] => function($num){
                $result = $num * 6.8947573;
                return array($result, $this->pluralize($result, 'KiloPascal'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->functions_inputs = array(
            $this->function_strings[1] => array(
                'number_input' => 'Bars (input): ',
            ),
            $this->function_strings[2] => array(
                'number_input' => 'Bars (input): ',
            ),
            $this->function_strings[3] => array(
                'number_input' => 'Inches of Mercury (input): ',
            ),
            $this->function_strings[4] => array(
                'number_input' => 'Inches of Water (input): ',
            ),
            $this->function_strings[5] => array(
                'number_input' => 'KiloPascals (input): ',
            ),
            $this->function_strings[6] => array(
                'number_input' => 'KiloPascals (input): ',
            ),
            $this->function_strings[7] => array(
                'number_input' => 'KiloPascals (input): ',
            ),
            $this->function_strings[8] => array(
                'number_input' => 'Pascals (input): ',
            ),
            $this->function_strings[9] => array(
                'number_input' => 'Pounds/Foot<sup>2</sup> (input): ',
            ),
            $this->function_strings[10] => array(
                'number_input' => 'PSI (input): ',
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[1] => array(
                'Formula:<br>' => 'Bars * 100'
            ),
            $this->function_strings[2] => array(
                'Formula:<br>' => 'Bars * 14.503774'
            ),
            $this->function_strings[3] => array(
                'Formula:<br>' => 'Inches of Mercury * 3.377'
            ),
            $this->function_strings[4] => array(
                'Formula:<br>' => 'Inches of Water * 0.2488'
            ),
            $this->function_strings[5] => array(
                'Formula:<br>' => 'KiloPascal * 0.01'
            ),
            $this->function_strings[6] => array(
                'Formula:<br>' => 'KiloPascal * 0.2961'
            ),
            $this->function_strings[7] => array(
                'Formula:<br>' => 'KiloPascal * 0.14503774'
            ),
            $this->function_strings[8] => array(
                'Formula:<br>' => 'Pascal * 0.020885434'
            ),
            $this->function_strings[9] => array(
                'Formula:<br>' => 'Pound/Foot<sup>2</sup> * 47.880259'
            ),
            $this->function_strings[10] => array(
                'Formula:<br>' => 'PSI * 6.8947573'
            ),

        );
        #}}}

    }
}
