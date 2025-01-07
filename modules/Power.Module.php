<?php
# SYNOPSIS: Convert Power Units
#
# Power.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:50:19 PM PDT
# Last Update: 2022-03-08: 06:47
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
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'BTU per Hour to Watts',
                function($num){
                    $result = $num * 0.29307107;
                    return array($result, $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => 'BTU per Hour (input): ',
                ),
                array(
                    '' => 'BTU per Hour * 0.29307107'
                ),
            ),
            FormulaBase::create_func_entry(
                'Horsepower to Foot-Pounds per Minute',
                function($num){
                    $result = $num * 33000;
                    return array($result, $this->pluralize($result, 'Foot/Pound per Minute'));
                },
                array(
                    'number_input' => 'Horsepower (input): ',
                ),
                array(
                    '' => 'Horsepower * 33000'
                ),
            ),
            FormulaBase::create_func_entry(
                'Horsepower to Foot-Pounds per Second',
                function($num){
                    $result = $num * 550;
                    return array($result, $this->pluralize($result, 'Foot/Pound per Second'));
                },
                array(
                    'number_input' => 'Horsepower (input): ',
                ),
                array(
                    '' => 'Horsepower * 550'
                ),
            ),
            FormulaBase::create_func_entry(
                'Horsepower to Watt',
                function($num){
                    $result = $num * 745.69987;
                    return array($result, $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => 'Horsepower (input): ',
                ),
                array(
                    '' => 'Horsepower * 745.69987'
                ),
            ),
            FormulaBase::create_func_entry(
                'KiloWatt to Horsepower',
                function($num){
                    $result = $num * 1.3410221;
                    return array($result, $this->pluralize($result, 'Horsepower'));
                },
                array(
                    'number_input' => 'KiloWatt (input): ',
                ),
                array(
                    '' => 'KiloWatt * 1.3410221'
                ),
            ),
            FormulaBase::create_func_entry(
                'Foot-Pounds per Sec to Watt',
                function($num){
                    $result = $num * 0.022596966;
                    return array($result, $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => 'Foot-Pounds per Sec (input): ',
                ),
                array(
                    '' => 'Foot-Pounds per Minute * 0.022596966'
                ),
            ),
            FormulaBase::create_func_entry(
                'Watt to Foot-Pounds per Minute',
                function($num){
                    $result = $num * 44.253729;
                    return array($result, $this->pluralize($result, 'Foot/Pound per Minute'));
                },
                array(
                    'number_input' => 'Watt (input): ',
                ),
                array(
                    '' => 'Watt * 44.253729'
                ),
            ),
            FormulaBase::create_func_entry(
                'Watt to Horsepower',
                function($num){
                    $result = $num * 0.0013410221;
                    return array($result, $this->pluralize($result, 'Horsepower'));
                },
                array(
                    'number_input' => 'Watt (input): ',
                ),
                array(
                    '' => 'Watt * 0.0013410221'
                ),
            ),
            FormulaBase::create_func_entry(
                'Foot-Pounds per Minute to Watt',
                function($num){
                    $result = $num * 0.022596966;
                    return array($result, $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => 'Foot-Pounds per Minute (input): ',
                ),
                array(
                    '' => 'Foot-Pounds per Minute * 0.022596966'
                ),
            ),
            FormulaBase::create_func_entry(
                'Watt to Foot-Pounds per Second',
                function($num){
                    $result = $num * 0.73756215;
                    return array($result, $this->pluralize($result, 'Foot/Pound per Second'));
                },
                array(
                    'number_input' => 'Watt (input): ',
                ),
                array(
                    '' => 'Watt * 0.73756215'
                ),
            ),
        );
    }
}
$cats["Power"] = new Power();
