<?php
# SYNOPSIS: Astronomic Unit Conversions
#
# Astronomic_Units.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:42:14 PM PDT
# Last Update: 2022-03-02: 20:10
#
#{{{ Legal Section
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
#}}}

require_once ("FormulaBase.php");

class Astronomic_Units extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
               "Celsius to Kelvin",
                function($num){
                    $result = $num * 274.15;
                    return array($result, $this->pluralize($result, 'Kelvin'));
                },
                array(
                    'number_input' => 'Celsius (input): ',
                ),
                array(
                    '' => 'Celsius * 274.15'
                ),
            ),
            FormulaBase::create_func_entry(
                'Fahrenheit to Kelvin',
                function($num){
                    $result = $num * 255.92778;
                    return array($result, $this->pluralize($result, "Kelvin"));
                },
                array(
                    'number_input' => 'Fahrenheit (input): ',
                ),
                array(
                    '' => 'Fahrenheit * 255.92778'
                ),
            ),
            FormulaBase::create_func_entry(
                'Light Years to Astronomic Units',
                function($num){
                    $result = $num * 63241.077;
                    return array($result, $this->pluralize($result, 'Astronomic Unit'));
                },
                array(
                    'number_input' => 'Light Years (input): ',
                ),
                array(
                    '' => 'Light Years * 63241.077'
                ),
            ),
            FormulaBase::create_func_entry(
                'Astronomic Units to Light Years',
                function($num){
                    $result = $num * 1.5812597e-05;
                    return array($result, $this->pluralize($result, 'Light Year'));
                },
                array(
                    'number_input' => 'Astronomic Units (input): ',
                ),
                array(
                    '' => 'Astronomic Units * 1.5812597e-05'
                ),
            ),
            FormulaBase::create_func_entry(
                'Light Years to Parsecs',
                function($num){
                    $result = $num * 0.30660139;
                    return array($result, $this->pluralize($result, 'Parsec'));
                },
                array(
                    'number_input' => 'Light Years (input): ',
                ),
                array(
                    '' => 'Light Years * 0.30659485'
                ),
            ),
            FormulaBase::create_func_entry(
                'Parsecs to Light Years',
                function($num){
                    $result = $num * 3.2615638;
                    return array($result, $this->pluralize($result, 'Light Year'));
                },
                array(
                    'number_input' => 'Parsecs (input): ',
                ),
                array(
                    '' => 'Parsecs * 3.2615638'
                ),
            ),
            FormulaBase::create_func_entry(
                'Celsius to Rankine',
                function($num){
                    $result = $num * 493.47;
                    return array($result, $this->pluralize($result, 'Rankine'));
                },
                array(
                    'number_input' => 'Celsius (input): ',
                ),
                array(
                    '' => 'Celsius * 493.47'
                ),
            ),
            FormulaBase::create_func_entry(
                'Rankine to Celsius',
                function($num){
                    $result = $num * 0.0020264656;
                    return array($result, $this->pluralize($result, 'Celsius'));
                },
                array(
                    'number_input' => 'Rankine (input): ',
                ),
                array(
                    '' => 'Rankine * 0.0020264656'
                ),
            ),
            FormulaBase::create_func_entry(
                'Rankine to Kelvin',
                function($num){
                    $result = $num * 0.55555556;
                    return array($result, $this->pluralize($result, 'Kelvin'));
                },
                array(
                    'number_input' => 'Rankine (input): ',
                ),
                array(
                    '' => 'Rankine * 0.55555556'
                ),
            ),
            FormulaBase::create_func_entry(
                'Kelvin to Rankine',
                function($num){
                    $result = $num * 1.8;
                    return array($result, $this->pluralize($result, 'Rankine'));
                },
                array(
                    'number_input' => 'Kelvin (input): ',
                ),
                array(
                    '' => 'Kelvin * 1.8'
                ),
            ),
        );
    }
}
$cats["Astronomic Units"] = new Astronomic_Units();
