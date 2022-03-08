<?php
# SYNOPSIS: Calculate Pressue
#
# Pressure.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:50:36 PM PDT
# Last Update: 2022-03-08: 06:56
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
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Bars to KiloPascals',
                function($num){
                    $result = $num * 100;
                    return array($result, $this->pluralize($result, 'KiloPascal'));
                },
                array(
                    'number_input' => 'Bars (input): ',
                ),
                array(
                    'Formula:<br>' => 'Bars * 100'
                ),
            ),
            FormulaBase::create_func_entry(
                'Bars to PSI',
                function($num){
                    $result = $num * 14.503774;
                    return array($result, $this->pluralize($result, 'PSI'));
                },
                array(
                    'number_input' => 'Bars (input): ',
                ),
                array(
                    'Formula:<br>' => 'Bars * 14.503774'
                ),
            ),
            FormulaBase::create_func_entry(
                'Inches of Mercury to KiloPascals',
                function($num){
                    $result = $num * 3.377;
                    return array($result, $this->pluralize($result, 'KiloPascal'));
                },
                array(
                    'number_input' => 'Inches of Mercury (input): ',
                ),
                array(
                    'Formula:<br>' => 'Inches of Mercury * 3.377'
                ),
            ),
            FormulaBase::create_func_entry(
                'Inches of Water to KiloPascals',
                function($num){
                    $result = $num * 0.2488;
                    return array($result, $this->pluralize($result, 'KiloPascal'));
                },
                array(
                    'number_input' => 'Inches of Water (input): ',
                ),
                array(
                    'Formula:<br>' => 'Inches of Water * 0.2488'
                ),
            ),
            FormulaBase::create_func_entry(
                'KiloPascals to Bars',
                function($num){
                    $result = $num * 0.01;
                    return array($result, $this->pluralize($result, 'Bar'));
                },
                array(
                    'number_input' => 'KiloPascals (input): ',
                ),
                array(
                    'Formula:<br>' => 'KiloPascal * 0.01'
                ),
            ),
            FormulaBase::create_func_entry(
                'KiloPascals to Inches of Mercury',
                function($num){
                    $result = $num * 0.2961;
                    return array($result, $this->pluralize($result, 'Inch of Mercury'));
                },
                array(
                    'number_input' => 'KiloPascals (input): ',
                ),
                array(
                    'Formula:<br>' => 'KiloPascal * 0.2961'
                ),
            ),
            FormulaBase::create_func_entry(
                'KiloPascals to PSI',
                function($num){
                    $result = $num * 0.14503774;
                    return array($result, $this->pluralize($result, 'PSI'));
                },
                array(
                    'number_input' => 'KiloPascals (input): ',
                ),
                array(
                    'Formula:<br>' => 'KiloPascal * 0.14503774'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pascals to Pounds per Square Foot',
                function($num){
                    $result = $num * 0.020885434;
                    return array($result, $this->pluralize($result, 'Pound/Foot<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Pascals (input): ',
                ),
                array(
                    'Formula:<br>' => 'Pascal * 0.020885434'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pounds per Square Foor to Pascals',
                function($num){
                    $result = $num * 47.880259;
                    return array($result, $this->pluralize($result, 'Pascal'));
                },
                array(
                    'number_input' => 'Pounds/Foot<sup>2</sup> (input): ',
                ),
                array(
                    'Formula:<br>' => 'Pound/Foot<sup>2</sup> * 47.880259'
                ),
            ),
            FormulaBase::create_func_entry(
                'PSI to KiloPascals',
                function($num){
                    $result = $num * 6.8947573;
                    return array($result, $this->pluralize($result, 'KiloPascal'));
                },
                array(
                    'number_input' => 'PSI (input): ',
                ),
                array(
                    'Formula:<br>' => 'PSI * 6.8947573'
                ),
            ),
        );
    }
}
$cats["Pressure"] = new Pressure();
