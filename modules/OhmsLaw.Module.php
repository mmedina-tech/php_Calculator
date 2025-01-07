<?php
# SYNOPSIS: Basic Electrical Formulas
#
# OhmsLaw.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:48:35 PM PDT
# Last Update: 2022-03-07: 10:45
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
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Volts using Amps and Resistance',
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Volt'));
                },
                array(
                    'number_input' => 'Amps (input): ',
                    'number_input2' => 'Resistance (input): ',
                ),
                array(
                    '' => 'I * R'
                ),
            ),
            FormulaBase::create_func_entry(
                'Volts using Watts and Amps',
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Volt'));
                },
                array(
                    'number_input' => 'Watts (input): ',
                    'number_input2' => 'Amps (input): ',
                ),
                array(
                    '' => 'P / I'
                ),
            ),
            FormulaBase::create_func_entry(
                'Volts using Watts and Resistance',
                function($num, $num2){
                    $result = sqrt($num * $num2);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Volt'));
                },
                array(
                    'number_input' => 'Watts (input): ',
                    'number_input2' => 'Resistance (input): ',
                ),
                array(
                    '' => 'sqrt(P * R)'
                ),
            ),
            FormulaBase::create_func_entry(
                'Amps using Volts and Resistance',
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Amp'));
                },
                array(
                    'number_input' => 'Volts (input): ',
                    'number_input2' => 'Resistance (input): '
                ),
                array(
                    '' => 'E / R'
                ),
            ),
            FormulaBase::create_func_entry(
                'Amps using Watts and Volts',
                function($num, $num2){
                    $result = sqrt($num / $num2);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Amp'));
                },
                array(
                    'number_input' => 'Watts (input): ',
                    'number_input2' => 'Volts (input): ',
                ),
                array(
                    '' => 'P / E'
                ),
            ),
            FormulaBase::create_func_entry(
                'Amps using Watts and Resistance',
                function($num, $num2){
                    $result = sqrt($num / $num2);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Amp'));
                },
                array(
                    'number_input' => 'Watts (input): ',
                    'number_input2' => 'Resistance (input): ',
                ),
                array(
                    '' => 'sqrt(P / R)'
                ),
            ),
            FormulaBase::create_func_entry(
                'Resistance using Volts and Amps',
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
                },
                array(
                    'number_input' => 'Volts (input): ',
                    'number_input2' => 'Amps (input): '
                ),
                array(
                    '' => 'E / I'
                ),
            ),
            FormulaBase::create_func_entry(
                'Resistance using Watts and Amps',
                function($num, $num2){
                    $result = sqrt($num / pow($num2, 2));
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
                },
                array(
                    'number_input' => 'Watts (input): ',
                    'number_input2' => 'Amps (input): '
                ),
                array(
                    '' => 'sqrt(P / I<sup>2</sup>)'
                ),
            ),
            FormulaBase::create_func_entry(
                'Resistance using Volts and Watts',
                function($num, $num2){
                    $result = pow($num, 2) / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
                },
                array(
                    'number_input' => 'Volts (input): ',
                    'number_input2' => 'Watts (input): '
                ),
                array(
                    '' => 'E<sup>2</sup> / P'
                ),
            ),
            FormulaBase::create_func_entry(
                'Watts using Volts and Amps',
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => 'Volts (input): ',
                    'number_input2' => 'Amps (input): '
                ),
                array(
                    '' => 'E * I'
                ),
            ),
            FormulaBase::create_func_entry(
                'Watts using Resistance and Amps',
                function($num, $num2){
                    $result = $num * pow($num2, 2);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => 'Resistance (input): ',
                    'number_input2' => 'Amps (input): '
                ),
                array(
                    '' => 'R * I<sup>2</sup>'
                ),
            ),
            FormulaBase::create_func_entry(
                'Watts using Volts and Resistance',
                function($num, $num2){
                    $result = pow($num, 2) / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => 'Volts (input): ',
                    'number_input2' => 'Resistance (input): '
                ),
                array(
                    '' => 'E<sup>2</sup> / R'
                ),
            ),
        );
    }
}
$cats["Ohms Law"] = new OhmsLaw();
