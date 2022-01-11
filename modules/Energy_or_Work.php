<?php
# SYNOPSIS: Energy or Work conversions
# 
# Energy_or_Work.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:43:48 PM PDT
# Last Update: 2022-01-11: 11:13
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

class Energy_or_Work extends FormulaBase{
    function __construct(){

        #{{{ Function Titles
        $this->function_strings = array(
            1 => 'BTU to Foot-Pounds',
            2 => 'Mega Joules to KiloWatt Hours',
            3 => 'BTU to Gram-Calories',
            4 => 'BTU to Joules',
            5 => 'Joules to Watt Hours',
            6 => 'Calories to Joules',
            7 => 'Foot-Pounds to Joules',
            8 => 'Joules to BTU',
            9 => 'WattHours to Joules',
            10 => 'Joules to Calories',
            11 => 'Joules to Foot-Pounds',
            12 => 'KiloWatt Hours to Mega Joules',
        );
        #}}}
    
        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[1] => function($num){
                $result = $num * 778.2;
                return array($result, $this->pluralize($result, 'Foot/Pound'));
            },
            $this->function_strings[2] => function($num){
                $result = $num * 0.27777778;
                return array($result, $this->pluralize($result, 'KiloWatt Hour'));
            },
            $this->function_strings[3] => function($num){
                $result = $num * 252;
                return array($result, $this->pluralize($result, 'Gram/Calorie'));
            },
            $this->function_strings[4] => function($num){
                $result = $num * 1055.0559;
                return array($result, $this->pluralize($result, 'Joule'));
            },
            $this->function_strings[5] => function($num){
                $result = $num * 0.00027777778;
                return array($result, $this->pluralize($result, 'Watt Hour'));
            },
            $this->function_strings[6] => function($num){
                $result = $num * 4.184;
                return array($result, $this->pluralize($result, 'Joule'));
            },
            $this->function_strings[7] => function($num){
                $result = $num * 1.3558;
                return array($result, $this->pluralize($result, 'Joule'));
            },
            $this->function_strings[8] => function($num){
                $result = $num * 0.00094781712;
                return array($result, $this->pluralize($result, 'BTU'));
            },
            $this->function_strings[9] => function($num){
                $result = $num * 3600;
                return array($result, $this->pluralize($result, 'Joule'));
            },
            $this->function_strings[10] => function($num){
                $result = $num * 0.23900574;
                return array($result, $this->pluralize($result, 'Calorie'));
            },
            $this->function_strings[11] => function($num){
                $result = $num * .7376;
                return array($result, $this->pluralize($result, 'Foot/Pound'));
            },
            $this->function_strings[12] => function($num){
                $result = $num * 3.6;
                return array($result, $this->pluralize($result, 'Mega Joule'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->functionInputs = array(
            $this->function_strings[1] => array(
                'number_input' => 'BTU (input): ',
            ),
            $this->function_strings[2] => array(
                'number_input' => 'Mega Joule (input): ',
            ),
            $this->function_strings[3] => array(
                'number_input' => 'BTU (input): ',
            ),
            $this->function_strings[4] => array(
                'number_input' => 'BTU (input): ',
            ),
            $this->function_strings[5] => array(
                'number_input' => 'Joule (input): ',
            ),
            $this->function_strings[6] => array(
                'number_input' => 'Calorie (input): ',
            ),
            $this->function_strings[7] => array(
                'number_input' => 'Foot/Pound (input): ',
            ),
            $this->function_strings[8] => array(
                'number_input' => 'Joule (input): ',
            ),
            $this->function_strings[9] => array(
                'number_input' => 'Watt Hour (input): ',
            ),
            $this->function_strings[10] => array(
                'number_input' => 'Joule (input): ',
            ),
            $this->function_strings[11] => array(
                'number_input' => 'Joule (input): ',
            ),
            $this->function_strings[12] => array(
                'number_input' => 'KiloWatt Hour (input): ',
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[1] => array(
                'Formula:<br>' => 'BUT * 778.2'
            ),
            $this->function_strings[2] => array(
                'Formula:<br>' => 'Mega Joule * 0.27777778'
            ),
            $this->function_strings[3] => array(
                'Formula:<br>' => 'BTU * 252'
            ),
            $this->function_strings[4] => array(
                'Formula:<br>' => 'BTU * 1055.0559'
            ),
            $this->function_strings[5] => array(
                'Formula:<br>' => 'Joule * 0.00027777778'
            ),
            $this->function_strings[6] => array(
                'Formula:<br>' => 'Calories * 4.184'
            ),
            $this->function_strings[7] => array(
                'Formula:<br>' => 'Foot/Pound * 1.3558'
            ),
            $this->function_strings[8] => array(
                'Formula:<br>' => 'Joule * 0.00094781712'
            ),
            $this->function_strings[9] => array(
                'Formula:<br>' => 'WAtt Hour * 3600'
            ),
            $this->function_strings[10] => array(
                'Formula:<br>' => 'Joule * 0.23900574'
            ),
            $this->function_strings[11] => array(
                'Formula:<br>' => 'Joule * .7376'
            ),
            $this->function_strings[12] => array(
                'Formula:<br>' => 'KiloWatt HOur * 3.6'
            ),
        );
        #}}}
    }
}
