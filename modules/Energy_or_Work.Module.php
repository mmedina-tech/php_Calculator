<?php
# SYNOPSIS: Energy or Work conversions
#
# Energy_or_Work.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:43:48 PM PDT
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

class Energy_or_Work extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'BTU to Foot-Pounds',
                function($num){
                    $result = $num * 778.2;
                    return array($result, $this->pluralize($result, 'Foot/Pound'));
                },
                array(
                    'number_input' => 'BTU (input): ',
                ),
                array(
                    '' => 'BUT * 778.2'
                ),
            ),
            FormulaBase::create_func_entry(
                'Mega Joules to KiloWatt Hours',
                function($num){
                    $result = $num * 0.27777778;
                    return array($result, $this->pluralize($result, 'KiloWatt Hour'));
                },
                array(
                    'number_input' => 'Mega Joule (input): ',
                ),
                array(
                    '' => 'Mega Joule * 0.27777778'
                ),
            ),
            FormulaBase::create_func_entry(
                'BTU to Gram-Calories',
                function($num){
                    $result = $num * 252;
                    return array($result, $this->pluralize($result, 'Gram/Calorie'));
                },
                array(
                    'number_input' => 'BTU (input): ',
                ),
                array(
                    '' => 'BTU * 252'
                ),
            ),
            FormulaBase::create_func_entry(
                'BTU to Joules',
                function($num){
                    $result = $num * 1055.0559;
                    return array($result, $this->pluralize($result, 'Joule'));
                },
                array(
                    'number_input' => 'BTU (input): ',
                ),
                array(
                    '' => 'BTU * 1055.0559'
                ),
            ),
            FormulaBase::create_func_entry(
                'Joules to Watt Hours',
                function($num){
                    $result = $num * 0.00027777778;
                    return array($result, $this->pluralize($result, 'Watt Hour'));
                },
                array(
                    'number_input' => 'Joule (input): ',
                ),
                array(
                    '' => 'Joule * 0.00027777778'
                ),
            ),
            FormulaBase::create_func_entry(
                'Calories to Joules',
                function($num){
                    $result = $num * 4.184;
                    return array($result, $this->pluralize($result, 'Joule'));
                },
                array(
                    'number_input' => 'Calorie (input): ',
                ),
                array(
                    '' => 'Calories * 4.184'
                ),
            ),
            FormulaBase::create_func_entry(
                'Foot-Pounds to Joules',
                function($num){
                    $result = $num * 1.3558;
                    return array($result, $this->pluralize($result, 'Joule'));
                },
                array(
                    'number_input' => 'Foot/Pound (input): ',
                ),
                array(
                    '' => 'Foot/Pound * 1.3558'
                ),
            ),
            FormulaBase::create_func_entry(
                'Joules to BTU',
                function($num){
                    $result = $num * 0.00094781712;
                    return array($result, $this->pluralize($result, 'BTU'));
                },
                array(
                    'number_input' => 'Joule (input): ',
                ),
                array(
                    '' => 'Joule * 0.00094781712'
                ),
            ),
            FormulaBase::create_func_entry(
                'WattHours to Joules',
                function($num){
                    $result = $num * 3600;
                    return array($result, $this->pluralize($result, 'Joule'));
                },
                array(
                    'number_input' => 'Watt Hour (input): ',
                ),
                array(
                    '' => 'WAtt Hour * 3600'
                ),
            ),
            FormulaBase::create_func_entry(
                'Joules to Calories',
                function($num){
                    $result = $num * 0.23900574;
                    return array($result, $this->pluralize($result, 'Calorie'));
                },
                array(
                    'number_input' => 'Joule (input): ',
                ),
                array(
                    '' => 'Joule * 0.23900574'
                ),
            ),
            FormulaBase::create_func_entry(
                'Joules to Foot-Pounds',
                function($num){
                    $result = $num * .7376;
                    return array($result, $this->pluralize($result, 'Foot/Pound'));
                },
                array(
                    'number_input' => 'Joule (input): ',
                ),
                array(
                    '' => 'Joule * .7376'
                ),
            ),
            FormulaBase::create_func_entry(
                'KiloWatt Hours to Mega Joules',
                function($num){
                    $result = $num * 3.6;
                    return array($result, $this->pluralize($result, 'Mega Joule'));
                },
                array(
                    'number_input' => 'KiloWatt Hour (input): ',
                ),
                array(
                    '' => 'KiloWatt HOur * 3.6'
                ),
            ),
        );
    }
}
$cats["Energy or Work"] = new Energy_or_Work();
