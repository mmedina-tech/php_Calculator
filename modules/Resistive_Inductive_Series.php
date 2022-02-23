<?php
# SYNOPSIS: Resistive Inductive in Series Formulas
#
# Resistive_Inductive_Series.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:55:01 PM PDT
# Last Update: 2022-02-23: 15:25
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

class Resistive_Inductive_Series extends FormulaBase{
    function __construct(){

        #{{{ Function Titles
        $this->function_strings = array(
            1 => "Impedance using Resistance and Inductive Reactance",
            2 => "Impedance using Resistance and Power Factor",
            3 => "Impedance using Total Volts and Total Amps",
            4 => "Impedance using Total Volts and Volt Amps",
            5 => "Impedance using Volt Amps and Total Amps",
            6 => "Inductor Amps using Inductor VAR's and Inductive Reactance",
            7 => "Inductor Amps using Inductor VAR's and Inductor Volts",
            8 => "Inductor Amps using Inductor Volts and Inductive Reactance",
            9 => "Inductor Rating using Inductive Reactance and Frequency",
            10 => "Inductive Reactance using Frequency and Inductor Rating",
            11 => "Inductive Reactance using Inductor VAR's and Inductor Amps",
            12 => "Inductive Reactance using Impedance and Resistance",
            13 => "Inductive Reactance using Inductor Volts and Inductor Amps",
            14 => "Inductive Reactance using Inductor Volts and Inductor VAR's",
            15 => "Inductor VAR's using Inductor Amps and Inductive Reactance",
            16 => "Inductor VAR's using Inductor Volts and Inductor Amps",
            17 => "Inductor VAR's using Indcutor Volts and Inductive Reactance",
            18 => "Inductor VAR's using Volt Amps and Watts",
            19 => "Inductor Volts using Inductor Amps and Inductive Reactance",
            20 => "Inductor Volts using Inductor VAR's and Inductive Reactance",
            21 => "Inductor Volts using Inductor VAR's and Inductor Amps",
            22 => "Inductor Volts using Total Volts and Resistor Volts",
            23 => "Power Factor using CoSine and Theta Angle",
            24 => "Power Factor using Resistance and Impedance",
            25 => "Power Factor using Resistor Volts and Total Volts",
            26 => "Power Factor using Watts and Volt Amps",
            27 => "Resistance using Impedance and Inductive Reactance",
            28 => "Resistance using Impedance and Power Factor",
            29 => "Resistance using Resistor Volts and Resistor Amps",
            30 => "Resistance using Resistor Volts and Watts",
            31 => "Resistance using Watts and Resistor Amps",
            32 => "Resistor Amps using Resistor Volts and Resistance",
            33 => "Resistor Amps using Watts and Resistor Volts",
            34 => "Resistor Amps using Watts and Resistance",
            35 => "Resistor Volts using Resistor Amps and Resistance",
            36 => "Resistor Volts using Total Volts and Inductor Volts",
            37 => "Resistor Volts using Total Volts and Power Factor",
            38 => "Resistor Volts using Watts and Resistance",
            39 => "Resistor Volts using Watts and Resistor Amps",
            40 => "Total Amps using Total Volts and Impedance",
            41 => "Total Amps using Volt Amps and Total Volts",
            42 => "Total Volts using Resistor Volts and Inductor Volts",
            43 => "Total Volts using Resistor Volts and Power Factor",
            44 => "Total Volts using Total Amps and Impedance",
            45 => "Total Volts using Volt Amps and Total Amps",
            46 => "Volt Amps using Total Amps and Impedance",
            47 => "Volt Amps using Total Volts and Total Amps",
            48 => "Volt Amps using Total Volts and Impedance",
            49 => "Volt Amps using Watts and Inductor VAR's",
            50 => "Volt Amps using Watts and Power Factor",
            51 => "Watts using Resistor Amps and Resistance",
            52 => "Watts using Resistor Volts and Resistor Amps",
            53 => "Watts using Resistor Volts and Resistance",
            54 => "Watts using Volt Amps and Inductor VAR's",
            55 => "Watts using Volt Amps and Power Factor",
        );
        #}}}

        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[1] => function($num, $num2){
                $result = sqrt( pow($num, 2) + pow($num2, 2));
                return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
            },
            $this->function_strings[2] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
            },
            $this->function_strings[3] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
            },
            $this->function_strings[4] => function($num, $num2){
                $result = pow($num, 2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
            },
            $this->function_strings[5] => function($num, $num2){
                $result = $num / pow($num2, 2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
            },
            $this->function_strings[6] => function($num, $num2){
                $result = sqrt( $num / $num2 );
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Amp'));
            },
            $this->function_strings[7] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Amp'));
            },
            $this->function_strings[8] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Amp'));
            },
            $this->function_strings[9] => function($num, $num2){
                $result = $num / (2*$this->PI*$num2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Size'));
            },
            $this->function_strings[10] => function($num, $num2){
                $result = 2 * $this->PI * $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance Rating'));
            },
            $this->function_strings[11] => function($num, $num2){
                $result = $num / pow($num2, 2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance Rating'));
            },
            $this->function_strings[12] => function($num, $num2){
                $result = pow($num, 2) - pow($num2, 2);
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result = sqrt( $result );
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance Rating'));
            },
            $this->function_strings[13] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance Rating'));
            },
            $this->function_strings[14] => function($num, $num2){
                $result = pow($num, 2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance Rating'));
            },
            $this->function_strings[15] => function($num, $num2){
                $result = pow($num, 2) * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor VAR'));
            },
            $this->function_strings[16] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor VAR'));
            },
            $this->function_strings[17] => function($num, $num2){
                $result = pow($num, 2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor VAR'));
            },
            $this->function_strings[18] => function($num, $num2){
                $result = pow($num, 2) - pow($num2, 2);
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result = sqrt( $result );
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor VAR'));
            },
            $this->function_strings[19] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Volt'));
            },
            $this->function_strings[20] => function($num, $num2){
                $result = sqrt( $num * $num2 );
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Volt'));
            },
            $this->function_strings[21] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Volt'));
            },
            $this->function_strings[22] => function($num, $num2){
                $result = pow($num, 2) - pow($num2, 2);
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result = sqrt( $result );
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Volt'));
            },
            $this->function_strings[23] => function($num){
                $result = cos( $num );
                return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
            },
            $this->function_strings[24] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
            },
            $this->function_strings[25] => function($num, $num2){
                $result = $num / $num;
                return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
            },
            $this->function_strings[26] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
            },
            $this->function_strings[27] => function($num, $num2){
                $result = pow($num, 2) - pow($num2, 2);
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result = sqrt( $result );
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[28] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[29] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[30] => function($num, $num2){
                $result = pow($num, 2) * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[31] => function($num, $num2){
                $result = $num / pow($num2, 2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[32] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Amp'));
            },
            $this->function_strings[33] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Amp'));
            },
            $this->function_strings[34] => function($num, $num2){
                $result = sqrt( $num / $num2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Amp'));
            },
            $this->function_strings[35] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
            },
            $this->function_strings[36] => function($num, $num2){
                $result = pow($num, 2) - pow($num2, 2);
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result = sqrt($result);
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
            },
            $this->function_strings[37] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
            },
            $this->function_strings[38] => function($num, $num2){
                $result = sqrt( $num * $num2 );
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
            },
            $this->function_strings[39] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
            },
            $this->function_strings[40] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Amp'));
            },
            $this->function_strings[41] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Amp'));
            },
            $this->function_strings[42] => function($num, $num2){
                $result = sqrt( pow($num, 2) + pow($num2, 2) );
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
            },
            $this->function_strings[43] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
            },
            $this->function_strings[44] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
            },
            $this->function_strings[45] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
            },
            $this->function_strings[46] => function($num, $num2){
                $result = pow($num, 2) * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
            },
            $this->function_strings[47] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
            },
            $this->function_strings[48] => function($num, $num2){
                $result = pow($num, 2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
            },
            $this->function_strings[49] => function($num, $num2){
                $result = sqrt( pow($num, 2) + pow($num2, 2) );
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
            },
            $this->function_strings[50] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
            },
            $this->function_strings[51] => function($num, $num2){
                $result = pow($num, 2) * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[52] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[53] => function($num, $num2){
                $result = pow($num, 2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[54] => function($num, $num2){
                $result = pow($num, 2) - pow($num2, 2);
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result = sqrt( $result );
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[55] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->functionInputs = array(
            $this->function_strings[1] => array(
                'number_input' => "Resistance (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[2] => array(
                'number_input' => "Resistance (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
            $this->function_strings[3] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Total Amps (input): ",
            ),
            $this->function_strings[4] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Volt Amps (input): ",
            ),
            $this->function_strings[5] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Total Amps (input): ",
            ),
            $this->function_strings[6] => array(
                'number_input' => "Inductor VAR's (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[7] => array(
                'number_input' => "Inductor VAR's (input): ",
                'number_input2' => "Inductor Volts (input): ",
            ),
            $this->function_strings[8] => array(
                'number_input' => "Inductor Volts (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[9] => array(
                'number_input' => "Inductive Reactance (input): ",
                'number_input2' => "Frequency (input): ",
            ),
            $this->function_strings[10] => array(
                'number_input' => "Frequency (input): ",
                'number_input2' => "Inductor Rating (input): ",
            ),
            $this->function_strings[11] => array(
                'number_input' => "Inductor VAR's (input): ",
                'number_input2' => "Inductor Amps (input): ",
            ),
            $this->function_strings[12] => array(
                'number_input' => "Impedance (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[13] => array(
                'number_input' => "Inductor Volts (input): ",
                'number_input2' => "Inductor Amps (input): ",
            ),
            $this->function_strings[14] => array(
                'number_input' => "Inductor Volts (input): ",
                'number_input2' => "Inductor VAR's (input): ",
            ),
            $this->function_strings[15] => array(
                'number_input' => "Inductor Amps (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[16] => array(
                'number_input' => "Inductor Volts (input): ",
                'number_input2' => "Inductor Amps (input): ",
            ),
            $this->function_strings[17] => array(
                'number_input' => "Indcutor Volts (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[18] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Watts (input): ",
            ),
            $this->function_strings[19] => array(
                'number_input' => "Inductor Amps (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[20] => array(
                'number_input' => "Inductor VAR's (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[21] => array(
                'number_input' => "Inductor VAR's (input): ",
                'number_input2' => "Inductor Amps (input): ",
            ),
            $this->function_strings[22] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Resistor Volts (input): ",
            ),
            $this->function_strings[23] => array(
                'number_input' => 'Theta Angle (input): ',
            ),
            $this->function_strings[24] => array(
                'number_input' => "Resistance (input): ",
                'number_input2' => "Impedance (input): ",
            ),
            $this->function_strings[25] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Total Volts (input): ",
            ),
            $this->function_strings[26] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Volt Amps (input): ",
            ),
            $this->function_strings[27] => array(
                'number_input' => "Impedance (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[28] => array(
                'number_input' => "Impedance (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
            $this->function_strings[29] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Resistor Amps (input): ",
            ),
            $this->function_strings[30] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Watts (input): ",
            ),
            $this->function_strings[31] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Resistor Amps (input): ",
            ),
            $this->function_strings[32] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[33] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Resistor Volts (input): ",
            ),
            $this->function_strings[34] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[35] => array(
                'number_input' => "Resistor Amps (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[36] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Inductor Volts (input): ",
            ),
            $this->function_strings[37] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
            $this->function_strings[38] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[39] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Resistor Amps (input): ",
            ),
            $this->function_strings[40] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Impedance (input): ",
            ),
            $this->function_strings[41] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Total Volts (input): ",
            ),
            $this->function_strings[42] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Inductor Volts (input): ",
            ),
            $this->function_strings[43] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
            $this->function_strings[44] => array(
                'number_input' => "Total Amps (input): ",
                'number_input2' => "Impedance (input): ",
            ),
            $this->function_strings[45] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Total Amps (input): ",
            ),
            $this->function_strings[46] => array(
                'number_input' => "Total Amps (input): ",
                'number_input2' => "Impedance (input): ",
            ),
            $this->function_strings[47] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Total Amps (input): ",
            ),
            $this->function_strings[48] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Impedance (input): ",
            ),
            $this->function_strings[49] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Inductor VAR's (input): ",
            ),
            $this->function_strings[50] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
            $this->function_strings[51] => array(
                'number_input' => "Resistor Amps (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[52] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Resistor Amps (input): ",
            ),
            $this->function_strings[53] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[54] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Inductor VAR's (input): ",
            ),
            $this->function_strings[55] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[1] => array(
                'Formula:<br>' => 'sqrt(R<sup>2</sup> + X<sub>L</sub><sup>2</sup>)'
            ),
            $this->function_strings[2] => array(
                'Formula:<br>' => 'R / PF'
            ),
            $this->function_strings[3] => array(
                'Formula:<br>' => 'E<sub>T</sub> / I<sub>T</sub>'
            ),
            $this->function_strings[4] => array(
                'Formula:<br>' => 'E<sub>T</sub> / VA'
            ),
            $this->function_strings[5] => array(
                'Formula:<br>' => 'VA / E<sub>T</sub>'
            ),
            $this->function_strings[6] => array(
                'Formula:<br>' => 'sqrt(VARS<sub>L</sub> / X<sub>L</sub>)'
            ),
            $this->function_strings[7] => array(
                'Formula:<br>' => 'VARS<sub>L</sub> / E<sub>L</sub>'
            ),
            $this->function_strings[8] => array(
                'Formula:<br>' => 'E<sub>L</sub> / X<sub>L</sub>'
            ),
            $this->function_strings[9] => array(
                'Formula:<br>' => 'X<sub>L</sub> / (2 * PI * F)'
            ),
            $this->function_strings[10] => array(
                'Formula:<br>' => '2 * PI * F * L'
            ),
            $this->function_strings[11] => array(
                'Formula:<br>' => 'VARS<sub>L</sub> / I<sub>L</sub><sup>2</sup>'
            ),
            $this->function_strings[12] => array(
                'Formula:<br>' => 'sqrt(Z<sup>2</sup> - R<sup>2</sup>)'
            ),
            $this->function_strings[13] => array(
                'Formula:<br>' => 'E<sub>L</sub> / I<sub>L</sub>'
            ),
            $this->function_strings[14] => array(
                'Formula:<br>' => 'E<sub>L</sub><sup>2</sup> / VARS<sub>L</sub>'
            ),
            $this->function_strings[15] => array(
                'Formula:<br>' => 'I<sub>L</sub><sup>2</sup> * X<sub>L</sub>'
            ),
            $this->function_strings[16] => array(
                'Formula:<br>' => 'E<sub>L</sub> * I<sub>L</sub>'
            ),
            $this->function_strings[17] => array(
                'Formula:<br>' => 'E<sub>L</sub><sup>2</sup> / X<sub>L</sub>'
            ),
            $this->function_strings[18] => array(
                'Formula:<br>' => 'sqrt(VA<sup>2</sup> - P<sup>2</sup>)'
            ),
            $this->function_strings[19] => array(
                'Formula:<br>' => 'I<sub>L</sub> * X<sub>L</sub>'
            ),
            $this->function_strings[20] => array(
                'Formula:<br>' => 'sqrt(VARS<sub>L</sub> * X<sub>L</sub>)'
            ),
            $this->function_strings[21] => array(
                'Formula:<br>' => 'VARS<sub>L</sub> / I<sub>L</sub>'
            ),
            $this->function_strings[22] => array(
                'Formula:<br>' => 'sqrt(E<sub>T</sub><sup>2</sup> - E<sub>R</sub><sup>2</sup>)'
            ),
            $this->function_strings[23] => array(
                'Formula:<br>' => 'CoSine(Theta Angle)'
            ),
            $this->function_strings[24] => array(
                'Formula:<br>' => 'R / Z'
            ),
            $this->function_strings[25] => array(
                'Formula:<br>' => 'E<sub>R</sub> / E<sub>T</sub>'
            ),
            $this->function_strings[26] => array(
                'Formula:<br>' => 'P / VA'
            ),
            $this->function_strings[27] => array(
                'Formula:<br>' => 'sqrt(Z<sup>2</sup> - X<sub>L</sub><sup>2</sup>)'
            ),
            $this->function_strings[28] => array(
                'Formula:<br>' => 'Z / PF<sup>2</sup>'
            ),
            $this->function_strings[29] => array(
                'Formula:<br>' => 'E<sub>R</sub> / I<sub>R</sub>'
            ),
            $this->function_strings[30] => array(
                'Formula:<br>' => 'E<sub>R</sub> * P'
            ),
            $this->function_strings[31] => array(
                'Formula:<br>' => 'P<sup>2</sup> / I<sub>R</sub>'
            ),
            $this->function_strings[32] => array(
                'Formula:<br>' => 'E<sub>R</sub> / R'
            ),
            $this->function_strings[33] => array(
                'Formula:<br>' => 'P / E<sub>R</sub>'
            ),
            $this->function_strings[34] => array(
                'Formula:<br>' => 'sqrt(P / R)'
            ),
            $this->function_strings[35] => array(
                'Formula:<br>' => 'I<sub>R</sub> * R'
            ),
            $this->function_strings[36] => array(
                'Formula:<br>' => 'sqrt(E<sub>T</sub><sup>2</sup> - E<sub>L</sub><sup>2</sup>)'
            ),
            $this->function_strings[37] => array(
                'Formula:<br>' => 'E<sub>T</sub> * PF'
            ),
            $this->function_strings[38] => array(
                'Formula:<br>' => 'sqrt(P * R)'
            ),
            $this->function_strings[39] => array(
                'Formula:<br>' => 'P / I<sub>R</sub>'
            ),
            $this->function_strings[40] => array(
                'Formula:<br>' => 'E<sub>T</sub> / Z'
            ),
            $this->function_strings[41] => array(
                'Formula:<br>' => 'VA / E<sub>T</sub>'
            ),
            $this->function_strings[42] => array(
                'Formula:<br>' => 'sqrt(E<sub>R</sub><sup>2</sup> + E<sub>L</sub><sup>2</sup>)'
            ),
            $this->function_strings[43] => array(
                'Formula:<br>' => 'E<sub>R</sub> / PF'
            ),
            $this->function_strings[44] => array(
                'Formula:<br>' => 'I<sub>T</sub> * Z'
            ),
            $this->function_strings[45] => array(
                'Formula:<br>' => 'VA / I<sub>T</sub>'
            ),
            $this->function_strings[46] => array(
                'Formula:<br>' => 'I<sub>T</sub><sup>2</sup> * Z'
            ),
            $this->function_strings[47] => array(
                'Formula:<br>' => 'E<sub>T</sub> * I<sub>T</sub>'
            ),
            $this->function_strings[48] => array(
                'Formula:<br>' => 'E<sub>T</sub><sup>2</sup> / Z'
            ),
            $this->function_strings[49] => array(
                'Formula:<br>' => 'sqrt(P<sup>2</sup> + VARS<sub>L</sub><sup>2</sup>)'
            ),
            $this->function_strings[50] => array(
                'Formula:<br>' => 'P / PF'
            ),
            $this->function_strings[51] => array(
                'Formula:<br>' => 'I<sub>R</sub><sup>2</sup> * R'
            ),
            $this->function_strings[52] => array(
                'Formula:<br>' => 'E<sub>R</sub> * I<sub>R</sub>'
            ),
            $this->function_strings[53] => array(
                'Formula:<br>' => 'E<sub>R</sub><sup>2</sup> / R'
            ),
            $this->function_strings[54] => array(
                'Formula:<br>' => 'sqrt(VA<sup>2</sup> - VARS<sub>L</sub><sup>2</sup>)'
            ),
            $this->function_strings[55] => array(
                'Formula:<br>' => 'VA * PF'
            ),
        );
        #}}}

    }
}
