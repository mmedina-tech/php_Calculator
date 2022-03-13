<?php
# SYNOPSIS: Resistive Inductive Capacitive in Series Formulas
#
# Resistive_Inductive_Capacitive_Series.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:54:00 PM PDT
# Last Update: 2022-03-12: 16:24
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

class Resistive_Inductive_Capacitive_Series extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                "Total Volts using Resistor Volts, Inductor Volts, and Capacitor Volts",
                function($num, $num2, $num3){
                    $result = sqrt( pow($num, 2) + (pow($num2 - $num3, 2)));
                    return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
                },
                array(
                    'number_input' => "Resistor Volts (input): ",
                    'number_input2' => "Inductor Votls (input): ",
                    'number_input3' => "Capacitor Votls (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(E<sup>2</sup><sub>R</sub> + (E<sub>L</sub> - E<sub>C</sub>)<sup>2</sup>)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Total Volts using Total Amps and Impedance",
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
                },
                array(
                    'number_input' => "Total Amps (input): ",
                    'number_input2' => "Impedance (input): ",
                ),
                array(
                    'Formula:<br>' => 'I<sub>T</sub> * Z'
                ),
            ),
            FormulaBase::create_func_entry(
                "Total Volts using Volt Amps and Total Amps",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
                },
                array(
                    'number_input' => "Volt Amps (input): ",
                    'number_input2' => "Total Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'VA / I<sub>T</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Total Volts using Resistor Volts and Power Factor",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
                },
                array(
                    'number_input' => "Resistor Volts (input): ",
                    'number_input2' => "Power Factor (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>R</sub> / PF'
                ),
            ),
            FormulaBase::create_func_entry(
                "Volt Amps using Total Volts and Total Amps",
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
                },
                array(
                    'number_input' => "Total Volts (input): ",
                    'number_input2' => "Total Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>T</sub> * I<sub>T</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Volt Amps using Total Amps and Impedance",
                function($num, $num2){
                    $result = pow($num, 2) * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
                },
                array(
                    'number_input' => "Total Amps (input): ",
                    'number_input2' => "Impedance (input): ",
                ),
                array(
                    'Formula:<br>' => 'I<sub>T</sub><sup>2</sup> * Z'
                ),
            ),
            FormulaBase::create_func_entry(
                "Volt Amps using Watts and Power Factor",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
                },
                array(
                    'number_input' => "Watts (input): ",
                    'number_input2' => "Power Factor (input): ",
                ),
                array(
                    'Formula:<br>' => 'P / PF'
                ),
            ),
            FormulaBase::create_func_entry(
                "Volt Amps using Total Volts and Impedance",
                function($num, $num2){
                    $result = pow($num, 2) / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
                },
                array(
                    'number_input' => "Total Volts (input): ",
                    'number_input2' => "Impedance (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>T</sub><sup>2</sup> / Z'
                ),
            ),
            FormulaBase::create_func_entry(
                "Volt Amps using Watts, Inductor VAR's, and Capacitor VAR's",
                function($num, $num2, $num3){
                    $result = sqrt(pow($num, 2) + ($num2 - pow($num3, 2)));
                    return array($this->prec($result, 4), $this->pluralize($result, 'Volt Amp'));
                },
                array(
                    'number_input' => "Watts (input): ",
                    'number_input2' => "Inductor VAR's (input): ",
                    'number_input3' => "Capacitor VAR's (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(P<sup>2</sup> + (VARs<sub>L</sub> - VARs<sub>C</sub>)<sup>2</sup>)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Watts using Resistor Volts and Resistor Amps",
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => "Resistor Volts (input): ",
                    'number_input2' => "Resistor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>R</sub> * I<sub>R</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Watts using Volt Amps, Inductor VAR's, and Capacitor VAR's",
                function($num, $num2, $num3){
                    $result = pow($num, 2) - pow($num2 - $num3, 2);
                    if ( $result <= 0 ){
                        return array($this->error_msg, '');
                    }
                    $result = sqrt($result);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => "Volt Amps (input): ",
                    'number_input2' => "Inductor VAR's (input): ",
                    'number_input3' => "Capacitor VAR's (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(VA<sup>2</sup> + (VARs<sub>L</sub> - VARs<sub>C</sub>)<sup>2</sup>)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Watts using Resistor Volts and Resistance",
                function($num, $num2){
                    $result = pow($num, 2) / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => "Resistor Volts (input): ",
                    'number_input2' => "Resistance (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>R</sub><sup>2</sup> / R'
                ),
            ),
            FormulaBase::create_func_entry(
                "Watts using Resistor Amps and Resistance",
                function($num, $num2){
                    $result = pow($num, 2) * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => "Resistor Amps (input): ",
                    'number_input2' => "Resistance (input): ",
                ),
                array(
                    'Formula:<br>' => 'I<sub>R</sub><sup>2</sup> * R'
                ),
            ),
            FormulaBase::create_func_entry(
                "Watts using Volt Amps and Power Factor",
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Watt'));
                },
                array(
                    'number_input' => "Volt Amps (input): ",
                    'number_input2' => "Power Factor (input): ",
                ),
                array(
                    'Formula:<br>' => 'VA * PF'
                ),
            ),
            FormulaBase::create_func_entry(
                "Impedance using Resistance, Inductive Reactance, and Capacitive Reactance",
                function($num, $num2, $num3){
                    $result = pow($num, 2) + pow($num2 - $num3, 2);
                    if ( $result <= 0 ){
                        return array($this->error_msg, '');
                    }
                    $result =  sqrt($result);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
                },
                array(
                    'number_input' => "Resistance (input): ",
                    'number_input2' => "Inductive Reactance (input): ",
                    'number_input3' => "Capacitive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(R<sup>2</sup> + (X<sub>L</sub> - X<sub>C</sub>)<sup>2</sup>)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Impedance using Total Volts and Total Amps",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
                },
                array(
                    'number_input' => "Total Volts (input): ",
                    'number_input2' => "Total Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>T</sub> / I<sub>T</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Impedance using Volt Amps and Total Amps",
                function($num, $num2){
                    $result = $num / pow($num2, 2);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
                },
                array(
                    'number_input' => "Volt Amps (input): ",
                    'number_input2' => "Total Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'VA / I<sub>T</sub><sup>2</sup>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Impedance using Resistance and Power Factor",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Impedance'));
                },
                array(
                    'number_input' => "Resistance (input): ",
                    'number_input2' => "Power Factor (input): ",
                ),
                array(
                    'Formula:<br>' => 'R / PF'
                ),
            ),
            FormulaBase::create_func_entry(
                "Power Factor using Resistance and Impedance",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
                },
                array(
                    'number_input' => "Resistance (input): ",
                    'number_input2' => "Impedance (input): ",
                ),
                array(
                    'Formula:<br>' => 'R / Z'
                ),
            ),
            FormulaBase::create_func_entry(
                "Power Factor using Watts and Volt Amps",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
                },
                array(
                    'number_input' => "Watts (input): ",
                    'number_input2' => "Volt Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'P / VA'
                ),
            ),
            FormulaBase::create_func_entry(
                "Power Factor using Resistor Volts and Total Volts",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
                },
                array(
                    'number_input' => "Resistor Volts (input): ",
                    'number_input2' => "Total Volts (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>R</sub> / E<sub>T</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Power Factor using CoSine and Theta Angle",
                function($num){
                    $result = cos( $num );
                    return array($this->prec($result, 4), $this->pluralize($result, 'Power Factor'));
                },
                array(
                    'number_input' => 'Theta Angle (input): ',
                ),
                array(
                    'Formula:<br>' => 'CoSine(Theta Angle)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitor Amps using Capacitor Volts and Capacitive Reactance",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Amp'));
                },
                array(
                    'number_input' => "Capacitor Volts (input): ",
                    'number_input2' => "Capacitive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>C</sub> / X<sub>C</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitor Amps using Capacitor VAR's and Capacitor Volts",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Amp'));
                },
                array(
                    'number_input' => "Capacitor VAR's (input): ",
                    'number_input2' => "Capacitor Volts (input): ",
                ),
                array(
                    'Formula:<br>' => 'VARs<sub>C</sub> / E<sub>C</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitor Amps using Capacitor VAR's and Capacitive Reactance",
                function($num, $num2){
                    $result = sqrt( $num / $num2 );
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Amp'));
                },
                array(
                    'number_input' => "Capacitor VAR's (input): ",
                    'number_input2' => "Capacitive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(VARs<sub>C</sub> / X<sub>C</sub>)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistor Volts using Resistor Amps and Resistance",
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
                },
                array(
                    'number_input' => "Resistor Amps (input): ",
                    'number_input2' => "Resistance (input): ",
                ),
                array(
                    'Formula:<br>' => 'I<sub>R</sub> * R'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistor Volts using Watts and Resistor Amps",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
                },
                array(
                    'number_input' => "Watts (input): ",
                    'number_input2' => "Resistor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'P / I<sub>R</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Total Volts using Volt Amps and Impedance",
                function($num, $num2){
                    $result = sqrt( $num * $num2 );
                    return array($this->prec($result, 4), $this->pluralize($result, 'Total Volt'));
                },
                array(
                    'number_input' => "Volt Amps (input): ",
                    'number_input2' => "Impedance (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(VAR * Z)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Total Amps using Total Volts and Impedance",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Total Amp'));
                },
                array(
                    'number_input' => "Total Volts (input): ",
                    'number_input2' => "Impedance (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>T</sub> / Z'
                ),
            ),
            FormulaBase::create_func_entry(
                "Total Amps using Volt Amps and Total Volts",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Total Amp'));
                },
                array(
                    'number_input' => "Volt Amps (input): ",
                    'number_input2' => "Total Volts (input): ",
                ),
                array(
                    'Formula:<br>' => 'VA / E<sub>T</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Total Amps using Volt Amps and Impedance",
                function($num, $num2){
                    $result = sqrt( $num / $num2 );
                    return array($this->prec($result, 4), $this->pluralize($result, 'Total Amp'));
                },
                array(
                    'number_input' => "Volt Amps (input): ",
                    'number_input2' => "Impedance (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(VA / Z)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistor Amps using Resistor Volts and Resistance",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Amp'));
                },
                array(
                    'number_input' => "Resistor Volts (input): ",
                    'number_input2' => "Resistance (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>R</sub> / R'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistor Amps using Watts and Resistor Volts",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Amp'));
                },
                array(
                    'number_input' => "Watts (input): ",
                    'number_input2' => "Resistor Volts (input): ",
                ),
                array(
                    'Formula:<br>' => 'P / E<sub>R</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistor Amps using Watts and Resistance",
                function($num, $num2){
                    $result = sqrt( $num / $num2 );
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Amp'));
                },
                array(
                    'number_input' => "Watts (input): ",
                    'number_input2' => "Resistance (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(P / R)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistance using Impedance, Inductive Reactance, and Capacitive Reactance",
                function($num, $num2, $num3){
                    $result = pow($num, 2) - pow($num2 - $num3, 2);
                    if ( $result <= 0 ){
                        return array($this->error_msg, '');
                    }
                    $result = sqrt($result);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
                },
                array(
                    'number_input' => "Impedance (input): ",
                    'number_input2' => "Inductive Reactance (input): ",
                    'number_input3' => "Capacitive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(Z<sup>2</sup> - (X<sub>L</sub> - X<sub>C</sub>)<sup>2</sup>)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistance using Resistor Volts and Resistor Amps",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
                },
                array(
                    'number_input' => "Resistor Volts (input): ",
                    'number_input2' => "Resistor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>R</sub> / I<sub>R</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistance using Resistor Volts and Watts",
                function($num, $num2){
                    $result = pow($num,2) / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
                },
                array(
                    'number_input' => "Resistor Volts (input): ",
                    'number_input2' => "Watts (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>R</sub><sup>2</sup> / P'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistance using Impedance and Power Factor",
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
                },
                array(
                    'number_input' => "Impedance (input): ",
                    'number_input2' => "Power Factor (input): ",
                ),
                array(
                    'Formula:<br>' => 'Z * PF'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistance using Watts and Resistor Amps",
                function($num, $num2){
                    $result = $num / pow($num2,2);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistance'));
                },
                array(
                    'number_input' => "Watts (input): ",
                    'number_input2' => "Resistor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'P / I<sub>R</sub><sup>2</sup>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitor Volts using Capacitor Amps and Capacitive Reactance",
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Volt'));
                },
                array(
                    'number_input' => "Capacitor Amps (input): ",
                    'number_input2' => "Capacitive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'I<sub>C</sub> * X<sub>C</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitor VAR's using Capacitor Amps and Capacitive Reactance",
                function($num, $num2){
                    $result = pow($num,2) * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor VAR'));
                },
                array(
                    'number_input' => "Capacitor Amps (input): ",
                    'number_input2' => "Capacitive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'I<sub>C</sub><sup>2</sup> * X<sub>C</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitor VAR's using Capacitor Volts and Capacitive Reactance",
                function($num, $num2){
                    $result = pow($num,2) / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor VAR'));
                },
                array(
                    'number_input' => "Capacitor Volts (input): ",
                    'number_input2' => "Capacitive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>C</sub><sup>2</sup> / X<sub>C</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitor VAR's using Capacitor Volts and Capacitor Amps",
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor VAR'));
                },
                array(
                    'number_input' => "Capacitor Volts (input): ",
                    'number_input2' => "Capacitor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>C</sub> * I<sub>C</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductive Reactance using Inductor Volts and Inductor Amps",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance'));
                },
                array(
                    'number_input' => "Inductor Volts (input): ",
                    'number_input2' => "Inductor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>L</sub> / I<sub>L</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductive Reactance using Inductor Volts and Inductor VAR's",
                function($num, $num2){
                    $result = pow($num,2) / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance'));
                },
                array(
                    'number_input' => "Inductor Volts (input): ",
                    'number_input2' => "Inductor VAR's (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>L</sub><sup>2</sup> / VARs<sub>L</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductive Reactance using Frequency and Inductor Reactance",
                function($num, $num2){
                    $result = 1 / (2 * $this->PI * $num * $num2);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance'));
                },
                array(
                    'number_input' => "Frequency (input): ",
                    'number_input2' => "Inductor Rating (input): ",
                ),
                array(
                    'Formula:<br>' => '2 * PI * F * L'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductive Reactance using Inductor VAR's and Inductor Amps",
                function($num, $num2){
                    $result = $num / pow($num2,2);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductive Reactance'));
                },
                array(
                    'number_input' => "Inductor VAR's (input): ",
                    'number_input2' => "Inductor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'VARs<sub>L</sub> / I<sub>L</sub><sup>2</sup>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductor Volts using Inductor Amps and Inductive Reactance",
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Volt'));
                },
                array(
                    'number_input' => "Inductor Amps (input): ",
                    'number_input2' => "Inductive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'I<sub>L</sub> * X<sub>L</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductor VAR's using Inductor Volts and Inductor Amps",
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductor VAR'));
                },
                array(
                    'number_input' => "Inductor Volts (input): ",
                    'number_input2' => "Inductor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>L</sub> * I<sub>L</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistor Volts using Total Volts, Inductor Volts, and Capacitor Volts",
                function($num, $num2, $num3){
                    $result = pow($num, 2) - pow($num2 - $num3, 2);
                    if ( $result <= 0 ){
                        return array($this->error_msg, '');
                    }
                    $result = sqrt($result);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
                },
                array(
                    'number_input' => "Total Volts (input): ",
                    'number_input2' => "Inductor Volts (input): ",
                    'number_input3' => "Capacitor Volts (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(E<sub>T</sub><sup>2</sup> - (E<sub>L</sub> - E<sub>C</sub>)<sup>2</sup>)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistor Volts using Total Volts and Power Factor",
                function($num, $num2){
                    $result = $num * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
                },
                array(
                    'number_input' => "Total Volts (input): ",
                    'number_input2' => "Power Factor (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>T</sub> * PF'
                ),
            ),
            FormulaBase::create_func_entry(
                "Resistor Volts using Watts and Resistance",
                function($num, $num2){
                    $result = sqrt( $num * $num2 );
                    return array($this->prec($result, 4), $this->pluralize($result, 'Resistor Volt'));
                },
                array(
                    'number_input' => "Watts (input): ",
                    'number_input2' => "Resistance (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(P * R)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductor Amps using Inductor Volts and Inductive Reactance",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Amp'));
                },
                array(
                    'number_input' => "Inductor Volts (input): ",
                    'number_input2' => "Inductive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>L</sub> / X<sub>L</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductor Amps using Inductor VAR's and Inductor Volts",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Amp'));
                },
                array(
                    'number_input' => "Inductor VAR's (input): ",
                    'number_input2' => "Inductor Volts (input): ",
                ),
                array(
                    'Formula:<br>' => 'VARs<sub>L</sub> / E<sub>L</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductor Amps using Inductor VAR's and Inductive Reactance",
                function($num, $num2){
                    $result = sqrt( $num / $num2 );
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Amp'));
                },
                array(
                    'number_input' => "Inductor VAR's (input): ",
                    'number_input2' => "Inductive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(VARs<sub>L</sub> / X<sub>L</sub>)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductor Volts using Inductor VAR's and Inductive Reactance",
                function($num, $num2){
                    $result = sqrt( $num * $num2 );
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Volt'));
                },
                array(
                    'number_input' => "Inductor VAR's (input): ",
                    'number_input2' => "Inductive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(VARs<sub>L</sub> *  X<sub>L</sub>)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductor VAR's using Inductor Volts and Inductive Reactance",
                function($num, $num2){
                    $result = pow($num,2) / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductor VAR'));
                },
                array(
                    'number_input' => "Inductor Volts (input): ",
                    'number_input2' => "Inductive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>L</sub><sup>2</sup> / X<sub>L</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitor Volts using Capacitor VAR's and Capacitive Reactance",
                function($num, $num2){
                    $result = sqrt( $num * $num2 );
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Volt'));
                },
                array(
                    'number_input' => "Capacitor VAR's (input): ",
                    'number_input2' => "Capacitive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'sqrt(VARs<sub>C</sub> * X<sub>C</sub>)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitor Volts using Capacitor VAR's and Capacitor Amps",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Volt'));
                },
                array(
                    'number_input' => "Capacitor VAR's (input): ",
                    'number_input2' => "Capacitor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'VARs<sub>C</sub> / I<sub>C</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitive Reactance using Frequency and Capacitor Rating",
                function($num, $num2){
                    $result = 1/( 2 * $this->PI * $num * $num2 );
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitive Reactance'));
                },
                array(
                    'number_input' => "Frequency (input): ",
                    'number_input2' => "Capacitor Rating (input): ",
                ),
                array(
                    'Formula:<br>' => '1 / (2 * PI * F * C)'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitive Reactance using Capacitor Volts and Capacitor VAR's",
                function($num, $num2){
                    $result = pow($num, 2) / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitive Reactance'));
                },
                array(
                    'number_input' => "Capacitor Volts (input): ",
                    'number_input2' => "Capacitor VAR's (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>C</sub><sup>2</sup> / VARs<sub>C</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitive Reactance using Capacitor Volts and Capacitor Amps",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitive Reactance'));
                },
                array(
                    'number_input' => "Capacitor Volts (input): ",
                    'number_input2' => "Capacitor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'E<sub>C</sub> / I<sub>C</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitive Reactance using Capacitor VAR's and Capacitor Amps",
                function($num, $num2){
                    $result = $num / pow($num2, 2);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitive Reactance'));
                },
                array(
                    'number_input' => "Capacitor VAR's (input): ",
                    'number_input2' => "Capacitor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'VARs<sub>C</sub> / I<sub>C</sub><sup>2</sup>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Capacitor Rating using Frequency and Capacitive Reactance",
                function($num, $num2){
                    $result = 1/ (2 * $this->PI * $num * $num2);
                    return array($this->prec($result, 4), $this->pluralize($result, 'Capacitor Rating'));
                },
                array(
                    'number_input' => "Frequency (input): ",
                    'number_input2' => "Capacitive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => '1 /( 2 * PI * F X<sub>C</sub> )'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductor Volts using Inductor VAR's and Inductor Amps",
                function($num, $num2){
                    $result = $num / $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductor Volt'));
                },
                array(
                    'number_input' => "Inductor VAR's (input): ",
                    'number_input2' => "Inductor Amps (input): ",
                ),
                array(
                    'Formula:<br>' => 'VARs<sub>L</sub> / I<sub>L</sub>'
                ),
            ),
            FormulaBase::create_func_entry(
                "Inductor VAR's using Inductor Amps and Inductive Reactance",
                function($num, $num2){
                    $result = pow($num, 2) * $num2;
                    return array($this->prec($result, 4), $this->pluralize($result, 'Inductor VAR'));
                },
                array(
                    'number_input' => "Inductor Amps (input): ",
                    'number_input2' => "Inductive Reactance (input): ",
                ),
                array(
                    'Formula:<br>' => 'I<sub>L</sub><sup>2</sup> * X<sub>L</sub>'
                ),
            ),
        );
    }
}
$cats["Resistive Inductive Capacitive Series"] = new Resistive_Inductive_Capacitive_Series();
