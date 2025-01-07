<?php
# SYNOPSIS: Ways of Calculating Physical Exersion
#
# Physical_Fitness.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:49:08 PM PDT
# Last Update: 2022-03-07: 14:42
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

class Physical_Fitness extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Calories burned in Work-Out',
                function($num, $num2, $num3){
                    $result = (($num * 4.448) * cos($num2) * ($num3 * 3.2808)) * 0.239;
                    $result = $result * pow(10, -3);
                    return array($result, $this->pluralize($result, 'Calorie'));
                },
                array(
                    'number_input' => 'Enter Weight (input): ',
                    'number_input2' => 'Enter Angle (input): ',
                    'number_input3' => 'Enter Distance of Lift (input): ',
                ),
                array(
                    'Formula:<br>' => '((Weight * 4.448) * cos(Angle) * (Distance of Lift * 3.2808)) * 0.239'
                ),
            ),
            FormulaBase::create_func_entry(
                'Calories to Joules',
                function($num){
                    $result = $num * 4.184;
                    return array($result, $this->pluralize($result, 'Joule'));
                },
                array(
                    'number_input' => 'Calories (input): ',
                ),
                array(
                    'Formula:<br>' => 'Calories * 4.184'
                ),
            ),
            FormulaBase::create_func_entry(
                'Joules to Calories',
                function($num){
                    $result = $num * 0.2390057;
                    return array($result, $this->pluralize($result, 'Calorie'));
                },
                array(
                    'number_input' => 'Joules (input): ',
                ),
                array(
                    'Formula:<br>' => 'Joules * 0.2390057'
                ),
            ),
        );
    }
}
$cats["Physical Fitness"] = new Physical_Fitness();
