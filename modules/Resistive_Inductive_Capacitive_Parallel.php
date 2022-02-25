<?php
# SYNOPSIS: Resistive Inductive Capacitive in Parallel Formulas
#
# Resistive_Inductive_Capacitive_Parallel.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:53:31 PM PDT
# Last Update: 2022-02-25: 15:25
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
        $this->function_list = array();
        #}}}

        #{{{ Inputs
        $this->functionInputs = array();
        #}}}

        #{{{ Formula List
        $this->formula_list = array();
        #}}}

    }
}
