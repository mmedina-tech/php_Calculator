<?php
# SYNOPSIS: Convert Power Units
#
# Power.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:50:19 PM PDT
# Last Update: 2022-02-23: 15:23
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

class Power extends FormulaBase{
    function __construct(){

        #{{{ Function Titles
        $this->function_strings = array(
            1 => 'BTU per Hour to Watts',
            2 => 'Horsepower to Foot-Pounds per Minute',
            3 => 'Horsepower to Foot-Pounds per Second',
            4 => 'Horsepower to Watt',
            5 => 'KiloWatt to Horsepower',
            6 => 'Foot-Pounds per Sec to Watt',
            7 => 'Watt to Foot-Pounds per Minute',
            8 => 'Watt to Horsepower',
            9 => 'Foot-Pounds per Minute to Watt',
            10 => 'Watt to Foot-Pounds per Second',
        );
        #}}}

        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[1] => function($num){
                $result = $num * 0.29307107;
                return array($result, $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[2] => function($num){
                $result = $num * 33000;
                return array($result, $this->pluralize($result, 'Foot/Pound per Minute'));
            },
            $this->function_strings[3] => function($num){
                $result = $num * 550;
                return array($result, $this->pluralize($result, 'Foot/Pound per Second'));
            },
            $this->function_strings[4] => function($num){
                $result = $num * 745.69987;
                return array($result, $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[5] => function($num){
                $result = $num * 1.3410221;
                return array($result, $this->pluralize($result, 'Horsepower'));
            },
            $this->function_strings[6] => function($num){
                $result = $num * 0.022596966;
                return array($result, $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[7] => function($num){
                $result = $num * 44.253729;
                return array($result, $this->pluralize($result, 'Foot/Pound per Minute'));
            },
            $this->function_strings[8] => function($num){
                $result = $num * 0.0013410221;
                return array($result, $this->pluralize($result, 'Horsepower'));
            },
            $this->function_strings[9] => function($num){
                $result = $num * 0.022596966;
                return array($result, $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[10] => function($num){
                $result = $num * 0.73756215;
                return array($result, $this->pluralize($result, 'Foot/Pound per Second'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->functionInputs = array(
            $this->function_strings[1] => array(
                'number_input' => 'BTU per Hour (input): ',
            ),
            $this->function_strings[2] => array(
                'number_input' => 'Horsepower (input): ',
            ),
            $this->function_strings[3] => array(
                'number_input' => 'Horsepower (input): ',
            ),
            $this->function_strings[4] => array(
                'number_input' => 'Horsepower (input): ',
            ),
            $this->function_strings[5] => array(
                'number_input' => 'KiloWatt (input): ',
            ),
            $this->function_strings[6] => array(
                'number_input' => 'Foot-Pounds per Sec (input): ',
            ),
            $this->function_strings[7] => array(
                'number_input' => 'Watt (input): ',
            ),
            $this->function_strings[8] => array(
                'number_input' => 'Watt (input): ',
            ),
            $this->function_strings[9] => array(
                'number_input' => 'Foot-Pounds per Minute (input): ',
            ),
            $this->function_strings[10] => array(
                'number_input' => 'Watt (input): ',
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[1] => array(
                'Formula:<br>' => 'BTU per Hour * 0.29307107'
            ),
            $this->function_strings[2] => array(
                'Formula:<br>' => 'Horsepower * 33000'
            ),
            $this->function_strings[3] => array(
                'Formula:<br>' => 'Horsepower * 550'
            ),
            $this->function_strings[4] => array(
                'Formula:<br>' => 'Horsepower * 745.69987'
            ),
            $this->function_strings[5] => array(
                'Formula:<br>' => 'KiloWatt * 1.3410221'
            ),
            $this->function_strings[6] => array(
                'Formula:<br>' => 'Foot-Pounds per Minute * 0.022596966'
            ),
            $this->function_strings[7] => array(
                'Formula:<br>' => 'Watt * 44.253729'
            ),
            $this->function_strings[8] => array(
                'Formula:<br>' => 'Watt * 0.0013410221'
            ),
            $this->function_strings[9] => array(
                'Formula:<br>' => 'Foot-Pounds per Minute * 0.022596966'
            ),
            $this->function_strings[10] => array(
                'Formula:<br>' => 'Watt * 0.73756215'
            ),
        );
        #}}}

    }
}
