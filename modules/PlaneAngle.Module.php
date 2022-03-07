<?php
# SYNOPSIS: Calculate Plane Angle
#
# PlaneAngle.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:49:39 PM PDT
# Last Update: 2022-03-07: 14:48
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

class PlaneAngle extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Degrees to Radians',
                function($num){
                    $result = $num * 0.017453293;
                    return array($result, $this->pluralize($result, 'Radian'));
                },
                array(
                    'number_input' => 'Degrees (input): ',
                ),
                array(
                    'Formula:<br>' => 'Degree * 0.017453293'
                ),
            ),
            FormulaBase::create_func_entry(
                'Minutes to Degrees',
                function($num){
                    $result = $num * 0.16666667;
                    return array($result, $this->pluralize($result, 'Degree'));
                },
                array(
                    'number_input' => 'Minutes (input): ',
                ),
                array(
                    'Formula:<br>' => 'Minute * 0.16666667'
                ),
            ),
            FormulaBase::create_func_entry(
                'Quadrants to Degrees',
                function($num){
                    $result = $num * 90;
                    return array($result, $this->pluralize($result, 'Degree'));
                },
                array(
                    'number_input' => 'Quadrants (input): ',
                ),
                array(
                    'Formula:<br>' => 'Quadrant * 90'
                ),
            ),
            FormulaBase::create_func_entry(
                'Quadrants to Radians',
                function($num){
                    $result = $num * 1.5707963;
                    return array($result, $this->pluralize($result, 'Radian'));
                },
                array(
                    'number_input' => 'Quadrants (input): ',
                ),
                array(
                    'Formula:<br>' => 'Quadrant * 1.5707963'
                ),
            ),
            FormulaBase::create_func_entry(
                'Radians to Degrees',
                function($num){
                    $result = $num * 57.29578;
                    return array($result, $this->pluralize($result, 'Degree'));
                },
                array(
                    'number_input' => 'Radians (input): ',
                ),
                array(
                    'Formula:<br>' => 'Radian * 57.29578'
                ),
            ),
            FormulaBase::create_func_entry(
                'Minutes to Radians',
                function($num){
                    $result = $num * 0.00029088821;
                    return array($result, $this->pluralize($result, 'Radian'));
                },
                array(
                    'number_input' => 'Minutes (input): ',
                ),
                array(
                    'Formula:<br>' => 'Minute * 0.00029088821'
                ),
            ),
        );

        #{{{ Function Titles
        $this->function_strings = array(
            7 => 'Degree to Minute',
            8 => 'Minute to Quadrant',
            9 => 'Quadrant to Minute',
            10 => 'Radian to Minute',
            11 => 'Radian to Quadrant',
            12 => 'Degree to Quadrant',
        );
        #}}}

        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[7] => function($num){
                $result = $num * 60;
                return array($result, $this->pluralize($result, 'Minute'));
            },
            $this->function_strings[8] => function($num){
                $result = $num * 0.00018518519;
                return array($result, $this->pluralize($result, 'Quadrant'));
            },
            $this->function_strings[9] => function($num){
                $result = $num * 5400;
                return array($result, $this->pluralize($result, 'Minute'));
            },
            $this->function_strings[10] => function($num){
                $result = $num * 3437.7468;
                return array($result, $this->pluralize($result, 'Minute'));
            },
            $this->function_strings[11] => function($num){
                $result = $num * 0.63661977;
                return array($result, $this->pluralize($result, 'Quadrant'));
            },
            $this->function_strings[12] => function($num){
                $result = $num * 0.011111111;
                return array($result, $this->pluralize($result, 'Quadrant'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->function_inputs = array(
            $this->function_strings[7] => array(
                'number_input' => 'Degree (input): ',
            ),
            $this->function_strings[8] => array(
                'number_input' => 'Minute (input): ',
            ),
            $this->function_strings[9] => array(
                'number_input' => 'Quadrant (input): ',
            ),
            $this->function_strings[10] => array(
                'number_input' => 'Radian (input): ',
            ),
            $this->function_strings[11] => array(
                'number_input' => 'Radian (input): ',
            ),
            $this->function_strings[12] => array(
                'number_input' => 'Degree (input): ',
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[7] => array(
                'Formula:<br>' => 'Degree * 60'
            ),
            $this->function_strings[8] => array(
                'Formula:<br>' => 'Minute * 0.00018518519'
            ),
            $this->function_strings[9] => array(
                'Formula:<br>' => 'Quadrant * 5400'
            ),
            $this->function_strings[10] => array(
                'Formula:<br>' => 'Radian * 3437.7468'
            ),
            $this->function_strings[11] => array(
                'Formula:<br>' => 'Radian * 0.63661977'
            ),
            $this->function_strings[12] => array(
                'Formula:<br>' => 'Degree * 0.011111111'
            ),
        );
        #}}}
    }
}
$cats["Plane Angle"] = new PlaneAngle();
