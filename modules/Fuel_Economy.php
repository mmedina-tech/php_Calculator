<?php
# SYNOPSIS: Fuel Economy Calculations
#
# Fuel_Economy.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:44:27 PM PDT
# Last Update: 2022-03-01: 13:47
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

class Fuel_Economy extends FormulaBase{
    function __construct(){

        #{{{ Function Titles
        $this->function_strings = array(
            1 => 'Miles/Gal to Kilometers/Liter',
            2 => 'Kilometers/Liter to Miles/Gal',
        );
        #}}}

        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[1] => function($num){
                $result = $num * 0.42514371;
                return array($result, $this->pluralize($result, 'Kilometer/Liter'));
            },
            $this->function_strings[2] => function($num){
                $result = $num * 2.3521458;
                return array($result, $this->pluralize($result, 'Mile/Gallon'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->functions_inputs = array(
            $this->function_strings[1] => array(
                'number_input' => 'Mile/Gallon (input): ',
            ),
            $this->function_strings[2] => array(
                'number_input' => 'Kilometer/Liter (input): ',
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[1] => array(
                'Formula:<br>' => 'Mile/Gallon * 0.42514371'
            ),
            $this->function_strings[2] => array(
                'Formula:<br>' => 'Kilometer/Liter * 2.3521458'
            ),
        );
        #}}}

    }
}
