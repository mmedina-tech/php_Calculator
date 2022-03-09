<?php
# SYNOPSIS: Formulas for Calculating Velocity
#
# Velocity.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 09:00:35 PM PDT
# Last Update: 2022-03-08: 17:38
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

class Velocity extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Miles/Hr to Kilometers/Hr',
                function($num){
                    $result = $num * 1.609344;
                    return array($result, $this->pluralize($result, 'Kilometer/Hr'));
                },
                array(
                    'number_input' => 'Mile/Hr (input): ',
                ),
                array(
                    'Formula:<br>' => 'Mile/Hr * 1.609344'
                ),
            ),
            FormulaBase::create_func_entry(
                'Kilometers/Hr to Miles/Hr',
                function($num){
                    $result = $num * 0.62137119;
                    return array($result, $this->pluralize($result, 'Mile/Hr'));
                },
                array(
                    'number_input' => 'Kilometer/Hr (input): ',
                ),
                array(
                    'Formula:<br>' => 'Kilometer/Hr * 0.62137119'
                ),
            ),
            FormulaBase::create_func_entry(
                'Feet/Sec to Meters/Sec',
                function($num){
                    $result = $num * 0.3048;
                    return array($result, $this->pluralize($result, 'Meter/Sec'));
                },
                array(
                    'number_input' => 'Foot/Sec (input): ',
                ),
                array(
                    'Formula:<br>' => 'Foot/Sec * 0.3048'
                ),
            ),
            FormulaBase::create_func_entry(
                'Meters/Sec to Feet/Sec',
                function($num){
                    $result = $num * 3.2808399;
                    return array($result, $this->pluralize($result, 'Foot/Sec'));
                },
                array(
                    'number_input' => 'Meter/Sec (input): ',
                ),
                array(
                    'Formula:<br>' => 'Meter/Sec * 3.2808399'
                ),
            ),
            FormulaBase::create_func_entry(
                'Kilometers/Sec to Meters/Sec',
                function($num){
                    $result = $num * 1000;
                    return array($result, $this->pluralize($result, 'Meter/Sec'));
                },
                array(
                    'number_input' => 'Kilometer/Sec (input): ',
                ),
                array(
                    'Formula:<br>' => 'Kilometer/Sec * 1000'
                ),
            ),
            FormulaBase::create_func_entry(
                'Meters/Sec to Kilometers/Sec',
                function($num){
                    $result = $num * 0.001;
                    return array($result, $this->pluralize($result, 'Kilometer/Sec'));
                },
                array(
                    'number_input' => 'Meter/Sec (input): ',
                ),
                array(
                    'Formula:<br>' => 'Meter/Sec * 0.001'
                ),
            ),
            FormulaBase::create_func_entry(
                'Miles/Hr to Meters/Sec',
                function($num){
                    $result = $num * 0.44704;
                    return array($result, $this->pluralize($result, 'Meter/Sec'));
                },
                array(
                    'number_input' => 'Mile/Hr (input): ',
                ),
                array(
                    'Formula:<br>' => 'Mile/Hr * 0.44704'
                ),
            ),
            FormulaBase::create_func_entry(
                'Meters/Sec to Miles/Hr',
                function($num){
                    $result = $num * 2.2369363;
                    return array($result, $this->pluralize($result, 'Mile/Hr'));
                },
                array(
                    'number_input' => 'Meter/Sec (input): ',
                ),
                array(
                    'Formula:<br>' => 'Meter/Sec * 2.2369363'
                ),
            ),
        );
    }
}
$cats["Velocity"] = new Velocity();
