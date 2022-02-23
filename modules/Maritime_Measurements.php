<?php
# SYNOPSIS: Maritime Calculations
#
# Maritime_Measurements.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:47:05 PM PDT
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

class Maritime_Measurements extends FormulaBase{
    function __construct(){

        #{{{ Function Titles
        $this->function_strings = array(
            1 => 'Fathoms to Feet',
            2 => 'Cable to Fathom',
            3 => 'Nautical Mile to Feet',
            4 => 'Fathoms to Meters',
            5 => 'Nautical Miles to Cables',
            6 => 'Nautical Miles to Meters',
            7 => 'Nautical Miles to Statute Miles',
            8 => 'Knots to Nautical Miles per Hour',
            9 => 'Meters to Fathoms',
            10 => 'Nautical Miles to Kilometers',
            11 => 'Kilometers to Nautical Miles',
            12 => 'Miles to Nautical Miles',
            13 => 'Knots to Kilometer per Hour',
            14 => 'Kilometers per Hour to Knots',
            15 => 'Knots to Miles per Hour',
            16 => 'Miles per Hour to Knots'
        );
        #}}}

        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[1] => function($num){
                $result = $num * 6;
                return array($result, $this->pluralize($result, 'Foot'));
            },
            $this->function_strings[2] => function($num){
                $result = $num * 101.26859;
                return array($result, $this->pluralize($result, 'Fathom'));
            },
            $this->function_strings[3] => function($num){
                $result = $num * 6076.1155;
                return array($result, $this->pluralize($result, 'Foot'));
            },
            $this->function_strings[4] => function($num){
                $result = $num * 1.8288;
                return array($result, $this->pluralize($result, 'Meter'));
            },
            $this->function_strings[5] => function($num){
                $result = $num * 10;
                return array($result, $this->pluralize($result, 'Cable'));
            },
            $this->function_strings[6] => function($num){
                $result = $num * 1852;
                return array($result, $this->pluralize($result, 'Meter'));
            },
            $this->function_strings[7] => function($num){
                $result = $num * 1.1507794;
                return array($result, $this->pluralize($result, 'Statute Mile'));
            },
            $this->function_strings[8] => function($num){
                $result = $num * 1;
                return array($result, $this->pluralize($result, 'Nautical Mile/Hr'));
            },
            $this->function_strings[9] => function($num){
                $result = $num * 0.54680665;
                return array($result, $this->pluralize($result, 'Fathom'));
            },
            $this->function_strings[10] => function($num){
                $result = $num * 1.852;
                return array($result, $this->pluralize($result, 'Kilometer'));
            },
            $this->function_strings[11] => function($num){
                $result = $num * 0.5399568;
                return array($result, $this->pluralize($result, 'Nautical Mile'));
            },
            $this->function_strings[12] => function($num){
                $result = $num * 0.86897624;
                return array($result, $this->pluralize($result, 'Nautical Mile'));
            },
            $this->function_strings[13] => function($num){
                $result = $num * 1.852;
                return array($result, $this->pluralize($result, 'Kilometer/Hr'));
            },
            $this->function_strings[14] => function($num){
                $result = $num * 0.5399568;
                return array($result, $this->pluralize($result, 'Knot'));
            },
            $this->function_strings[15] => function($num){
                $result = $num * 1.1507794;
                return array($result, $this->pluralize($result, 'Mile/Hr'));
            },
            $this->function_strings[16] => function($num){
                $result = $num * 0.86897624;
                return array($result, $this->pluralize($result, 'Knot'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->functionInputs = array(
            $this->function_strings[1] => array(
                'number_input' => 'Fathoms (input): ',
            ),
            $this->function_strings[2] => array(
                'number_input' => 'Cable (input): ',
            ),
            $this->function_strings[3] => array(
                'number_input' => 'Nautical Mile (input): ',
            ),
            $this->function_strings[4] => array(
                'number_input' => 'Fathom (input): ',
            ),
            $this->function_strings[5] => array(
                'number_input' => 'Nautical Mile (input): ',
            ),
            $this->function_strings[6] => array(
                'number_input' => 'Nautical Mile (input): ',
            ),
            $this->function_strings[7] => array(
                'number_input' => 'Nautical Mile (input): ',
            ),
            $this->function_strings[8] => array(
                'number_input' => 'Knot (input): ',
            ),
            $this->function_strings[9] => array(
                'number_input' => 'Meter (input): ',
            ),
            $this->function_strings[10] => array(
                'number_input' => 'Nautical Mile (input): ',
            ),
            $this->function_strings[11] => array(
                'number_input' => 'Kilometers (input): ',
            ),
            $this->function_strings[12] => array(
                'number_input' => 'Miles (input): ',
            ),
            $this->function_strings[13] => array(
                'number_input' => 'Knots (input): ',
            ),
            $this->function_strings[14] => array(
                'number_input' => 'Kilometers per Hour (input): ',
            ),
            $this->function_strings[15] => array(
                'number_input' => 'Knots (input): ',
            ),
            $this->function_strings[16] => array(
                'number_input' => 'Miles per Hour (input): ',
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[1] => array(
                'Formula:<br>' => 'Fathom * 6'
            ),
            $this->function_strings[2] => array(
                'Formula:<br>' => 'Cable * 101.26859'
            ),
            $this->function_strings[3] => array(
                'Formula:<br>' => 'Nautical Mile * 6076.1155'
            ),
            $this->function_strings[4] => array(
                'Formula:<br>' => 'Fathoms * 1.8288'
            ),
            $this->function_strings[5] => array(
                'Formula:<br>' => 'Nautical Mile * 10'
            ),
            $this->function_strings[6] => array(
                'Formula:<br>' => 'Nautical Mile * 1852'
            ),
            $this->function_strings[7] => array(
                'Formula:<br>' => 'Nautical Mile * 1.1507794'
            ),
            $this->function_strings[8] => array(
                'Formula:<br>' => 'Knots * 1'
            ),
            $this->function_strings[9] => array(
                'Formula:<br>' => 'Meter * 0.54680665'
            ),
            $this->function_strings[10] => array(
                'Formula:<br>' => 'Nautical Mile * 1.852'
            ),
            $this->function_strings[11] => array(
                'Formula:<br>' => 'Kilometer * 0.5399568'
            ),
            $this->function_strings[12] => array(
                'Formula:<br>' => 'Mile * 0.86897624'
            ),
            $this->function_strings[13] => array(
                'Formula:<br>' => 'Knot * 1.852'
            ),
            $this->function_strings[14] => array(
                'Formula:<br>' => 'Kilometer per Hour * 0.5399568'
            ),
            $this->function_strings[15] => array(
                'Formula:<br>' => 'Knot * 1.1507794'
            ),
            $this->function_strings[16] => array(
                'Formula:<br>' => 'Mile per Hour * 0.86897624'
            ),
        );
        #}}}

    }
}
