<?php
# SYNOPSIS: Fuel Economy Calculations
#
# Fuel_Economy.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:44:27 PM PDT
# Last Update: 2022-03-04: 09:16
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
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Miles/Gal to Kilometers/Liter',
                function($num){
                    $result = $num * 0.42514371;
                    return array($result, $this->pluralize($result, 'Kilometer/Liter'));
                },
                array(
                    'number_input' => 'Mile/Gallon (input): ',
                ),
                array(
                    '' => 'Mile/Gallon * 0.42514371'
                ),
            ),
            FormulaBase::create_func_entry(
                'Kilometers/Liter to Miles/Gal',
                function($num){
                    $result = $num * 2.3521458;
                    return array($result, $this->pluralize($result, 'Mile/Gallon'));
                },
                array(
                    'number_input' => 'Kilometer/Liter (input): ',
                ),
                array(
                    '' => 'Kilometer/Liter * 2.3521458'
                ),
            ),
        );
    }
}
$cats["Fuel Economy"] = new Fuel_Economy();
