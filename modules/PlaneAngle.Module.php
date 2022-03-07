<?php
# SYNOPSIS: Calculate Plane Angle
#
# PlaneAngle.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:49:39 PM PDT
# Last Update: 2022-03-07: 15:03
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
            FormulaBase::create_func_entry(
                'Degree to Minute',
                function($num){
                    $result = $num * 60;
                    return array($result, $this->pluralize($result, 'Minute'));
                },
                array(
                    'number_input' => 'Degree (input): ',
                ),
                array(
                    'Formula:<br>' => 'Degree * 60'
                ),
            ),
            FormulaBase::create_func_entry(
                'Minute to Quadrant',
                function($num){
                    $result = $num * 0.00018518519;
                    return array($result, $this->pluralize($result, 'Quadrant'));
                },
                array(
                    'number_input' => 'Minute (input): ',
                ),
                array(
                    'Formula:<br>' => 'Minute * 0.00018518519'
                ),
            ),
            FormulaBase::create_func_entry(
                'Quadrant to Minute',
                function($num){
                    $result = $num * 5400;
                    return array($result, $this->pluralize($result, 'Minute'));
                },
                array(
                    'number_input' => 'Quadrant (input): ',
                ),
                array(
                    'Formula:<br>' => 'Quadrant * 5400'
                ),
            ),
            FormulaBase::create_func_entry(
                'Radian to Minute',
                function($num){
                    $result = $num * 3437.7468;
                    return array($result, $this->pluralize($result, 'Minute'));
                },
                array(
                    'number_input' => 'Radian (input): ',
                ),
                array(
                    'Formula:<br>' => 'Radian * 3437.7468'
                ),
            ),
            FormulaBase::create_func_entry(
                'Radian to Quadrant',
                function($num){
                    $result = $num * 0.63661977;
                    return array($result, $this->pluralize($result, 'Quadrant'));
                },
                array(
                    'number_input' => 'Radian (input): ',
                ),
                array(
                    'Formula:<br>' => 'Radian * 0.63661977'
                ),
            ),
            FormulaBase::create_func_entry(
                'Degree to Quadrant',
                function($num){
                    $result = $num * 0.011111111;
                    return array($result, $this->pluralize($result, 'Quadrant'));
                },
                array(
                    'number_input' => 'Degree (input): ',
                ),
                array(
                    'Formula:<br>' => 'Degree * 0.011111111'
                ),
            ),
        );
    }
}
$cats["Plane Angle"] = new PlaneAngle();
