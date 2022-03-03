<?php
# SYNOPSIS: Resistive Inductive Capacitive in Parallel Formulas
#
# Resistive_Inductive_Capacitive_Parallel.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:53:31 PM PDT
# Last Update: 2022-03-02: 20:33
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

class Resistive_Inductive_Capacitive_Parallel extends FormulaBase{
    function __construct(){

        #{{{ Function Titles
        $this->function_strings = array(
            1 => "Impedance using Resistance, Inductive Reactance, and Capacitive Reactance",
            2 => "Volt Amps using Total Volts and Total Amps",
            3 => "Impedance using Total Volt and Total Amps",
            4 => "Volt Amps using Total Amps and Impedance",
            5 => "Total Volts using Total Amps and Impedance",
            6 => "Impedance using Total Volts and Volt Amps",
            7 => "Volt Amps using Total Volts and Impedance",
            8 => "Total Volts using Volt Amps and Total Amps",
            9 => "Impedance using Volt Amps and Total Amps",
            10 => "Volt Amps using Inductive Reactance, Capacitive Reactance, and Watts",
            11 => "Total Volts using Volt Amps and Impedance",
            12 => "Impedance using Resistance and Power Factor",
            13 => "Volt Amps using Watts and Power Factor",
            14 => "Total Amps using Resistor Amps, Inductor Amps, and Capacitor Amps",
            15 => "Power Factor using Impedance and Resistance",
            16 => "Inductor Volts using Inductor Amps and Inductive Reactance",
            17 => "Total Amps using Total Volts and Impedance",
            18 => "Power Factor using Watts and Volt Amps",
            19 => "Inductor Volts using Inductor VARs and Inductor Amps",
            20 => "Total Amps using Volt Amps and Total Volts",
            21 => "Power Factor using Resistor Amps and Total Amps",
            22 => "Inductor Volts using Inductor VARs and Inductive Reactance",
            23 => "Total Amps using Volt Amps and Impedance",
            24 => "Power Factor using CoSine and Theta Angle",
            25 => "Total Amps using Resistor Amps and Power Factor",
            26 => "Inductor Amps using Inductor Volts and Inductive Reactance",
            27 => "Inductor Amps using Inductor VARs and Inductor Volts",
            28 => "Indcutor Amps using Inductor VARs and Inductive Reactance",
            29 => "Inductor VARs using Inductor Volts and Inductive Reactance",
            30 => "Inductor VARs using Inductor Amps and Inductive Reactance",
            31 => "Inductor VARs using Inductor Volts and Inductor Amps",
            32 => "Capacitor VARs using Capacitor Volts and Capacitive Reactance",
            33 => "Capacitor VARs using Capacitor Amps and Capacitive Reactance",
            34 => "Capacitor VARs using Capacitor Volts and Capacitor Amps",
            35 => "Inductive Reactance using Inductor Volts and Inductor Amps",
            36 => "Resistor Volts using Resistor Amps and Resistance",
            37 => "Resistor Amps using Total Amps, Inductor Amps, and Capcitor Amps",
            38 => "Inductive Reactance using Frequency and Inductor Rating",
            39 => "Resistor Volts using Watts and Resistance",
            40 => "Resistor Amps using Resistor Volts and Resistance",
            41 => "Inductive Reactance using Inductor Volts and Inductor VARs",
            42 => "Resistor Volts using Watts and Resistor Amps",
            43 => "Resistor Amps using Watts and Resistor Volts",
            44 => "Inductive Reactance using Inductor VARs and Inductor Amps",
            45 => "Resistance using Resistor Volts and Resistor Amps",
            46 => "Resistor Amps using Watts and Resistance",
            47 => "Watts using Volt Amps, Inductor VARs, and Capacitor VARs",
            48 => "Resistor Amps using Total Amps and Power Factor",
            49 => "Resistance using Watts and Resistor Amps",
            50 => "Watts using Volt Amps and Power Factor",
            51 => "Capacitor Volts using Capacitor VARs and Capacitor Amps",
            52 => "Resistance using Impedance and Power Factor",
            53 => "Watts using Resistor Volts and Resistor Amps",
            54 => "Capacitor Volts using Capacitor Amps and Capacitive Reactance",
            55 => "Resistance using Resistor Volts and Watts",
            56 => "Watts using Resistor Volts and Resistance",
            57 => "Capacitor Volts using Capacitor VARs and Capacitive Reactance",
            58 => "Resistance using Impedance, Inductive Reactance, and Capacitive Reactance",
            59 => "Watts using Resistor Amps using Resistance",
            60 => "Inductor Rating using Inductive Reactance and Frequency",
            61 => "Capacitor Amps using Capacitor VARs and Capacitive Reactance",
            62 => "Capacitor Amps using Capacitor VARs and Capacitor Volts",
            63 => "Capacitive Reactance using Capacitor VARs and Capacitor Amps",
            64 => "Capacitive Reactance using Capacitor Volts and Capacitor Amps",
            65 => "Capacitive Reactance using Capacitor Volts and Capacitor VARs",
            66 => "Capacitor Rating using Frequency and Capacitive Reactance",
        );
        #}}}

        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[1] => function($num, $num2, $num3){
                $result = (pow(1/$num,2)) + (pow((1/$num2) - (1/$num3),2));
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result = 1/(sqrt($result));
                return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
            },
            $this->function_strings[2] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
            },
            $this->function_strings[3] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
            },
            $this->function_strings[4] => function($num, $num2){
                $result = pow($num,2) * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
            },
            $this->function_strings[5] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
            },
            $this->function_strings[6] => function($num, $num2){
                $result = pow($num,2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
            },
            $this->function_strings[7] => function($num, $num2){
                $result = pow($num,2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
            },
            $this->function_strings[8] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
            },
            $this->function_strings[9] => function($num, $num2){
                $result = $num / pow($num2,2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
            },
            $this->function_strings[10] => function($num, $num2, $num3){

                $result = (pow($num - $num2, 2)) + (pow($num3,2));
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result = sqrt($result);
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
            },
            $this->function_strings[11] => function($num, $num2){
                $result = sqrt( $num * $num2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
            },
            $this->function_strings[12] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
            },
            $this->function_strings[13] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
            },
            $this->function_strings[14] => function($num, $num2, $num3){
                $result = (pow($num,2)) + (pow($num2 - $num3,2));
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result =  sqrt( $result );
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Amp'));
            },
            $this->function_strings[15] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
            },
            $this->function_strings[16] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Volt'));
            },
            $this->function_strings[17] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Amp'));
            },
            $this->function_strings[18] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
            },
            $this->function_strings[19] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Volt'));
            },
            $this->function_strings[20] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Amp'));
            },
            $this->function_strings[21] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
            },
            $this->function_strings[22] => function($num, $num2){
                $result = sqrt( $num * $num2 );
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Volt'));
            },
            $this->function_strings[23] => function($num, $num2){
                $result = sqrt( $num / $num2 );
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Amp'));
            },
            $this->function_strings[24] => function($num){
                $result = cos( $num );
                return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
            },
            $this->function_strings[25] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Total Amp'));
            },
            $this->function_strings[26] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Amp'));
            },
            $this->function_strings[27] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Amp'));
            },
            $this->function_strings[28] => function($num, $num2){
                $result = sqrt( $num / $num2 );
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Amp'));
            },
            $this->function_strings[29] => function($num, $num2){
                $result = pow($num,2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor VAR'));
            },
            $this->function_strings[30] => function($num, $num2){
                $result = pow($num,2) * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor VAR'));
            },
            $this->function_strings[31] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor VAR'));
            },
            $this->function_strings[32] => function($num, $num2){
                $result = pow($num,2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor VAR'));
            },
            $this->function_strings[33] => function($num, $num2){
                $result = pow($num, 2) * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor VAR'));
            },
            $this->function_strings[34] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor VAR'));
            },
            $this->function_strings[35] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance'));
            },
            $this->function_strings[36] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
            },
            $this->function_strings[37] => function($num, $num2, $num3){
                $result = (pow($num,2)) - (pow($num2 - $num3, 2));
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result = sqrt($result);
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Amp'));
            },
            $this->function_strings[38] => function($num, $num2){
                $result = 2 * $this->PI * $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance'));
            },
            $this->function_strings[39] => function($num, $num2){
                $result = sqrt( $num * $num2 );
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
            },
            $this->function_strings[40] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Amp'));
            },
            $this->function_strings[41] => function($num, $num2){
                $result = pow($num,2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance'));
            },
            $this->function_strings[42] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
            },
            $this->function_strings[43] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Amp'));
            },
            $this->function_strings[44] => function($num, $num2){
                $result = $num / pow($num2,2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance'));
            },
            $this->function_strings[45] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[46] => function($num, $num2){
                $result = sqrt( $num / $num2 );
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Amp'));
            },
            $this->function_strings[47] => function($num, $num2, $num3){
                $result = (pow($num,2)) - (pow($num2 - $num3, 2));
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result = sqrt( $result );
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[48] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Amp'));
            },
            $this->function_strings[49] => function($num, $num2){
                $result = $num / pow($num2,2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[50] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[51] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Volt'));
            },
            $this->function_strings[52] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[53] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[54] => function($num, $num2){
                $result = $num * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Volt'));
            },
            $this->function_strings[55] => function($num, $num2){
                $result = pow($num,2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[56] => function($num, $num2){
                $result = pow($num,2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[57] => function($num, $num2){
                $result = sqrt( $num * $num2 );
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Volt'));
            },
            $this->function_strings[58] => function($num, $num2, $num3){
                $result = pow((1/$num),2) - pow((1/$num2) - (1/$num3),2);
                if ( $result <= 0 ){
                    return array($this->error_msg, '');
                }
                $result = 1 / sqrt( $result );
                return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
            },
            $this->function_strings[59] => function($num, $num2){
                $result = pow($num,2) * $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
            },
            $this->function_strings[60] => function($num, $num2){
                $result = $num / (2 * $this->PI * $num2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Rating'));
            },
            $this->function_strings[61] => function($num, $num2){
                $result = sqrt( $num / $num2 );
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Amp'));
            },
            $this->function_strings[62] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Amp'));
            },
            $this->function_strings[63] => function($num, $num2){
                $result = $num / pow($num2,2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitive Reactance'));
            },
            $this->function_strings[64] => function($num, $num2){
                $result = $num / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitive Reactance'));
            },
            $this->function_strings[65] => function($num, $num2){
                $result = pow($num,2) / $num2;
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitive Reactance'));
            },
            $this->function_strings[66] => function($num, $num2){
                $result = 1 / (2 * $this->PI * $num * $num2);
                return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Rating'));
            },

        );
        #}}}

        #{{{ Inputs
        $this->function_inputs = array(
            $this->function_strings[1] => array(
                'number_input' => "Resistance (input): ",
                'number_input2' => "Inductive Reactance (input): ",
                'number_input3' => "Capacitive Reactance (input): ",
            ),
            $this->function_strings[2] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Total Amps (input): ",
            ),
            $this->function_strings[3] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Total Amps (input): ",
            ),
            $this->function_strings[4] => array(
                'number_input' => "Total Amps (input): ",
                'number_input2' => "Impedance (input): ",
            ),
            $this->function_strings[5] => array(
                'number_input' => "Total Amps (input): ",
                'number_input2' => "Impedance (input): ",
            ),
            $this->function_strings[6] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Volt Amps (input): ",
            ),
            $this->function_strings[7] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Impedance (input): ",
            ),
            $this->function_strings[8] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Total Amps (input): ",
            ),
            $this->function_strings[9] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Total Amps (input): ",
            ),
            $this->function_strings[10] => array(
                'number_input' => "Inductor VARs (input): ",
                'number_input2' => "Capacitor VARs (input): ",
                'number_input3' => "Watts (input): ",
            ),
            $this->function_strings[11] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Impedance (input): ",
            ),
            $this->function_strings[12] => array(
                'number_input' => "Resistance (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
            $this->function_strings[13] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
            $this->function_strings[14] => array(
                'number_input' => "Resistor Amps (input): ",
                'number_input2' => "Inductor Amps (input): ",
                'number_input3' => "Capacitor Amps (input): ",
            ),
            $this->function_strings[15] => array(
                'number_input' => "Impedance (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[16] => array(
                'number_input' => "Inductor Amps (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[17] => array(
                'number_input' => "Total Volts (input): ",
                'number_input2' => "Impedance (input): ",
            ),
            $this->function_strings[18] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Volt Amps (input): ",
            ),
            $this->function_strings[19] => array(
                'number_input' => "Inductor VARs (input): ",
                'number_input2' => "Inductor Amps (input): ",
            ),
            $this->function_strings[20] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Total Volts (input): ",
            ),
            $this->function_strings[21] => array(
                'number_input' => "Resistor Amps (input): ",
                'number_input2' => "Total Amps (input): ",
            ),
            $this->function_strings[22] => array(
                'number_input' => "Inductor VARs (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[23] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Impedance (input): ",
            ),
            $this->function_strings[24] => array(
                'number_input' => 'Theta Angle (input): ',
            ),
            $this->function_strings[25] => array(
                'number_input' => "Resistor Amps (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
            $this->function_strings[26] => array(
                'number_input' => "Indcutor Volts (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[27] => array(
                'number_input' => "Inductor VARs (input): ",
                'number_input2' => "Inductor Volts (input): ",
            ),
            $this->function_strings[28] => array(
                'number_input' => "Inductor VARs (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[29] => array(
                'number_input' => "Inductor Volts (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[30] => array(
                'number_input' => "Inductor Amps (input): ",
                'number_input2' => "Indcutive Reactance (input): ",
            ),
            $this->function_strings[31] => array(
                'number_input' => "Inductor Volts (input): ",
                'number_input2' => "Inductor Amps (input): ",
            ),
            $this->function_strings[32] => array(
                'number_input' => "Capacitor Volts (input): ",
                'number_input2' => "Capacitive Reactance (input): ",
            ),
            $this->function_strings[33] => array(
                'number_input' => "Capacitor Amps (input): ",
                'number_input2' => "Capacitive Reactance (input): ",
            ),
            $this->function_strings[34] => array(
                'number_input' => "Capacitor Volts (input): ",
                'number_input2' => "Capacitor Amps (input): ",
            ),
            $this->function_strings[35] => array(
                'number_input' => "Indcutor Volts (input): ",
                'number_input2' => "Inductor Amps (input): ",
            ),
            $this->function_strings[36] => array(
                'number_input' => "Resistor Amps (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[37] => array(
                'number_input' => "Total Amps (input): ",
                'number_input2' => "Inductor Amps (input): ",
                'number_input3' => "Capacitor Amps (input): ",
            ),
            $this->function_strings[38] => array(
                'number_input' => "Frequency (input): ",
                'number_input2' => "Inductor Rating (input): ",
            ),
            $this->function_strings[39] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[40] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[41] => array(
                'number_input' => "Inductor Volts (input): ",
                'number_input2' => "Inductor VARs (input): ",
            ),
            $this->function_strings[42] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Resistor Amps (input): ",
            ),
            $this->function_strings[43] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Resisitor Volts (input): ",
            ),
            $this->function_strings[44] => array(
                'number_input' => "Inductor VARs (input): ",
                'number_input2' => "Inductor Amps (input): ",
            ),
            $this->function_strings[45] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Resistor Amps (input): ",
            ),
            $this->function_strings[46] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[47] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Inductor VARs (input): ",
                'number_input3' => "Capacitor VARs (input): ",
            ),
            $this->function_strings[48] => array(
                'number_input' => "Total Amps (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
            $this->function_strings[49] => array(
                'number_input' => "Watts (input): ",
                'number_input2' => "Resistor Amps (input): ",
            ),
            $this->function_strings[50] => array(
                'number_input' => "Volt Amps (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
            $this->function_strings[51] => array(
                'number_input' => "Capcitor VARs (input): ",
                'number_input2' => "Capacitor Amps (input): ",
            ),
            $this->function_strings[52] => array(
                'number_input' => "Impedance (input): ",
                'number_input2' => "Power Factor (input): ",
            ),
            $this->function_strings[53] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Resistor Amps (input): ",
            ),
            $this->function_strings[54] => array(
                'number_input' => "Capacitor Amps (input): ",
                'number_input2' => "Capacitive Reactance (input): ",
            ),
            $this->function_strings[55] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Watts (input): ",
            ),
            $this->function_strings[56] => array(
                'number_input' => "Resistor Volts (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[57] => array(
                'number_input' => "Inductor VARs (input): ",
                'number_input2' => "Inductive Reactance (input): ",
            ),
            $this->function_strings[58] => array(
                'number_input' => "Impedance (input): ",
                'number_input2' => "Inductive Reactance (input): ",
                'number_input3' => "Capacitive Reactance (input): ",
            ),
            $this->function_strings[59] => array(
                'number_input' => "Resistor Amps (input): ",
                'number_input2' => "Resistance (input): ",
            ),
            $this->function_strings[60] => array(
                'number_input' => "Inductive Reactance (input): ",
                'number_input2' => "Frequency (input): ",
            ),
            $this->function_strings[61] => array(
                'number_input' => "Capacitor VARs (input): ",
                'number_input2' => "Capacitive Reactance (input): ",
            ),
            $this->function_strings[62] => array(
                'number_input' => "Capacitor VARs (input): ",
                'number_input2' => "Capacitor Volts (input): ",
            ),
            $this->function_strings[63] => array(
                'number_input' => "Capacitor VARs (input): ",
                'number_input2' => "Capacitor Amps (input): ",
            ),
            $this->function_strings[64] => array(
                'number_input' => "Capacitor Volts (input): ",
                'number_input2' => "Capacitor Amps (input): ",
            ),
            $this->function_strings[65] => array(
                'number_input' => "Capacitor Volts (input): ",
                'number_input2' => "Capacitor VARs (input): ",
            ),
            $this->function_strings[66] => array(
                'number_input' => "Frequency (input): ",
                'number_input2' => "Capacitive Reactance (input): ",
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[1] => array(
                'Formula:<br>' => 'sqrt((1 / R)<sup>2</sup> + (1 / X<sub>L</sub> - 1 / X<sub>C</sub>)<sup>2</sup>)'
            ),
            $this->function_strings[2] => array(
                'Formula:<br>' => 'E<sub>T</sub> * I<sub>T</sub>'
            ),
            $this->function_strings[3] => array(
                'Formula:<br>' => 'E<sub>T</sub> / I<sub>T</sub>'
            ),
            $this->function_strings[4] => array(
                'Formula:<br>' => 'I<sup>2</sup><sub>T</sub> * Z'
            ),
            $this->function_strings[5] => array(
                'Formula:<br>' => 'I<sub>T</sub> * Z'
            ),
            $this->function_strings[6] => array(
                'Formula:<br>' => 'E<sup>2</sup><sub>T</sub> / VA'
            ),
            $this->function_strings[7] => array(
                'Formula:<br>' => 'E<sup>2</sup><sub>T</sub> / Z'
            ),
            $this->function_strings[8] => array(
                'Formula:<br>' => 'VA / I<sub>T</sub>'
            ),
            $this->function_strings[9] => array(
                'Formula:<br>' => 'VA / I<sup>2</sup><sub>T</sub>'
            ),
            $this->function_strings[10] => array(
                'Formula:<br>' => 'sqrt( (VARs<sub>L</sub> - VARs<sub>C</sub>)<sup>2</sup> + P<sup>2</sup>)'
            ),
            $this->function_strings[11] => array(
                'Formula:<br>' => 'sqrt( VA + Z )'
            ),
            $this->function_strings[12] => array(
                'Formula:<br>' => 'R * PF'
            ),
            $this->function_strings[13] => array(
                'Formula:<br>' => 'P / PF'
            ),
            $this->function_strings[14] => array(
                'Formula:<br>' => 'sqrt( I<sub>R</sub><sup>2</sup> + (I<sub>L</sub> - I<sub>C</sub>)<sup>2</sup>)'
            ),
            $this->function_strings[15] => array(
                'Formula:<br>' => 'Z / R'
            ),
            $this->function_strings[16] => array(
                'Formula:<br>' => 'I<sub>L</sub> * X<sub>L</sub>'
            ),
            $this->function_strings[17] => array(
                'Formula:<br>' => 'E<sub>T</sub> / Z'
            ),
            $this->function_strings[18] => array(
                'Formula:<br>' => 'P / VA'
            ),
            $this->function_strings[19] => array(
                'Formula:<br>' => 'VARs<sub>L</sub> / I<sub>L</sub>'
            ),
            $this->function_strings[20] => array(
                'Formula:<br>' => 'VA / E<sub>T</sub>'
            ),
            $this->function_strings[21] => array(
                'Formula:<br>' => 'I<sub>R</sub> / I<sub>T</sub>'
            ),
            $this->function_strings[22] => array(
                'Formula:<br>' => 'sqrt( VARs<sub>L</sub> * X<sub>L</sub> )'
            ),
            $this->function_strings[23] => array(
                'Formula:<br>' => 'sqrt( VA / Z )'
            ),
            $this->function_strings[24] => array(
                'Formula:<br>' => 'cos(Angle Theta)'
            ),
            $this->function_strings[25] => array(
                'Formula:<br>' => 'I<sub>R</sub> / PF'
            ),
            $this->function_strings[26] => array(
                'Formula:<br>' => 'E<sub>L</sub> / X<sub>L</sub>'
            ),
            $this->function_strings[27] => array(
                'Formula:<br>' => 'VARs<sub>L</sub> / E<sub>L</sub>'
            ),
            $this->function_strings[28] => array(
                'Formula:<br>' => 'sqrt( VARs<sub>L</sub> / X<sub>L</sub> )'
            ),
            $this->function_strings[29] => array(
                'Formula:<br>' => 'E<sub>L</sub><sup>2</sup> / X<sub>L</sub>'
            ),
            $this->function_strings[30] => array(
                'Formula:<br>' => 'I<sub>L</sub><sup>2</sup> * X<sub>L</sub>'
            ),
            $this->function_strings[31] => array(
                'Formula:<br>' => 'E<sub>L</sub> * I<sub>L</sub>'
            ),
            $this->function_strings[32] => array(
                'Formula:<br>' => 'E<sub>C</sub><sup>2</sup> / X<sub>C</sub>'
            ),
            $this->function_strings[33] => array(
                'Formula:<br>' => 'I<sub>C</sub><sup>2</sup> * X<sub>C</sub>'
            ),
            $this->function_strings[34] => array(
                'Formula:<br>' => 'E<sub>C</sub> * I<sub>C</sub>'
            ),
            $this->function_strings[35] => array(
                'Formula:<br>' => 'E<sub>L</sub> / I<sub>L</sub>'
            ),
            $this->function_strings[36] => array(
                'Formula:<br>' => 'I<sub>R</sub> * R'
            ),
            $this->function_strings[37] => array(
                'Formula:<br>' => 'sqrt( I<sub>T</sub><sup>2</sup> - (I<sub>L</sub> - I<sub>C</sub>)<sup>2</sup> )'
            ),
            $this->function_strings[38] => array(
                'Formula:<br>' => '2 * PI * f * L'
            ),
            $this->function_strings[39] => array(
                'Formula:<br>' => 'sqrt( P * R )'
            ),
            $this->function_strings[40] => array(
                'Formula:<br>' => 'E<sub>R</sub> / R'
            ),
            $this->function_strings[41] => array(
                'Formula:<br>' => 'E<sub>L</sub><sup>2</sup> / VARs<sub>L</sub>'
            ),
            $this->function_strings[42] => array(
                'Formula:<br>' => 'P / I<sub>R</sub>'
            ),
            $this->function_strings[43] => array(
                'Formula:<br>' => 'P / E<sub>R</sub>'
            ),
            $this->function_strings[44] => array(
                'Formula:<br>' => 'VARs<sub>L</sub> / I<sub>L</sub><sup>2</sup>'
            ),
            $this->function_strings[45] => array(
                'Formula:<br>' => 'E<sub>R</sub> / I<sub>R</sub>'
            ),
            $this->function_strings[46] => array(
                'Formula:<br>' => 'sqrt( P / R )'
            ),
            $this->function_strings[47] => array(
                'Formula:<br>' => 'sqrt( VA<sup>2</sup> - (VARs<sub>L</sub> - VARs<sub>C</sub>)<sup>2</sup> )'
            ),
            $this->function_strings[48] => array(
                'Formula:<br>' => 'I<sub>T</sub> * PF'
            ),
            $this->function_strings[49] => array(
                'Formula:<br>' => 'P / I<sub>R</sub><sup>2</sup>'
            ),
            $this->function_strings[50] => array(
                'Formula:<br>' => 'VA * PF'
            ),
            $this->function_strings[51] => array(
                'Formula:<br>' => 'VARs<sub>C</sub> / I<sub>C</sub>'
            ),
            $this->function_strings[52] => array(
                'Formula:<br>' => 'Z / PF'
            ),
            $this->function_strings[53] => array(
                'Formula:<br>' => 'E<sub>R</sub> * I<sub>R</sub>'
            ),
            $this->function_strings[54] => array(
                'Formula:<br>' => 'I<sub>C</sub> * X<sub>C</sub>'
            ),
            $this->function_strings[55] => array(
                'Formula:<br>' => 'E<sub>R</sub><sup>2</sup> / P'
            ),
            $this->function_strings[56] => array(
                'Formula:<br>' => 'E<sub>R</sub><sup>2</sup> / R'
            ),
            $this->function_strings[57] => array(
                'Formula:<br>' => 'sqrt( VARs<sub>C</sub> * X<sub>C</sub> )'
            ),
            $this->function_strings[58] => array(
                'Formula:<br>' => 'sqrt( (1 / Z)<sup>2</sup> - ( 1 / X<sub>L</sub> - 1 / X<sub>C</sub> )<sup>2</sup> )'
            ),
            $this->function_strings[59] => array(
                'Formula:<br>' => 'I<sub>R</sub><sup>2</sup> * R'
            ),
            $this->function_strings[60] => array(
                'Formula:<br>' => 'X<sub>L</sub> / (2 * PI * f)'
            ),
            $this->function_strings[61] => array(
                'Formula:<br>' => 'sqrt( VARs<sub>C</sub> / X<sub>C</sub> )'
            ),
            $this->function_strings[62] => array(
                'Formula:<br>' => 'VARs<sub>C</sub> / E<sub>C</sub>'
            ),
            $this->function_strings[63] => array(
                'Formula:<br>' => 'VARs<sub>C</sub> / I<sub>C</sub><sup>2</sup>'
            ),
            $this->function_strings[64] => array(
                'Formula:<br>' => 'E<sub>C</sub> / I<sub>C</sub>'
            ),
            $this->function_strings[65] => array(
                'Formula:<br>' => 'E<sub>C</sub><sup>2</sup> / VARs<sub>C</sub>'
            ),
            $this->function_strings[66] => array(
                'Formula:<br>' => '1 / (2 * PI * f * X<sub>C</sub>)'
            ),
        );
        #}}}

    }
}
$cats["Resistive Inductive Capacitive Parallel"] = new Resistive_Inductive_Capacitive_Parallel();
