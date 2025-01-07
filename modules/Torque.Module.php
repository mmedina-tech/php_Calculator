<?php
# SYNOPSIS: Formulas for Calculating Torque
#
# Torque.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 09:00:03 PM PDT
# Last Update: 2022-03-08: 07:08
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

class Torque extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Gram-Centimeters to Ounce-Inches',
                function($num){
                    $result = $num * 0.089595863;
                    return array($result, $this->pluralize($result, 'Ounce/Inch'));
                },
                array(
                    'number_input' => 'Gram/Centimeter (input): ',
                ),
                array(
                    'Formula:<br>' => 'Gram/Centimeter * 0.089595863'
                ),
            ),
            FormulaBase::create_func_entry(
                'Newton-Meters to Pound-Feet',
                function($num){
                    $result = $num * 0.068521766;
                    return array($result, $this->pluralize($result, 'Pound/Foot'));
                },
                array(
                    'number_input' => 'Newton/Meter (input): ',
                ),
                array(
                    'Formula:<br>' => 'Newton/Meter * 0.068521766'
                ),
            ),
            FormulaBase::create_func_entry(
                'Newton-Meters to Pound-Inches',
                function($num){
                    $result = $num * 0.0057101472;
                    return array($result, $this->pluralize($result, 'Pound/Inch'));
                },
                array(
                    'number_input' => 'Newton/Meters (input): ',
                ),
                array(
                    'Formula:<br>' => 'Newton/Meter * 0.0057101472'
                ),
            ),
            FormulaBase::create_func_entry(
                'Ounce-Inches to Gram-Centimeters',
                function($num){
                    $result = $num * 11.16123;
                    return array($result, $this->pluralize($result, 'Gram/Centimeter'));
                },
                array(
                    'number_input' => 'Ounce/Inch (input): ',
                ),
                array(
                    'Formula:<br>' => 'Ounce/Inch * 11.16123'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pound-Feet to Newton-Meters',
                function($num){
                    $result = $num * 14.593903;
                    return array($result, $this->pluralize($result, 'Newton/Meter'));
                },
                array(
                    'number_input' => 'Pound/Foot (input): ',
                ),
                array(
                    'Formula:<br>' => 'Pound/Foot * 14.593903'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pound-Inches to Newton-Meters',
                function($num){
                    $result = $num * 175.12684;
                    return array($result, $this->pluralize($result, 'Newton/Meter'));
                },
                array(
                    'number_input' => 'Pound/Inch (input): ',
                ),
                array(
                    'Formula:<br>' => 'Pound/Inch * 175.12684'
                ),
            ),
        );
    }
}
$cats["Torque"] = new Torque();
