<?php
# SYNOPSIS: Resistive Inductive in Parallel Formulas
# 
# Resistive_Inductive_Parallel.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:54:42 PM PDT
# Last Update: 2022-02-16: 14:13
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

class Resistive_Inductive_Parallel extends FormulaBase{
    function __construct(){

        #{{{ Function Titles
        $this->function_strings = array(
            # 57 Function Titles
            1 => "Impedance using Resistance and Inductive Reactance",
            2 => "Impedance using Total Volts and Total Amps",
            3 => "Impedance using Total Volts and Volt Amps",
            4 => "Impedance using Volt Amps and Total Amps",
            5 => "Impedance using Resistance and Power Factor",
            6 => "Inductive Reactance using Frequency and Inductor Rating",
            7 => "Inductive Reactance using Impedance and Resistance",
            8 => "Inductive Reactance using Inductor VAR's and Inductor Amps",
            9 => "Inductive Reactance using Inductor Volts and Inductor Amps",
            10 => "Inductive Reactance using Inductor Volts and Inductor VAR's",
            11 => "Inductor Amps using Inductor VAR's and Inductor Volts",
            12 => "Inductor Amps using Inductor VAR's and Inductive Reactance",
            13 => "Inductor Amps using Inductor Volts and Inductive Reactance",
            14 => "Inductor Amps using Total Amps and Resistor Amps",
            15 => "Inductor Rating using Inductive Reactance and Frequency",
            16 => "Inductor VAR's using Inductor Amps and Inductive Reactance",
            17 => "Inductor VAR's using Inductor Volts and Inductor Amps",
            18 => "Inductor VAR's using Inductor Volts and Inductive Reactance",
            19 => "Inductor VAR's using Volt Amps and Watts",
            20 => "Inductor Volts using Inductor VAR's and Inductive Reactance",
            21 => "Inductor Volts using Inductor Amps and Inductive Reactance",
            22 => "Inductor Volts using Inductor VAR's and Inductor Amps",
            23 => "Power Factor using CoSine and Theta Angle",
            24 => "Power Factor using Impedance and Resistance",
            25 => "Power Factor using Resistor Amps and Total Amps",
            26 => "Power Factor using Watts and Volt Amps",
            27 => "Resistance using Impedance and Inductive Reactance",
            28 => "Resistance using Impedance and Power Factor",
            29 => "Resistance using Resistor Volts and Resistor Amps",
            30 => "Resistance using Watts and Resistor Amps",
            31 => "Resistor Amps using Resistor Volts and Resistance",
            32 => "Resistor Amps using Total Amps and Inductor Amps",
            33 => "Resistor Amps using Total Amps and Power Factor",
            34 => "Resistor Amps using Watts and Resistance",
            35 => "Resistor Amps using Watts and Resistor Volts",
            36 => "Resistor Volts using Resistor Amps and Resistance",
            37 => "Resistor Volts using Watts and Resistance",
            38 => "Resistor Volts using Watts and Resistor Amps",
            39 => "Total Amps using Resistor Amps and Inductor Amps",
            40 => "Total Amps using Resistor Amps and Power Factor",
            41 => "Total Amps using Total Volts and Impedance",
            42 => "Total Amps using Volt Amps and Total Volts",
            43 => "Total Amps using Volt Amps and Impedance",
            44 => "Total Volts using Total Amps and Impedance",
            45 => "Total Volts using Volt Amps and Impedance",
            46 => "Total Volts using Volt Amps and Total Amps",
            47 => "Volt Amps using Total Amps and Impedance",
            48 => "Volt Amps using Total Volts and Impedance",
            49 => "Volt Amps using Total Volts and Total Amps",
            50 => "Volt Amps using Watts and Inductor VAR's",
            51 => "Volt Amps using Watts and Power Factor",
            52 => "Watts using Resistor Amps and Resistance",
            53 => "Watts using Resistor Volts and Resistance",
            54 => "Watts using Resistor Volts and Resistor Amps",
            55 => "Watts using Volt Amps and Inductor VAR's",
            56 => "Watts using Volt Amps and Power Factor",
            57 => "Resistance using Resistor Volts and Watts",
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
