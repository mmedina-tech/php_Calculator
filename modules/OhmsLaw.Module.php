<?php
# SYNOPSIS: Basic Electrical Formulas
#
# OhmsLaw.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:48:35 PM PDT
# Last Update: 2022-03-01: 13:48
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.

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

class OhmsLaw extends FormulaBase{
    function __construct(){

        #{{{ Function Titles
        $this->function_strings = array(
            1 => 'Volts using Amps and Resistance',
            2 => 'Volts using Watts and Amps',
            3 => 'Volts using Watts and Resistance',
            4 => 'Amps using Volts and Resistance',
            5 => 'Amps using Watts and Volts',
            6 => 'Amps using Watts and Resistance',
            7 => 'Resistance using Volts and Amps',
            8 => 'Resistance using Watts and Amps',
            9 => 'Resistance using Volts and Watts',
            10 => 'Watts using Volts and Amps',
            11 => 'Watts using Resistance and Amps',
            12 => 'Watts using Volts and Resistance',
        );
        #}}}

        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[1] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt'));
            },
            $this->function_strings[2] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt'));
            },
            $this->function_strings[3] => function($num, $num2){
                $result = sqrt($num * $num2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt'));
            },
            $this->function_strings[4] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Amp'));
            },
            $this->function_strings[5] => function($num, $num2){
                $result = sqrt($num / $num2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Amp'));
            },
            $this->function_strings[6] => function($num, $num2){
                $result = sqrt($num / $num2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Amp'));
            },
            $this->function_strings[7] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[8] => function($num, $num2){
                $result = sqrt($num / pow($num2, 2));
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[9] => function($num, $num2){
                $result = pow($num, 2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[10] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[11] => function($num, $num2){
                $result = $num * pow($num2, 2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[12] => function($num, $num2){
                $result = pow($num, 2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->functions_inputs = array(
            $this->function_strings[1] => array(
                'number_input' => 'Amps (input): ',
                'number_input2' => 'Resistance (input): ',
            ),
            $this->function_strings[2] => array(
                'number_input' => 'Watts (input): ',
                'number_input2' => 'Amps (input): ',
            ),
            $this->function_strings[3] => array(
                'number_input' => 'Watts (input): ',
                'number_input2' => 'Resistance (input): ',
            ),
            $this->function_strings[4] => array(
                'number_input' => 'Volts (input): ',
                'number_input2' => 'Resistance (input): '
            ),
            $this->function_strings[5] => array(
                'number_input' => 'Watts (input): ',
                'number_input2' => 'Volts (input): ',
            ),
            $this->function_strings[6] => array(
                'number_input' => 'Watts (input): ',
                'number_input2' => 'Resistance (input): ',
            ),
            $this->function_strings[7] => array(
                'number_input' => 'Volts (input): ',
                'number_input2' => 'Amps (input): '
            ),
            $this->function_strings[8] => array(
                'number_input' => 'Watts (input): ',
                'number_input2' => 'Amps (input): '
            ),
            $this->function_strings[9] => array(
                'number_input' => 'Volts (input): ',
                'number_input2' => 'Watts (input): '
            ),
            $this->function_strings[10] => array(
                'number_input' => 'Volts (input): ',
                'number_input2' => 'Amps (input): '
            ),
            $this->function_strings[11] => array(
                'number_input' => 'Resistance (input): ',
                'number_input2' => 'Amps (input): '
            ),
            $this->function_strings[12] => array(
                'number_input' => 'Volts (input): ',
                'number_input2' => 'Resistance (input): '
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[1] => array(
                'Formula:<br>' => 'I * R'
            ),
            $this->function_strings[2] => array(
                'Formula:<br>' => 'P / I'
            ),
            $this->function_strings[3] => array(
                'Formula:<br>' => 'sqrt(P * R)'
            ),
            $this->function_strings[4] => array(
                'Formula:<br>' => 'E / R'
            ),
            $this->function_strings[5] => array(
                'Formula:<br>' => 'P / E'
            ),
            $this->function_strings[6] => array(
                'Formula:<br>' => 'sqrt(P / R)'
            ),
            $this->function_strings[7] => array(
                'Formula:<br>' => 'E / I'
            ),
            $this->function_strings[8] => array(
                'Formula:<br>' => 'sqrt(P / I<sup>2</sup>)'
            ),
            $this->function_strings[9] => array(
                'Formula:<br>' => 'E<sup>2</sup> / P'
            ),
            $this->function_strings[10] => array(
                'Formula:<br>' => 'E * I'
            ),
            $this->function_strings[11] => array(
                'Formula:<br>' => 'R * I<sup>2</sup>'
            ),
            $this->function_strings[12] => array(
                'Formula:<br>' => 'E<sup>2</sup> / R'
            ),
        );
        #}}}

    }
}
