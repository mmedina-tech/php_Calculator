<?php
# SYNOPSIS: Resistive Capacitive in Series Formulas
# 
# Resistive_Capacitive_Series.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:52:22 PM PDT
# Last Update: 2022-01-18: 09:03
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

class Resistive_Capacitive_Series extends FormulaBase{
    function __construct(){
        $this->error_msg = "Can not be a negative square root";

        #{{{ Function Titles
        $this->function_strings = array(
            1 => "Capacitive Reactance using Capacitor VAR's and Capacitor Amps",
            2 => "Capacitive Reactance using Capacitor Volts and Capacitor Amps",
            3 => "Capacitive Reactance using Capacitor Volts and Capacitor VAR's",
            4 => "Capacitive Reactance using Frequency and Capacitor Rating",
            5 => "Capacitive Reactance using Impedance and Resistance",
            6 => "Capacitor Amps using Capacitor VAR's and Capacitor Volts",
            7 => "Capacitor Amps using Capacitor VAR's and Capacitive Reactance",
            8 => "Capacitor Amps using Capacitor Volts and Capacitive Reactance",
            9 => "Capacitor Rating using Frequency and Capacitive Reactance",
            10 => "Capacitor VAR's using Volt Amps and Watts",
            11 => "Capacitor VAR's using Capacitor Amps and Capacitive Reactance",
            12 => "Capacitor VAR's using Capacitor Volts and Capacitive Reactance",
            13 => "Capacitor VAR's using Capacitor Volts and Capacitor Amps",
            14 => "Capacitor Volts using Capacitor Amps and Capacitive Reactance",
            15 => "Capacitor Volts using Total Volts and Resistor Volts",
            16 => "Capacitor Volts using Capacitor VAR's and Capacitive Reactance",
            17 => "Capacitor Volts using Capacitor VAR's and Capacitor Amps",
            18 => "Impedance using Resistance Capacitive Reactance",
            19 => "Impedance using Total Volts and Total Amps",
            20 => "Impedance using Volt Amps and Total Amps",
            21 => "Impedance using Resistance and Power Factor",
            22 => "Impedance using Total Volts and Volt Amps",
            23 => "Power Factor using Resistance and Impedance",
            24 => "Power Factor using Watts and Volt Amps",
            25 => "Power Factor using Resistor Volts and Total Volts",
            26 => "Power Factor using CoSine and Theta Angle",
            27 => "Resistance using Watts and Resistor Amps",
            28 => "Resistance using Impedance and Capacitive Reactance",
            29 => "Resistance using Resistor Volts and Watts",
            30 => "Resistance using Impedance and Power Factor",
            31 => "Resistance using Resistor Volts and Resistor Amps",
            32 => "Resistor Amps using Resistor Volts and Resistance",
            33 => "Resistor Amps using Watts and Resistor Volts",
            34 => "Resistor Amps using Watts and Resistance",
            35 => "Resistor Volts using Total Volts and Capacitor Volts",
            36 => "Resistor Volts using Total Volts and Power Factor",
            37 => "Resistor Volts using Resistor Amps and Resistance",
            38 => "Resistor Volts using Watts and Resistance",
            39 => "Resistor Volts using Watts and Resistor Amps",
            40 => "Total Amps using Total Volts and Impedance",
            41 => "Total Amps using Volt Amps and Total Volts",
            42 => "Total Volts using Resistor Volts and Capacitor Volts",
            43 => "Total Volts using Total Amps and Impedance",
            44 => "Total Volts using Volt Amps and Total Amps",
            45 => "Total Volts using Resistor Volts and Power Factor",
            46 => "Volt Amps using Total Volts and Total Amps",
            47 => "Volt Amps using Total Amps and Impedance",
            48 => "Volt Amps using Total Volts and Impedance",
            49 => "Volt Amps using Watts and Capacitor VAR's",
            50 => "Volt Amps using Watts and Power Factor",
            51 => "Watts using Resistor Volts and Resistor Amps",
            52 => "Watts using Volt Amps and Capacitor VAR's",
            53 => "Watts using Resistor Volts and Resistance",
            54 => "Watts using Resistor Amps and Resistance",
            55 => "Watts using Volt Amps and Power Factor",
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
